<?php 

namespace App\Controllers;

class CategoryController

{
  public function index()
  {
    return 'All cats';
  }

  public function show(){
    return 'Show single cat';
  }

  public function alt(){
    return 'Alternative';
  }
}