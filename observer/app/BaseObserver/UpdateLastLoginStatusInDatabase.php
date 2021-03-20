<?php

namespace App\BaseObserver;

use App\BaseObserver\Contracts\Observer;

class UpdateLastLoginStatusInDatabase implements Observer
{
    public function handle($event)
    {
        var_dump('Update Login status in DB for user_id: ' . $event->user->id);
    }
}