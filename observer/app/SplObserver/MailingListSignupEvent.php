<?php

namespace App\SplObserver;

use App\User;

class MailingListSignupEvent extends BaseEvent
{
    /**
     * @var User
     */
    public $user;

    public function __construct(User $user)
    {
        parent::__construct();
        $this->user = $user;
    }
}