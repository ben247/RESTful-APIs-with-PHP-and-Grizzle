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
$body

?>
