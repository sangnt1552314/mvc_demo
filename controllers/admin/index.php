<?php
class Index extends BaseController{
  function __construct(){
    parent::__construct();
  }
  public function index(){
    $this->view->render('admin/index/index');
  }
}
 ?>
