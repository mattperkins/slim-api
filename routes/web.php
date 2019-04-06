<?php ob_start();

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


// params/1 (dynamic URI) - - - - - - - - - - - - - - - - -
$app->get('/params/{id}', function($request, $response, $args){
  $params = [
    'id' => $args['id'],
    'username' => 'Fred'
  ];
  return $this->view->render($response, 'params.twig', compact('params'));
});
// \params/1 - - - - - - - - - - - - - - - - -


// /topics (route group) - - - - - - - - - - - - - - - - -
$app->group('/topics', function(){

  $this->get('', function($request, $response, $args){
    return $this->view->render($response, 'topics.twig');
  })->setName('topics');;
  // topics/something
  $this->get('/{id}', function($request, $response, $args){
    echo 'Topic parameter = ' . $args['id'];
  });

  $this->post('', function($request, $response){
    echo 'Post A Topic';
  });
});
// \route group - - - - - - - - - - - - - - - - -



// db - - - - - - - - - - - - - - - - -
$app->get('/products', function(){
  $products = $this->db->query("SELECT * FROM products")->fetchAll(PDO::FETCH_OBJ);
  var_dump($products);
});
// \db - - - - - - - - - - - - - - - - -

// db with params - - - - - - - - - - - - - - - - -
$app->get('/product/{id}', function($request, $response, $args){
  $product = $this->db->prepare("SELECT * FROM products WHERE id = :id");
  $product->execute([
    'id' => $args['id']
  ]);
  $product = $product->fetch(PDO::FETCH_OBJ);
  return $this->view->render($response, 'product.twig', compact('product'));
});
// \db with params - - - - - - - - - - - - - - - - -




