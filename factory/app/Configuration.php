<?php

namespace App;

class Configuration
{
    protected $data = [
        'upload' => [
            'default' => 's3',
            'services' => [
                's3' => [
                    'key' => '123key',
                    'secret' => '456secret'
                ],
                'udp' => [
                        'host' => 'abc.host'
                ]
            ]
        ]
    ];

    public function get($keys)
    {
        $data = $this->data;
        $keys = explode('.', $keys);

        foreach ($keys as $key) {
            if (array_key_exists($key, $data)) {
                $data = $data[$key];
                continue;
            }
        }

        return $data;
    }
}