<?php

namespace App;

class BankTransaction extends TransactionPrototype
{
    public function __construct($amount, $description) {
        $this->topic = 'Bank';
        $this->amount = $amount;
        $this->description = $description;
    }
    
    public function __clone()
    {
    }
}
