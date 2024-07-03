<?php

namespace App\Http\Controllers;

use App\Events\TestbroadcastEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Broadcast;

class ChannelController extends Controller
{
    public function index(){

     //   event(new TestbroadcastEvent('Hiến gửi lời chào'));
       // \broadcast(new TestbroadcastEvent('hiến'))->toOthers();
    }
    public function getchannel(){
        $channels = Broadcast::channel()->getChannels();
        dd($channels);
    }
    public function xacthuc(){
        return true;
    }
}
