<?php

use App\Models\Domain;
use App\Models\User;
use App\Models\Website;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Nette\Utils\Json;
use Illuminate\Support\Str;

function checkValidDomainWebsite(Website $web_data)
{
    if ($web_data) {
        $web_domain = Domain::find($web_data->domainid);
        if ($web_domain) {
            if ($web_domain->domain != $_SERVER['HTTP_HOST']) {
                return [
                    'status' => false,
                    'error' => 'invalid_domain'
                ];
            }
        } else {
            return [
                'status' => false,
                'error' => 'domain_not_found'
            ];
        }
        // check expired time
        $user = User::find($web_data->userid);
        if ($user) {
            $user_time = Json::decode($user->data)->webtime;
            if (now() >= $user_time) {
                return [
                    'status' => false,
                    'error' => 'expired_time'
                ];
            }
        }
        // check maintenance and hidden
        if ($web_domain->maintenance == 1 || $web_domain->hidden == 1) {
            return [
                'status' => false,
                'error' => 'maintenance_or_hidden'
            ];
        }
    }
    return [
        'status' => true,
    ];
}
function getRealIp()
{
    return request()->header('CF-Connecting-IP')
        ?? request()->header('X-Forwarded-For')
        ?? request()->ip();
}
function sendNormalTelegramNoti($id, $msg)
{
    $bot_token = config('telegrambot.normal');
    Http::get("https://api.telegram.org/bot$bot_token/sendMessage", [
        'chat_id' => $id,
        'text' => $msg,
        'parse_mode' => 'HTML'
    ]);
}
function generateMetaAdsCode()
{
   $letters = strtoupper(Str::random(3)); // 3 chữ cái
   $numbers = random_int(1000, 9999);     // 4 số
   $app = Str::random(3) . random_int(1, 9);       // APP + 1 số

   return strtoupper("$letters-$numbers-$app");
}
function randomEmojiUnique(int $length = 1): string
{
    $emojis = [
        '😀','😁','😂','🤣','😃','😄','😅','😆','😉','😊',
        '😍','🥰','😘','😗','😙','😚','🤩','🥳','😎','🤓',
        '🤔','🫣','🤭','🤫','😶','🙄','😏','😒','😔','😢',
        '😭','😤','😠','😡','🤬','😱','😨','😰','😥','😓',
        '😴','🥱','🤤','🤢','🤮','🤧','🥵','🥶','😵','🤯',
        '😇','🤠','🥺','🫠','🫡','🤗','😈','👻','💀','🤡',
        '👽','🤖','💩','❤️','💔','💕','💖','💯','🔥','✨',
        '🎉','🎊','👍','👎','👏','🙏','👌','🤝','💪','👀'
    ];

    shuffle($emojis);

    return implode('', array_slice($emojis, 0, min($length, count($emojis))));
}
// chặn ip
function check_blocked_ip(int $userid,string $ip)
{
    $data = User::find($userid);
    if ($data) {
        $list_blocked_ip = $data->blocked_ip ?? '';
        if (str_contains($list_blocked_ip, $ip)) {
            // trả về true nếu ip bị chặn
            return true;
        }
        
    }
    // trả về false nếu ip không bị chặn
    return false;
}
function getParamsLink(): string
{
    return "window.location.href='?" . Str::random(3) . '&' . Str::random(3) . "';";
}