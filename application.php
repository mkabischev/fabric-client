<?php

require_once 'vendor/autoload.php';

$application = new \Symfony\Component\Console\Application();
$application->add(new \LinguaLeo\Fabric\Command\GenerateCommand());
$application->run();
