<?php

namespace App\BaseObserver\Contracts;

interface Subject
{
    public function attach($observer);
    public function detach($observer);
    public function notify();
}