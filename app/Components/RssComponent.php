<?php

namespace App\Components;

use GuzzleHttp\Client;

class RssComponent
{
    private const URL = 'http://nnm-club.me/forum/rss.php';

    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getRss(int $id): string
    {
        return (string)$this->client->get($this->buildQuery($id))->getBody();
    }

    private function buildQuery($id): string
    {
        return sprintf('%s%s%s', self::URL, '?', http_build_query(['f' => $id, 't' => 1]));
    }
}
