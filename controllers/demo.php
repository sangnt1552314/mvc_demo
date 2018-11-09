<?php
  /**
   *
   */
  class demo extends BaseController
  {

    function __construct()
    {
      parent::__construct();
    }
    public function index(){
      $this->view->render('demo/index');
    }
    public function demo(){
      $this->view->render('demo/admin/demo');
    }
  }

 ?>
