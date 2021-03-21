<?php

namespace App\SplObserver;

use SplSubject;

class UpdateMailingStatusInDatabaseObserver implements \SplObserver
{

    /**
     * @inheritDoc
     */
    public function update(SplSubject $subject)
    {
        var_dump('Update user in DB: ' . $subject->user->id);
    }
}