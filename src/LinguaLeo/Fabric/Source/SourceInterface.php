<?php

namespace LinguaLeo\Fabric\Source;

use LinguaLeo\Fabric\Fabric;

interface SourceInterface
{
    /**
     * @return Fabric
     */
    public function fetch();
}
