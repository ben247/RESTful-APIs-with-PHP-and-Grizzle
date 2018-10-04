<?php
//Guzzle RESTful API request
require 'vendor/autoload.php';
use GuzzleHttp\Client;
$client = new Client(['base_uri' => 'http://jsonplaceholder.typicode.com/']);

//Request 1
$response = $client->get(
    'posts/1'
);

var_dump($response);
echo $response->getBody();

//Request 2
$response = $client->get(
    'https://httpbin.org/ip'
);

var_dump($response);
echo $response->getBody();

?>