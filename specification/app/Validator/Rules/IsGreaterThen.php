<?php

namespace App\Validator\Rules;


class IsGreaterThen
{
    public function isSatisfiedBy(string $input, array $argument)
    {
        return strlen($input) > $argument[0];
    }
}