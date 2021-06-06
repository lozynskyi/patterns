<?php

namespace App;

class TaxHandler extends AbstractHandler
{
    /**
     * @inheritDoc
     */
    public function process(Transaction $transaction)
    {
        if (!$transaction->tax) {
            echo "Tax -- skipped!\n";
        } else {
            echo "Tax -- processed!\n";
        }

        $this->next($transaction);
    }
}
