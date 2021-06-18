<?php

namespace App\Core\Events;

abstract class Event
{
    // add docblock
    public function getName(): string
    {
        return (new \ReflectionClass($this))->getShortName();
    }
}
