<?php

namespace LinguaLeo\Fabric\Source;

class RemoteSimple extends RemoteSource
{
    /**
     * @var string
     */
    private $url;

    public function __construct($url)
    {
        $this->url = $url;
    }


    /**
     * @inheritdoc
     */
    protected function fetchRawData()
    {
        return file_get_contents($this->url);
    }

}
