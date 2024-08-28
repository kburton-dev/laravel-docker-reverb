<?php

use App\Events\PrivateExampleEvent;
use App\Events\PublicExampleEvent;
use Illuminate\Support\Facades\Artisan;

Artisan::command('app:broadcast-public', function () {
    PublicExampleEvent::dispatch();
});

Artisan::command('app:broadcast-private', function () {
    PrivateExampleEvent::dispatch();
});
