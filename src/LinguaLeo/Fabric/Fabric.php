<?php

namespace LinguaLeo\Fabric;

use LinguaLeo\Fabric\Model\Group;
use LinguaLeo\Fabric\Model\Sharding\Table;

class Fabric
{
    const VERSION = 1;

    /**
     * @var Table[]
     */
    private $tables;

    /**
     * @var Group[]
     */
    private $groups;

    /**
     * @param Group[] $groups
     * @param Table[] $tables
     */
    public function __construct(array $groups, array $tables)
    {
        $this->groups = $groups;
        $this->tables = $tables;
    }

    /**
     * @param string $table
     * @param int    $value
     *
     * @return Group
     */
    public function resolveGroupForTable($table, $value)
    {
        $range = $this->tables[$table]->getMap()->findRange($value);
        return $this->groups[$range->getShard()->getGroupId()];
    }

    public static function getVersion()
    {
        return self::VERSION;
    }


}
