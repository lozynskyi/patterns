<?php

namespace App;

use Transaction;

class FiscalHandler extends AbstractHandler
{

    /**
     * @inheritDoc
     */
    public function process(Transaction $transaction)
    {
        $this->next($transaction);
    }
}
