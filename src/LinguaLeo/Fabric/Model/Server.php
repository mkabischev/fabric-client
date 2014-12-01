<?php

namespace LinguaLeo\Fabric\Model;

class Server
{
    const MODE_OFFLINE = 0;
    const MODE_READONLY = 1;
    const MODE_WRITEONLY = 2;
    const MODE_READWRITE = 3;

    const STATUS_FAULTY = 0;
    const STATUS_SPARE = 1;
    const STATUS_SECONDARY = 2;
    const STATUS_PRIMARY = 3;

    const QUERY_READ = 1;
    const QUERY_WRITE = 2;

    /**
     * @var string
     */
    private $uuid;

    /**
     * @var string
     */
    private $address;

    /**
     * @var int
     */
    private $mode;

    /**
     * @var int
     */
    private $status;

    /**
     * @var int
     */
    private $weight;

    /**
     * @param string $uuid
     * @param string $address
     * @param int    $mode
     * @param int    $status
     */
    public function __construct($uuid, $address, $mode, $status)
    {
        $this->uuid    = $uuid;
        $this->address = $address;
        $this->mode    = $mode;
        $this->status  = $status;
    }

    public function isAlive()
    {
        return self::STATUS_SECONDARY === $this->status || self::STATUS_PRIMARY === $this->status;
    }

    public function isReadable()
    {
        return self::MODE_READONLY === $this->mode || self::MODE_READWRITE === $this->mode;
    }

    public function isWritable()
    {
        return self::MODE_WRITEONLY === $this->mode || self::MODE_READWRITE === $this->mode;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

}
