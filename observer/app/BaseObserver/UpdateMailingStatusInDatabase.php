<?php

namespace App\BaseObserver;

use App\BaseObserver\Contracts\Observer;

class UpdateMailingStatusInDatabase implements Observer
{
    public function handle($event)
    {
        var_dump('Update status in DB id: ' . $event->user->id);
    }
}