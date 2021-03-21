<?php

namespace App\SplObserver;

use SplSubject;

class SubscribeUserToServiceObserver implements \SplObserver
{

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject)
    {
        var_dump('Subscribe user to Mail service.');
    }
}