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
            echo 'Tax -- scipped!\n';
        }
         echo 'Tax -- processed!\n';
        
        $this->next($transaction);
    }
}
