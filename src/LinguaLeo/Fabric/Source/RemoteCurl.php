<?php

namespace LinguaLeo\Fabric\Source;

use LinguaLeo\Fabric\Fabric;

class RemoteCurl extends RemoteSource
{

    /**
     * @var
     */
    private $curl;

    public function __construct($url)
    {
        $this->curl = curl_init($url);
        curl_setopt($this->curl, CURLOPT_RETURNTRANSFER, true);
    }


    /**
     * @inheritdoc
     */
    protected function fetchRawData()
    {
        return curl_exec($this->curl);
    }

}
