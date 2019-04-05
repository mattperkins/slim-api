<?php 

// home - - - - - - - - - - - - - - - - -
$app->get('/', function($request, $response) {
  return $this->view->render($response, 'home.twig');
})->setName('home');
// \home - - - - - - - - - - - - - - - - -


// contact - - - - - - - - - - - - - - - - -
$app->get('/contact', function($request, $response){
  return $this->view->render($response, 'contact.twig');
})->setName('contact');
// \contact - - - - - - - - - - - - - - - - -

// contact-POST - - - - - - - - - - - - - - - - -
$app->post('/contact', function($request, $response){
  $params = $request->getParams();
  echo $params['email'];
})->setName('contact');
// \contact-POST - - - - - - - - - - - - - - - - -


// users - - - - - - - - - - - - - - - - -
$app->get('/users', function($request, $response) {
  $users = [
    ['username' => 'Fred'],
    ['username' => 'Sandy'],
    ['username' => 'Bob'],
  ];
  return $this->view->render($response, 'users.twig', [
    'lemon' => $users,
  ]);
})->setName('users.index');
// \users - - - - - - - - - - - - - - - - -