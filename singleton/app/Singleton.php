<?php

namespace App;

class Singleton
{
    private static $instance;

    public static function getInstance(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }
        return self::$instance;
    }
}