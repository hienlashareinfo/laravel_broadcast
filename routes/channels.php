<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('private-channelp.{id}', function($key)  {
    return true;
});

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
