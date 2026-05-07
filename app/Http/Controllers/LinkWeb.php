<?php

namespace App\Http\Controllers;

use App\Models\Website;
use Illuminate\Http\Request;

class LinkWeb extends Controller
{
    function handler(Request $rq, $web_data)
    {
        $redirect_link = $web_data->redirect_link;
        if (!$rq->exists('a')) {
            return view('init', ['data' => $web_data]);
        } else {
            // chuyển hướng user tới link đã được chỉ định
            return redirect($redirect_link, 302);
        }
    }
}
