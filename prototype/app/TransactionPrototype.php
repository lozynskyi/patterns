<?php

namespace App;


abstract class TransactionPrototype
{
    protected string $description;
    protected string $topic;
    protected float $amount;
  
    abstract function __clone();
    
    public function getDescription()
    {
        return $this->description;
    }
    
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    public function getTopic()
    {
        return $this->topic;
    }
  
    public function getAmount()
    {
        return $this->amount;
    }
      
    public function setAmount(float $amount)
    {
        $this->amount = $amount;
    }
}
