<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

// GET all Customers
$app->get('/api/customers', function(Request $request, Response $response){
  echo 'CUSTOMERS';
});