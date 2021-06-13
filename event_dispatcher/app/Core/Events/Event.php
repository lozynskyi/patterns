<?php

namespace App\Core\Events;

abstract class Event
{
    public function getName(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}
