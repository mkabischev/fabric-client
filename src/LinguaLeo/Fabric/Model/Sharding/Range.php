<?php

namespace LinguaLeo\Fabric\Model\Sharding;

class Range
{
    /**
     * @var int
     */
    private $lowerBound;

    /**
     * @var Shard
     */
    private $shard;


    /**
     * @param int   $lowerBound
     * @param Shard $shard
     */
    public function __construct($lowerBound, Shard $shard)
    {
        $this->lowerBound = $lowerBound;
        $this->shard      = $shard;
    }

    /**
     * @return int
     */
    public function getLowerBound()
    {
        return $this->lowerBound;
    }

    /**
     * @return Shard
     */
    public function getShard()
    {
        return $this->shard;
    }

}
