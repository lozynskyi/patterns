<?php

namespace App\BaseObserver;

use App\BaseObserver\Contracts\Observer;
use App\BaseObserver\Contracts\Subject;
use App\BaseObserver\Traits\Subjectable;

class MailingListSignup implements Subject
{
    use Subjectable;

    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
}