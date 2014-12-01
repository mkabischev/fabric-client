<?php

namespace LinguaLeo\Fabric\Source;

use LinguaLeo\Fabric\Fabric;

abstract class RemoteSource implements SourceInterface
{
    /**
     * @return Fabric
     */
    final public function fetch()
    {
        $rawData = $this->fetchRawData();
        $version = substr($rawData, 0, 10);
        if (intval($version) === Fabric::getVersion()) {
            return unserialize(substr($rawData, 10));
        }
    }

    /**
     * @return string
     */
    abstract protected function fetchRawData();
}
