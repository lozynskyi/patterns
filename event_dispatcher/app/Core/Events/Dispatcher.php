<?php

namespace App\Core\Events;

class Dispatcher
{
    protected array $listeners = [];

    public function getListeners(): array
    {
        return $this->listeners;
    }

    public function getListenersByEvent($name)
    {
        return $this->listeners[$name] ?? [];
    }

    public function addListener($name, Listener $listener)
    {
        $this->listeners[$name][] = $listener;
    }
}
