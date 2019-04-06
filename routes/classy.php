<?php 

// use namespace for the class
use App\Models\Person;
use App\Controllers\CategoryController;

$app->get('/classy', function(){
  $person = new Person;

  var_dump($person);
});

$app->group('/classy/cats', function(){
  $this->get('', CategoryController::class . ':index');
  $this->get('/{id}', CategoryController::class . ':show');
});

$app->get('/alt', CategoryController::class . ':alt');

