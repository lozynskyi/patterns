<?php

namespace App;

class PspTransaction extends TransactionPrototype
{
    public function __construct($amount, $description) {
        $this->topic = 'PSP';
        $this->amount = $amount;
        $this->description = $description;
    }
    
    public function __clone()
    {
    }
}
