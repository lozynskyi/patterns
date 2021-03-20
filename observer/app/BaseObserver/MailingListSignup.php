<?php

namespace App\BaseObserver;

use App\BaseObserver\Contracts\Observer;
use App\BaseObserver\Contracts\Subject;

class MailingListSignup implements Subject
{
    /** @var Observer[] */
    protected $observers = [];

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        for ($i = 0; $i < count($this->observers); $i++) {
            if ($this->observers[$i] === $observer) {
                unset($this->observers[$i]);
            }
        }
        $this->observers = array_values($this->observers);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle();
        }
    }
}