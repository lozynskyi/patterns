<?php

namespace App;

class FiscalHandler extends AbstractHandler
{

    /**
     * @inheritDoc
     */
    public function process(Transaction $transaction)
    {
        if (!$transaction->fiscal) {
            echo "Fiscal -- skipped!\n";
        } else {
            echo "Fiscal -- processed!\n";
        }

        $this->next($transaction);
    }
}
