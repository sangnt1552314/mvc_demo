<?php
class dashboard extends BaseController
{
  function __construct()
  {
    parent::__construct();
    Session::init();
    $logged = Session::get('loggedIn');
    if($logged == false){
      Session::destroy();
      header('location: login');
      exit;
    }
  }
  public function index(){
    $this->view->render('user/dashboard/index');
  }
  public function logout(){
    Session::destroy();
    header('location: ../login');
    exit;
  }
}

?>
