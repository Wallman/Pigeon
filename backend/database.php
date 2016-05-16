<?php
  class Database{
    private $conn;
    private $host = "localhost:8889";
    private $user = "root";
    private $pass = "root";
    private $database = "pigeon";

    // function __construct(){
    //   $this->Connect();
    // }

    private function Connect()
    {
      $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->database);
      if($this->conn->connect_error){
        $code = $conn->connect_errno;
        die("Error: $code");
      }
    }

    public function Query($sql){//, $params){
      // ToDo: Lösning med array av params
      // if(!is_array($params))
      // {
      //   die();
      // }
      // $paramString = "";
      // foreach($params as $value)
      // {
      //   $paramString += substr(gettype($value), 0, 1);
      // }
      // echo $paramString;
      $this->Connect();
      $result = $this->conn->query($sql);
      if($this->conn->error){
        die($this->conn->error);
      }
      return $result;
    }

    public function RegisterUser($email, $username, $password, $salt)
    {
      $this->Connect();
      // Säkert SQL-query
      $sql = "INSERT INTO table2(email, username, password, salt) VALUES (?,?,?,?)";
      if($stmt = $this->conn->prepare($sql))
      {
        $stmt->bind_param("ssss", $email, $username, $password, $salt);
        $stmt->execute();
        if($stmt->error)
        {
          die($stmt->error);
        }
        $stmt->close();
      }

      $this->conn->close();
    }
  }
 ?>
