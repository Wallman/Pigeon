<?php
  class User{

    function __construct($email, $firstName, $lastName, $password, $salt){
      $this->email = $email;
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->password = $password;
      $this->salt = $salt;
    }

    public $id;
    public $email;
    public $firstName;
    public $lastName;
    public $password;
    public $salt;
  }
 ?>
