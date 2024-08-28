<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('private.channel.{id}', function ($user, $id) {
    return true;
});
