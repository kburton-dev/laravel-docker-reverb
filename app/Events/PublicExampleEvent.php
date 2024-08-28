<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;

class PublicExampleEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets;

    public string $foo;

    public function __construct()
    {
        $this->foo = fake()->sentence(3);
    }

    public function broadcastOn(): Channel
    {
        return new Channel('public.channel');
    }
}
