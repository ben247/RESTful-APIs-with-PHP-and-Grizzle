<?php
//Guzzle RESTful API request
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'GET',
    'http://jsonplaceholder.typicode.com/posts/1'
);

var_dump($response);
$headers = $response->getHeaders();
foreach ($headers as $name => $value) {
    $value = implode(', ', $value);
    echo "{$name}: {$value}\r\n";
}

?>