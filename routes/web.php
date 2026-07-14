<?php

use App\Http\Controllers\CustomWeb;
use App\Http\Controllers\LinkWeb;
use App\Http\Controllers\NormalWeb;
use App\Http\Controllers\RealtimeWeb;
use App\Models\Image;
use App\Models\User;
use App\Models\Website;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Nette\Utils\Json;


function viewHandler(Request $rq, string $slug)
{
    $website = Website::where('slug', $slug)->first();
    // init classes
    $normal_web = new NormalWeb;
    $realtime_web = new RealtimeWeb;
    $link_web = new LinkWeb;
    $custom_web = new CustomWeb;
    if ($website) {
        // giải json web và lấy image source
        $web_data = Json::decode($website->data);
        $image = Image::find($website->imageid);
        // add to image instance
        $web_data->image = $image ? $image->source : '';
        // lấy cấu hình web của user (chỉ lấy trừ web link để tối ưu)
        if ($website->type != 'link') {
            $user_settings = Json::decode(User::find($website->userid)->data)->web_setting;
        }
        // check valid domain
        $check_website = checkValidDomainWebsite($website);
        if (!$check_website['status']) {
            switch ($check_website['error']) {
                case 'invalid_domain':
                    return 'INVALID DOMAIN';
                case 'domain_not_found':
                    return 'DOMAIN NOT FOUND';
                case 'expired_time':
                    return 'EXPIRED TIME';
                case 'maintenance_or_hidden':
                    return 'MAINTENANCE OR HIDDEN';
                default:
                    return 'UNKNOWN ERROR';
            }
        }
        // cập nhật lượt truy cập
        $website->visitors += 1;
        $website->save();
        switch ($website->type) {
            case 'normal':
                return $normal_web->handler($rq, $web_data, $website, $user_settings);
            case 'realtime':
                return $realtime_web->handler($rq, $web_data, $website, $user_settings);
            case 'link':
                return $link_web->handler($rq, $web_data);
            case 'custom':
                return $custom_web->handler($rq, $web_data, $website, $user_settings);
        }
    }
}
Route::get('', function () {
    return response()->noContent(200);
});
Route::get('{slug}', function (Request $rq, $slug) {
    return viewHandler($rq, $slug);
});
Route::get('/share/{slug}', function (Request $rq, $slug) {
    return viewHandler($rq, $slug);
});
