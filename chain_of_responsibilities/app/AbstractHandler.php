<?php

namespace App;

abstract class AbstractHandler
{
    /**
     * @var AbstractHandler
     */
    public AbstractHandler $handler;

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
        if ($this->handler) {
            $this->handler->process($transaction);
        }
    }
}

