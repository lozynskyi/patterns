<?php

namespace App\Core\Events;

class Dispatcher
{
    protected $listeners = [];

    public function getListeners(): array
    {
        return $this->listeners;
    }
}
