<?php
class login extends BaseController
{

  function __construct()
  {
    parent::__construct();
  }
  public function index(){
    $this->view->render('login/index');
  }
  public function login(){
    $this->model->login();
  }
}

?>
