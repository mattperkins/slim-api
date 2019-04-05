<?php
// get all package deps
require './vendor/autoload.php';

// display errors
$app = new \Slim\App([
  'settings' => [
    'displayErrorDetails' => true,
  ]
]);

// use container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
  $view = new \Slim\Views\Twig(__DIR__ . '/src/views', [
      // 'cache' => 'path/to/cache'
      'cache' => false
  ]);

  // Instantiate and add Slim specific extension
  $router = $container->get('router');
  $uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
  $view->addExtension(new \Slim\Views\TwigExtension($router, $uri));

  return $view;
};

// routes
require './src/routes/routes.php';

$app->run();