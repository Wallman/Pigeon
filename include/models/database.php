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
      $sql = "INSERT INTO user(email, name, password, salt, company) VALUES (?,?,?,?,?)";
      if($stmt = $this->conn->prepare($sql))
      {
        $stmt->bind_param("ssssi", $user->email, $user->name, $user->password, $user->salt,$user->company);
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
        $stmt->bind_param("s", $url);
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
    public function GetUser($email){
      $this->connect();
      $sql = "SELECT * FROM user";
      $result = $this->conn->query($sql);
      if($this->conn->error){
        die($this->conn->error);
      }
      if($row = $result->fetch_assoc())
      {
        $user = new User($row['email'], $row['name'], $row['password'], $row['salt'], $row['company']);
        return $user;
      }
      return false;
    }
    // public function GetComments()
    // {
    //   $this->connect();
    //   $sql = "SELECT email, comment FROM comment_table";
    //   $result = $this->conn->query($sql);
    //   if($this->conn->error){
    //     die($this->conn->error);
    //   }
    //   $arr = array();
    //   while($row = $result->fetch_assoc())
    //   {
    //     array_push($arr, $comment = new Comment($this->GetUser($row['email'])->name, $row['email'] , $row['comment']));
    //   }
    //   return $arr;
    // }
  }
 ?>
