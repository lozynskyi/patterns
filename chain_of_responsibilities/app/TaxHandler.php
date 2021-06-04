<?php

namespace App;

class TaxHandler extends AbstractHandler
{    
    /**
     * @inheritDoc
     */
    public function process(Transaction $transaction)
    {
        if (!$transaction->fiscal) {
            echo 'Fiscal -- scipped!\n';
        }
         echo 'Fiscal -- processed!\n';
        
        $this->next($transaction);
    }
}
