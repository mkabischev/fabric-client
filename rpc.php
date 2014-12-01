<?php

require_once 'vendor/autoload.php';



$start      = microtime(true);
$iterations = 1;

//$file = file_get_contents("http://192.168.70.100:32274", false, $context);
$success = 0;
for ($i = 0; $i < $iterations; $i++) {
    $request = xmlrpc_encode_request("sharding.lookup_servers", ['users.word', 999]);
    $context = stream_context_create([
        'http' => [
            'method' => "POST",
            'header' => "Content-Type: text/xml",
            'content' => $request
        ]
    ]);
    $file = file_get_contents("http://192.168.70.100:32274", false, $context);
    var_dump($file);
    $response = xmlrpc_decode($file);
    if ($response && xmlrpc_is_fault($response)) {
        trigger_error("xmlrpc: $response[faultString] ($response[faultCode])");
    } else {
        print_r($response);
    }
}

$stop  = microtime(true);
$total = ($stop - $start);
echo 'total time: ' . $total . PHP_EOL;
echo 'one request: ' . ($total / $iterations) . PHP_EOL;
