<?php
class login_model extends Model{
  public function __construct()
  {
    parent::__construct();
  }
  public function login(){
    $email = $_POST['login_email'];
    $password = $_POST['login_password'];
    $sql = $this->database->prepare("SELECT id FROM users
      WHERE email = :email AND password = :password");
    $sql->execute(array(
      ':email' => $email,
      ':password' => $password,
    ));
    $data = $sql->fetchAll();
    print_r($data);
  }
}

?>
