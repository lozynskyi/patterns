<?php

namespace App\Validator;


class Validator
{
    protected $rules = [];

    public function __call($method, $arguments)
    {
        $this->rules[] = [
            'object' => $this->getRule($method),
            'argument' => $arguments
        ];
        return $this;
    }

    protected function getRule($rule)
    {
        return new $rule;
    }
}