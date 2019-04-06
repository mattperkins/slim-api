<?php 

// use namespace for the class
use App\Models\Person;

$app->get('/classy', function(){
  $person = new Person;

  var_dump($person);
});

$app->get('/classy/cats', '\App\Controllers\CategoryController:index');

$app->get('/classy/cats/1', '\App\Controllers\CategoryController:show');

