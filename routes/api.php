<?php
Header('Content-type', 'application/json');
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

// dynamic param
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

// GET all Customers
$app->get('/api/customers', function(Request $request, Response $response){
  echo 'CUSTOMERS';
});

const url = 'https://dormshed.com/api/deals';

// return json all
$app->get('/api/deals', function ($request, $response, $args) {
    $json = file_get_contents(url, true);
    echo $json;
});

// return json all
$app->get('/api/deals/{key}', function ($request, $response, $args) {
    $json = file_get_contents(url, true);
    echo $json;
});


