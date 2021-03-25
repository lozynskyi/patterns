<?php

namespace App;

class UploaderFactory
{
    protected $adapter;

    public function __construct(AdapterFactory $adapter)
    {
        $this->adapter = $adapter;
    }

    public function make(Configuration $config)
    {
        return new Uploader($this->adapter->make($config));
    }

}