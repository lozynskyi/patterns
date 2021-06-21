<?php

namespace App\Listeners\User;

use App\Core\Events\Event;
use App\Core\Events\Listener;

class SendSignInEmail extends Listener
{

    public function handle(Event $event)
    {
        echo 'Handled by SendSignInEmail listener ' . $event->user->email;
    }
}
