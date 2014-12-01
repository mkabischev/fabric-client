<?php

require_once 'vendor/autoload.php';

use LinguaLeo\Fabric\Model\Server;

$url = sprintf('%s/configuration-%s.ser', 'http://192.168.70.99', \LinguaLeo\Fabric\Fabric::getVersion());

//$sourceCurl = new \LinguaLeo\Fabric\Source\RemoteCurl($url);
$source = new \LinguaLeo\Fabric\Source\DB('192.168.70.100', 'root', '', 3306);
$fabric = $source->fetch();

var_dump($fabric->resolveGroupForTable('linguadb.user_word', 10)->getServer(Server::QUERY_WRITE)->getAddress());
var_dump($fabric->resolveGroupForTable('linguadb.user_word', 10)->getServer(Server::QUERY_READ)->getAddress());
var_dump($fabric->resolveGroupForTable('linguadb.user_word', 10000)->getServer(Server::QUERY_WRITE)->getAddress());
var_dump($fabric->resolveGroupForTable('linguadb.user_word', 10000)->getServer(Server::QUERY_READ)->getAddress());

