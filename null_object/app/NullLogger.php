<?php

declare(strict_types=1);

namespace App;

class NullLogger implements LoggerInterface
{
    public function log(string $str)
    {
    }
}
