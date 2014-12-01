<?php

namespace LinguaLeo\Fabric\Model\Sharding;

class Map
{
    private $id;

    private $type;

    /**
     * @var Range[]
     */
    private $ranges;

    /**
     * @param int $id
     * @param int $type
     */
    public function __construct($id, $type)
    {
        $this->id   = $id;
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param Range $range
     */
    public function addRange(Range $range)
    {
        $this->ranges[] = $range;
    }

    /**
     * @param int $value
     *
     * @return Range
     */
    public function findRange($value)
    {
        $range = null;
        for ($i = 0; $i < count($this->ranges); $i++) {
            $range = $this->ranges[$i];
            if ($value < $range->getLowerBound()) {
                if (isset($this->ranges[$i - 1])) {
                    return $this->ranges[$i - 1];
                } else {
                    throw new \RuntimeException();
                }
            }

        }

        return $range;
    }

}
