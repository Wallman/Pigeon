<?php
  class User{

    function __construct($email, $name, $password, $salt, $company){
      $this->email = $email;
      $this->name = $name;
      $this->password = $password;
      $this->salt = $salt;
      $this->company = $company;
    }

    public $id;
    public $email;
    public $name;
    public $password;
    public $salt;
    public $company;
  }
 ?>
