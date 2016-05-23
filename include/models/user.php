<?php
  class User{

    function __construct($email, $name, $password, $salt){
      $this->email = $email;
      $this->name = $name;
      $this->password = $password;
      $this->salt = $salt;
    }

    public $id;
    public $email;
    public $name;
    public $password;
    public $salt;
  }
 ?>
