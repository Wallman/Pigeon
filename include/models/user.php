<?php
  class User{

    function __construct($email, $firstName, $lastName, $password, $salt, $category){
      $this->email = $email;
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->password = $password;
      $this->salt = $salt;
      $this->category = $category;
    }

    public $id;
    public $email;
    public $firstName;
    public $lastName;
    public $password;
    public $salt;
    public $category;
    // Nedan kan vara null
    public $imgUrl;
    public $adress;
    public $city;
    public $zipCode;
  }
 ?>
