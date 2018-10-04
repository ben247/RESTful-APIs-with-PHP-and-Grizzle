<?php
//Guzzle RESTful API request
require 'vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/']);

$response = $client->get(
    'https://httpbin.org/ip'
);

var_dump($response);
echo $response->getBody();

?>