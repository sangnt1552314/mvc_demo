<?php
class Bootstrap{
  function __construct(){
    $base_url = isset($_GET['url']) ? $_GET['url'] : null;
    $base_url = rtrim($base_url,'/');
    $url = explode('/', $base_url);

    //Admin page
    if($url[0] == 'admin'){
      if(empty($url[1])){//auto jump into admin index page
        require 'controllers/admin/index.php';
        $controller =  new Index();
        $controller->index();
        return false;
      }
      $file = 'controllers/admin/'.$url[1].'.php';
      if(file_exists($file)){
        require $file;
      }else{//throw new Exception("The file: $file Does not exists.");
        require 'controllers/error/error.php';
        $controller = new customError();
        $controller->index();
        return false;
      }
      $controller = new $url[1];
      $controller->loadAdminModel($url[1]);

      if(isset($url[3])){
        if(method_exists($controller,$url[3])){
          $controller->{$url[2]}($url[3]);
        }else{
          $this->getError();
        }
      }else{
        if(isset($url[2])){
          if(method_exists($controller,$url[2])){
            $controller->{$url[2]}();
          }else{
            $this->getError();
          }
        }else{
          $controller->index();
        }
      }
    }else{//User page
      if(empty($url[0])){//auto jump into user index page
        require 'controllers/user/index.php';
        $controller =  new Index();
        $controller->index();
        return false;
      }

      $file = 'controllers/user/'.$url[0].'.php';
      if(file_exists($file)){
        require $file;
      }else{//throw new Exception("The file: $file Does not exists.");
        require 'controllers/error/error.php';
        $controller = new customError();
        $controller->index();
        return false;
      }

      $controller = new $url[0];
      $controller->loadModel($url[0]);

      if(isset($url[2])){
        if(method_exists($controller,$url[2])){
          $controller->{$url[1]}($url[2]);
        }else{
          require 'controllers/error/error.php';
          $controller = new customError();
          $controller->index();
          return false;
        }
      }else{
        if(isset($url[1])){
          if(method_exists($controller,$url[1])){
            $controller->{$url[1]}();
          }else{
            require 'controllers/error/error.php';
            $controller = new customError();
            $controller->index();
            return false;
          }
        }else{
          $controller->index();
        }
      }
    }
  }

  function getError(){
    require 'controllers/error/error.php';
    $controller = new customError();
    $controller->index();
    return false;
  }
}
?>
