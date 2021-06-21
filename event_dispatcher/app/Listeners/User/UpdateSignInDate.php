<?php

namespace App\Listeners\User;

use App\Core\Events\Event;
use App\Core\Events\Listener;

class UpdateSignInDate extends Listener
{

    public function handle(Event $event)
    {
        echo 'Handled by UpdateSignInDate listener with user id ' . $event->user->id, PHP_EOL;
    }
}
