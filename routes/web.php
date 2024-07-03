<?php

use Illuminate\Support\Facades\Route;
Route::get('/channelsend',[\App\Http\Controllers\ChannelController::class,'index']);
Route::get('/listchannel',[\App\Http\Controllers\ChannelController::class,'getchannel']);
Route::get('/xacthuc',[\App\Http\Controllers\ChannelController::class,'xacthuc']);
Route::get('/', function () {
    return view('welcome');
});
