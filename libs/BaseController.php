<?php
/**
 *define BaseController
 */
class BaseController{
  function __construct(){
    $this->view = new View();
  }
  public function loadModel($name){
    $path = 'models/user/'.$name.'_model.php';
    if(file_exists($path)){
      require 'models/user/'.$name.'_model.php';
      $modelName = $name.'_model';
      $this->model = new $modelName();
    }
  }
  public function loadAdminModel($name){
    $path = 'models/admin/'.$name.'_model.php';
    if(file_exists($path)){
      require 'models/admin/'.$name.'_model.php';
      $modelName = $name.'_model';
      $this->model = new $modelName();
    }
  }
}

 ?>
