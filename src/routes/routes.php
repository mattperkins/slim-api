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

// contact-success - - - - - - - - - - - - - - - - -
$app->get('/contact/success', function($request, $response){
  return $this->view->render($response, 'contact-success.twig');
})->setName('contact-success');
// \contact-success - - - - - - - - - - - - - - - - -

// contact-POST - - - - - - - - - - - - - - - - -
$app->post('/contact', function($request, $response){
  return $response->withRedirect('contact/success');
})->setName('contact');
// \contact-POST - - - - - - - - - - - - - - - - -

// contact-POST SINGLE PARAM - - - - - - - - - - - - - - - - -
// $app->post('/contact', function($request, $response){
//   $params = $request->getParams();
//   echo $params['name'];
// })
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