<?php
  class Company{
    function __construct($email, $companyName, $password, $salt){
      $this->email = $email;
      $this->companyName = $companyName;
      $this->password = $password;
      $this->salt = $salt;
    }
    public $id;
    public $email;
    public $companyName;
    public $password;
    public $salt;
  }
 ?>
