<?php

namespace App;

class BankTransaction extends TransactionPrototype
{
    public function __construct() {
        $this->topic = 'Bank';
    }
    
    public function __clone()
    {
    }
}
