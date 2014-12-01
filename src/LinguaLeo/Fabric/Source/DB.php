<?php

namespace LinguaLeo\Fabric\Source;

use LinguaLeo\Fabric\Fabric;
use LinguaLeo\Fabric\Model\Group;
use LinguaLeo\Fabric\Model\Server;
use LinguaLeo\Fabric\Model\Sharding\Map;
use LinguaLeo\Fabric\Model\Sharding\Range;
use LinguaLeo\Fabric\Model\Sharding\Shard;
use LinguaLeo\Fabric\Model\Sharding\Table;

class DB implements SourceInterface
{
    /**
     * @var \mysqli
     */
    private $dbConnection;

    public function __construct($host, $username, $password, $port)
    {
        $this->dbConnection = new \mysqli($host, $username, $password, 'fabric', $port);
    }

    /**
     * @return Fabric
     */
    public function fetch()
    {
        $maps   = $this->getShardingMaps();
        $shards = $this->getShards();
        $this->hydrateRanges($maps, $shards);

        $tables = $this->getTables($maps);
        return new Fabric($this->getGroups(), $tables);
    }

    /**
     * @return array
     */
    protected function getShardingMaps()
    {
        $result = [];
        $query  = $this->dbConnection->query('SELECT * FROM shard_maps');
        while ($row = $query->fetch_assoc()) {
            $result[$row['shard_mapping_id']] = new Map($row['shard_mapping_id'], $row['type_name']);
        }

        return $result;
    }

    /**
     * @return Shard[]
     */
    protected function getShards()
    {
        $result = [];
        $query  = $this->dbConnection->query('SELECT * FROM shards');
        while ($row = $query->fetch_assoc()) {
            $result[$row['shard_id']] = new Shard($row['shard_id'], $row['group_id'], $row['state']);
        }

        return $result;
    }

    /**
     * @param Map[]   $maps
     * @param Shard[] $shards
     */
    protected function hydrateRanges(array $maps, array $shards)
    {
        $query = $this->dbConnection->query('SELECT * FROM shard_ranges ORDER BY lower_bound ASC');
        while ($row = $query->fetch_assoc()) {
            $maps[$row['shard_mapping_id']]->addRange(new Range($row['lower_bound'], $shards[$row['shard_id']]));
        }
    }

    /**
     * @param Map[] $maps
     *
     * @return Table[]
     */
    protected function getTables(array $maps)
    {
        $result = [];
        $query  = $this->dbConnection->query('SELECT * FROM shard_tables');
        while ($row = $query->fetch_assoc()) {
            $result[$row['table_name']] = new Table($row['table_name'], $row['column_name'],
                $maps[$row['shard_mapping_id']]);
        }

        return $result;
    }

    protected function getGroups()
    {
        /** @var Group[] $result */
        $result = [];
        $query  = $this->dbConnection->query('SELECT * FROM groups');
        while ($row = $query->fetch_assoc()) {
            $result[$row['group_id']] = new Group($row['group_id'], $row['description']);
        }

        $query = $this->dbConnection->query('SELECT * FROM servers');
        while ($row = $query->fetch_assoc()) {
            $result[$row['group_id']]->addServer(new Server($row['server_uuid'], $row['server_address'],
                intval($row['mode']), intval($row['status'])));
        }

        return $result;
    }

}
