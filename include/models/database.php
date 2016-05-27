<?php
  class Database{
    private $conn;
    private $host = "localhost:8889";
    private $user = "root";
    private $pass = "root";
    private $database = "pigeon";

    private function Connect()
    {
      $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->database);
      if($this->conn->connect_error){
        $code = $conn->connect_errno;
        die("Error: $code");
      }
    }
    // Set functions
    public function RegisterUser($user)
    {
      $this->Connect();
      $sql = "INSERT INTO user(email, firstName, lastName, password, salt, company) VALUES (?,?,?,?,?,0)";
      if($stmt = $this->conn->prepare($sql))
      {
        $stmt->bind_param("sssss", $user->email, $user->firstName, $user->lastName, $user->password, $user->salt);
        $stmt->execute();
        if($stmt->error)
        {
          echo $stmt->error;
          return false;
        }
        $stmt->close();
        $this->conn->close();
        return true;
      }
      $this->conn->close();
      return false;
    }
    public function RegisterCompany($company){
      $this->Connect();
      $sql = "INSERT INTO user(email, companyName, password, salt, company) VALUES (?,?,?,?,1)";
      if($stmt = $this->conn->prepare($sql))
      {
        $stmt->bind_param("ssss", $company->email, $company->companyName, $company->password, $company->salt);
        $stmt->execute();
        if($stmt->error)
        {
          echo $stmt->error;
          return false;
        }
        $stmt->close();
        $this->conn->close();
        return true;
      }
      $this->conn->close();
      return false;
    }
    public function UpdateImage($email, $url){
      $this->Connect();
      $sql = "UPDATE user
              SET imgUrl=?
              WHERE email='$email'";
      if($stmt = $this->conn->prepare($sql))
      {
        $stmt->bind_param('s', $url);
        $stmt->execute();
        if($stmt->error)
        {
          echo $stmt->error;
          return false;
        }
        $stmt->close();
        $this->conn->close();
        return true;
      }
      $this->conn->close();
      return false;
    }
    // Tar in email och returnerar en User
    public function GetUser($email){
      $this->connect();
      $sql = "SELECT * FROM user WHERE email=?";

      if($stmt = $this->conn->prepare($sql))
      {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        if($stmt->error)
        {
          echo $stmt->error;
          return false;
        }
        if($row = $stmt->get_result()->fetch_assoc())
        {
          if($row['company'] == 0){
            $user = new User($row['email'], $row['firstName'], $row['lastName'], $row['password'], $row['salt'], $row['category']);
          }
          else{
            $user = new Company($row['email'], $row['companyName'], $row['password'], $row['salt']);
          }
          $stmt->close();
          $this->conn->close();
          return $user;
        }
        $stmt->close();
        $this->conn->close();
        return false;
      }
      $this->conn->close();
      return false;
    }

    public function GetImg($email){
      $this->connect();
      $sql = "SELECT imgUrl FROM user";
      $result = $this->conn->query($sql);
      if($this->conn->error){
        die($this->conn->error);
      }
      if($row = $result->fetch_assoc())
      {
        return $row['imgUrl'];
      }
      return false;
    }
  }
 ?>
