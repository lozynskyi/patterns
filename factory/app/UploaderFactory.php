<?php

namespace App;

class UploaderFactory
{
    protected $adapter;

    public function __construct(AdapterFactory $adapter)
    {
        $this->adapter = $adapter;
    }

    public function make()
    {
        return new Uploader();
    }

}