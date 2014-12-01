<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$connection = new mysqli();
$connection->connect('192.168.70.100','','','',32275);

$start = microtime(true);
$iterations = 1000;
for($i=0;$i< $iterations;$i++) {
    $result = $connection->query('CALL dump.servers()')->fetch_all();
}
$stop = microtime(true);
$total = ($stop - $start);
echo 'total time: ' . $total . PHP_EOL;
echo 'one request: ' . ($total/$iterations) . PHP_EOL;




