<?php

namespace LinguaLeo\Fabric\Model\Sharding;

class Table
{
    private $name;
    private $column;

    /**
     * @var Map
     */
    private $map;

    /**
     * @param string $name
     * @param string $column
     * @param Map    $map
     */
    public function __construct($name, $column, Map $map)
    {
        $this->name   = $name;
        $this->column = $column;
        $this->map    = $map;
    }

    /**
     * @return string
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Map
     */
    public function getMap()
    {
        return $this->map;
    }

}
