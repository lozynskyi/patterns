<?php

namespace App\SplObserver;

use SplObserver;

abstract class Event implements \SplSubject
{
    protected $storage;

    public function __construct()
    {
        $this->storage = new \SplObjectStorage();
    }

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer)
    {
        $this->storage->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer)
    {
        if (!$this->storage->contains($observer)) {
            return;
        }
        $this->storage->detach($observer);
    }

    /**
     * @inheritDoc
     */
    public function notify()
    {
        if (!count($this->storage)){
            return;
        }
        /** @var SplObserver $observer */
        foreach ($this->storage as $observer) {
            $observer->update();
        }
    }
}