<?php

namespace LinguaLeo\Fabric\Model\Sharding;

class Shard
{
    private $id;
    private $groupId;
    private $state;

    public function __construct($id, $groupId, $state)
    {
        $this->groupId = $groupId;
        $this->id      = $id;
        $this->state   = $state;
    }

    /**
     * @return mixed
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

}
