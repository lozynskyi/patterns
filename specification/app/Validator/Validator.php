<?php

namespace App\Validator;

class Validator
{
    protected $rules = [];

    protected $input;

    public function __call($method, $arguments)
    {
        $this->rules[] = [
            'object' => $this->getRule($method),
            'argument' => $arguments
        ];
        return $this;
    }

    public function withInput($input)
    {
        $this->input = $input;
        return $this;
    }

    protected function getRule($rule)
    {
        $path = "App\Validator\Rules\\" . $rule;
        return new $path;
    }
}