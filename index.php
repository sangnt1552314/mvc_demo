<?php
  //use an autoloader
  require 'libs/Bootstrap.php';
  require 'libs/BaseController.php';
  require 'libs/View.php';
  require 'libs/Model.php';
  require 'Libs/Database.php';

  require 'config/database.php';
  require 'config/paths.php';
  $app = new Bootstrap();
?>
