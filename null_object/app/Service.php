<?php

declare(strict_types=1);

namespace App;

class Service
{
    
    public function __construct(private LoggerInterface $logger)
    {
    }

    public function action()
    {
        // notice here that you don't have to check if the logger is set with eg. is_null(), instead just use it
        $this->logger->log('We are in ' . __METHOD__);
    }
}
