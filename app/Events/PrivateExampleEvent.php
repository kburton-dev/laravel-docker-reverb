<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;

class PrivateExampleEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets;

    public int $id = 69;

    public string $foo;

    public function __construct()
    {
        $this->foo = fake()->sentence(3);
    }

    public function broadcastOn(): PrivateChannel
    {
        return new PrivateChannel("private.channel.{$this->id}");
    }
}
