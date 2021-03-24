<?php

namespace App;

class Config
{
    protected $data = [
        'upload' => [
            'default' => 's3',
            's3' => [

            ],
            'udp' => [

            ]
        ]
    ];

    public function get($key) {

    }
}