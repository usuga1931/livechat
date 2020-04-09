<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EnviarMensaje implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $nombre;
    public $mensaje;

    public function __construct($nombre, $mensaje)
    {
        $this->nombre  = $nombre;
        $this->mensaje = $mensaje;
    }

    public function broadcastOn()
    {
        return 'chat-channel';
    }

    public function broadcastAs()
    {
        return 'chat-event';
    }
}
