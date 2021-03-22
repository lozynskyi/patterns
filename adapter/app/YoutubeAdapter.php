<?php

namespace App;

class YoutubeAdapter implements YouTubeAdapterInterface
{

    protected $client;

    public function __construct(YouTube $client)
    {
        $this->client = $client;
    }

    public function getViews($id): int
    {
        //Adopting original functionality to our own interface.
        return $this->client->getVideoViewCount($id);
    }
}