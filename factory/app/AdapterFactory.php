<?php


namespace App;


use App\Adapters\S3Adapter;
use App\Adapters\UDPAdapter;

class AdapterFactory
{
    public function make(Configuration $config)
    {
        switch ($config->get('upload.default')) {
            case 's3':
                return new S3Adapter();
                break;
            case 'udp':
                return new UDPAdapter();
                break;
        }
    }
}