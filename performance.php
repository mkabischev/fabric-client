<?php

require_once 'vendor/autoload.php';

$url = sprintf('%s/configuration-%s.ser', 'http://192.168.70.99', \LinguaLeo\Fabric\Fabric::getVersion());

$sourceDb              = new \LinguaLeo\Fabric\Source\DB('192.168.70.100', 'root', '', 3306);
$sourceGuzzle          = new \LinguaLeo\Fabric\Source\RemoteGuzzle($url, false);
$sourceGuzzleWithCache = new \LinguaLeo\Fabric\Source\RemoteGuzzle($url, true);
$souceSimple           = new \LinguaLeo\Fabric\Source\RemoteSimple($url);
$sourceCurl            = new \LinguaLeo\Fabric\Source\RemoteCurl($url);

class Test
{
    public function run($name, $callback, $iterations)
    {
        $start = microtime(true);
        for ($i = 0; $i < $iterations; $i++) {
            $callback();
        }

        echo 'task: ' . $name . PHP_EOL;
        $total = microtime(true) - $start;
        echo 'total:     ' . round($total, 5) . PHP_EOL;
        echo 'iteration: ' . round($total / $iterations, 5) . PHP_EOL;
        echo PHP_EOL . PHP_EOL;
    }
}

$test = new Test();

echo 'fetch section 100' . PHP_EOL . PHP_EOL;

//$test->run('db', function () use ($sourceDb) {
//    $sourceDb->fetch(\LinguaLeo\Fabric\Fabric::getVersion());
//}, 100);
//
//$test->run('guzzle no cache', function () use ($sourceGuzzle) {
//    $sourceGuzzle->fetch(\LinguaLeo\Fabric\Fabric::getVersion());
//}, 100);
//
//$test->run('guzzle with cache', function () use ($sourceGuzzleWithCache) {
//    $sourceGuzzleWithCache->fetch(\LinguaLeo\Fabric\Fabric::getVersion());
//}, 100);

$test->run('curl', function () use ($sourceCurl) {
    $sourceCurl->fetch(\LinguaLeo\Fabric\Fabric::getVersion());
}, 100);

//$test->run('file_get_contents', function () use ($souceSimple) {
//    $souceSimple->fetch(\LinguaLeo\Fabric\Fabric::getVersion());
//}, 100);
//
//echo 'resolve section 1000' . PHP_EOL . PHP_EOL;
//$data = $sourceDb->fetch(\LinguaLeo\Fabric\Fabric::getVersion());
//$test->run('resolve', function () use ($data) {
//    $data->resolveGroupForTable('users.word', 1);
//}, 1000);
