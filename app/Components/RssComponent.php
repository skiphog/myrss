<?php

namespace App\Components;

use GuzzleHttp\Client;

class RssComponent
{
    private const URL = 'http://docs.guzzlephp.org';

    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getRss(int $id): string
    {
        $result = $this->client->get(self::URL, [
            'query'           => [
                'f' => $id,
                't' => 1
            ],
            'debug'           => true,
            'connect_timeout' => 1.0,
            'timeout' => 1.0
        ]);

        dd($result->getBody(), $result->getHeaders(), $result->getHeaders());
    }

    private function buildQuery($id): string
    {
        return sprintf('%s%s%s', self::URL, '?', http_build_query(['f' => $id, 't' => 1]));
    }
}
