<?php

namespace LinguaLeo\Fabric\Source;

use Doctrine\Common\Cache\FilesystemCache;
use GuzzleHttp\Client;
use GuzzleHttp\Subscriber\Cache\CacheStorage;
use GuzzleHttp\Subscriber\Cache\CacheSubscriber;

class RemoteGuzzle extends RemoteSource
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var Client
     */
    private $client;


    /**
     * @param string $url
     * @param bool   $useCache
     */
    function __construct($url, $useCache)
    {
        $this->url    = $url;
        $this->client = new Client();
        if ($useCache) {
            $filesystemCache = new FilesystemCache('/tmp/cache');
            CacheSubscriber::attach($this->client, [
                'storage' => new CacheStorage($filesystemCache)
            ]);
        }
    }

    /**
     * @inheritdoc
     */
    protected function fetchRawData()
    {
        return $this->client->get($this->url)->getBody()->__toString();
    }

}
