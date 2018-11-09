<?php
class index extends BaseController{
  function __construct(){
    parent::__construct();
  }
  public function index(){
    $this->view->render('index/index');
  }
  public function detail(){
    echo 123;
    $this->view->render('index/index');
  }
}
 ?>
