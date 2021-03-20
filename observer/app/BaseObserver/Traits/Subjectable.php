<?php

namespace App\BaseObserver\Traits;

use App\BaseObserver\Contracts\Observer;

trait Subjectable
{
    /** @var Observer[] */
    protected $observers = [];

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;

        return $this;
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
            $observer->handle($this);
        }
    }
}