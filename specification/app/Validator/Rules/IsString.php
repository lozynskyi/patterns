<?php

namespace App\Validator\Rules;


class IsString
{
    public function isSatisfiedBy(string $input)
    {
        return is_string($input);
    }
}