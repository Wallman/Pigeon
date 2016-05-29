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
    // Nedan kan vara null
    public $imgUrl;
    public $adress;
    public $city;
    public $zipCode;
  }
 ?>
