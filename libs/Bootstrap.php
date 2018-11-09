<?php
class Bootstrap{
  function __construct(){
    $base_url = isset($_GET['url']) ? $_GET['url'] : null;
    $base_url = rtrim($base_url,'/');
    $url = explode('/', $base_url);

    if(empty($url[0])){
      require 'controllers/index.php';
      $controller =  new Index();
      $controller->index();
      return false;
    }

    $file = 'controllers/'.$url[0].'.php';
    if(file_exists($file)){
      require $file;
    }else{//throw new Exception("The file: $file Does not exists.");
      $this->getError();
    }

    $controller = new $url[0];
    $controller->loadModel($url[0]);

    if(isset($url[2])){
      if(method_exists($controller,$url[2])){
        $controller->{$url[1]}($url[2]);
      }else{
        $this->getError();
      }
    }else{
      if(isset($url[1])){
        if(method_exists($controller,$url[1])){
          $controller->{$url[1]}();
        }else{
          $this->getError();
        }
      }else{
        $controller->index();
      }
    }
  }

  function getError(){
    require 'controllers/error.php';
    $controller = new customError();
    $controller->index();
    return false;
  }
}
?>
