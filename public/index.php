<?php
// use Psr\Http\Message\ServerRequestInterface as Request;
// use Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$container = $app->getContainer();

$app->get('/', function() {
  echo 'Home';
});

$app->get('/about', function() {
  echo 'About';
});

// CONNECT ROUTES
// require '../src/routes/index.php';

$app->run();