<?php

namespace Saad\LaravelPackage\repositories;
use Saad\LaravelPackage\models\Test;
class TestRepository {

  public function getAll() {
    return Test::all();
  }

  public function getActiveTest() {
    return Test::where("status", 1)->get();
  }
}