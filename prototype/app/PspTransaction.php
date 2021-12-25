<?php

namespace App;

class PspTransaction extends TransactionPrototype
{
    function __construct($amount, $description) {
        $this->topic = 'PSP';
        $this->amount = $amount;
        $this->description = $description;
    }
}
