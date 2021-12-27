<?php

namespace App;

class PspTransaction extends TransactionPrototype
{
    public function __construct() {
        $this->topic = 'PSP';
    }
    
    public function __clone()
    {
    }
}
