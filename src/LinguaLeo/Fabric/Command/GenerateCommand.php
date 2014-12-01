<?php

namespace LinguaLeo\Fabric\Command;

use LinguaLeo\Fabric\Fabric;
use LinguaLeo\Fabric\Source\DB;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('fabric:generate');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $source        = new DB('192.168.70.100', 'root', '', 3306);
        $configuration = $source->fetch(Fabric::getVersion());
        file_put_contents(sprintf('configuration-%s.ser', Fabric::getVersion()),
            $this->serialize($configuration));
    }

    /**
     * @param Fabric $configuration
     *
     * @return string
     */
    protected function serialize(Fabric $configuration)
    {
        return sprintf('%010d%s', Fabric::getVersion(), serialize($configuration));
    }


}
