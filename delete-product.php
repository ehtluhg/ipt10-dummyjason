<?php
require "vendor/autoload.php";

// Initialize Guzzle HTTP Client integration with Dummy JSON
use GuzzleHttp\Client;

$client = new Client([
        'base_uri' => 'https://dummyjson.com/'
]);

// Handling HTTP Response
$delete = [
    'products' => [
        'title' => 'iPhone 11'
       ]
   ]; 

$response = $client->delete('https://dummyjson.com/products/add/1', $delete);
$code = $response->getStatusCode();
$body = $response->getBody();
$item = json_decode($body, true);
var_dump($item)
?>