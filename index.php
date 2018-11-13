<?php
  //use an autoloader
  require 'libs/Bootstrap.php';
  require 'libs/BaseController.php';
  require 'libs/View.php';
  require 'libs/Model.php';
  require 'libs/Database.php';
  require 'libs/Session.php';

  require 'config/database.php';
  require 'config/paths.php';
  $app = new Bootstrap();
?>
