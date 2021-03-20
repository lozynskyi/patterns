<?php

namespace App\BaseObserver;

use App\BaseObserver\Contracts\Observer;

class SubscribeUserToService implements Observer
{

    public function handle($event)
    {
        var_dump('Subscribe user to Service: ' . $event->user->email);
    }
}