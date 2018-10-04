<?php
//Async request - returns promise
require 'vendor/autoload.php';
use GuzzleHttp\Client;
use GuzzleHttp\Prs7\Response;
use GuzzleHttp\Exception\RequestException;
$client = new Client();

$promise = $client->requestAsync(
    'GET',
    'http://jsonplaceholder.typicode.com/posts/1'
);
$promise2 = $client->requestAsync(
    'GET',
    'http://jsonplaceholder.typicode.com/posts/2'
);

$promises = [$promise, $promise2];

$results = GuzzleHttp\Promise\settle($promises)->wait();

foreach ($results as $result) {
    echo $result['value']->getBody();
}

?>