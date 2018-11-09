<?php

class customError extends BaseController{
  function __construct(){
    parent::__construct();
  }
  public function index(){
    $this->view->msg = 'This page is not exist';
    $this->view->render('error/index');
  }
}

 ?>
