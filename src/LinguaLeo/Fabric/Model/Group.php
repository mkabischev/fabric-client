<?php

namespace LinguaLeo\Fabric\Model;

class Group
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var Server[]
     */
    private $servers;

    /**
     * @param string $id
     * @param string $description
     */
    public function __construct($id, $description)
    {
        $this->id          = $id;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Server $server
     */
    public function addServer(Server $server)
    {
        $this->servers[] = $server;
    }

    /**
     * @return Server[]
     */
    public function getServers()
    {
        return $this->servers;
    }

    /**
     * @param $queryType
     *
     * @return Server
     */
    public function getServer($queryType)
    {
        foreach ($this->servers as $server) {
            if ($server->isAlive() && $server->getMode() & $queryType) {
                return $server;
            }
        }

        return null;
    }

}
