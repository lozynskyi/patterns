<?php

namespace App;

class LegalHandler extends AbstractHandler
{

    /**
     * @inheritDoc
     */
    public function process(Transaction $transaction)
    {
        if (!$transaction->legal) {
            echo "Legal -- skipped!\n";
        }
         echo "Legal -- processed!\n";

        $this->next($transaction);
    }
}
