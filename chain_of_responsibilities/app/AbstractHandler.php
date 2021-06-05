<?php

namespace App;

abstract class AbstractHandler
{
    /**
     * @var AbstractHandler
     */
    protected AbstractHandler $handler;

    /**
     * @param Transaction $transaction
     * @return mixed
     */
    abstract public function process(Transaction $transaction);

    /**
     * @param AbstractHandler $handler
     */
    public function setHandler(AbstractHandler $handler)
    {
        $this->handler = $handler;
    }

    public function next(Transaction $transaction)
    {
        if (isset($this->handler)) {
            $this->handler->process($transaction);
        }
    }
}

