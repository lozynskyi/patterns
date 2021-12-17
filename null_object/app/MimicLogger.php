<?php

declare(strict_types=1);

namespace App;

class MimicLogger implements LoggerInterface
{
    public function log(string $str)
    {
        echo $str;
    }
}
