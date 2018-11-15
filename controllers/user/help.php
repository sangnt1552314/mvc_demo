<?php
  class help extends BaseController{
    function __construct(){
      parent::__construct();
    }
    public function index(){
      $this->view->render('user/help/index');
    }
  }
 ?>
