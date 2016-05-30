<?php
  class Database{
    private $conn;
    private $database = "danielwallman_s";

    private $host = "localhost:8889";
    private $user = "root";
    private $pass = "root";
    // private $host = "danielwallman.se.mysql";
    // private $user = "danielwallman_s";
    // private $pass = "4q7B7hdE";


    private function Connect()
    {
      $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->database);
      if($this->conn->connect_error){
        $code = $conn->connect_errno;
        die("Error: $code");
      }
      $this->conn->set_charset('utf8');
    }
    // Set functions
    public function RegisterUser($user)
    {
      $this->Connect();
      if(get_class($user) == 'User'){
        $sql = "INSERT INTO user(email, firstName, lastName, password, salt, company) VALUES (?,?,?,?,?,0)";
      }
      else{
        $sql = "INSERT INTO user(email, companyName, password, salt, company) VALUES (?,?,?,?,1)";
      }

      if($stmt = $this->conn->prepare($sql))
      {
        if(get_class($user) == 'User'){
          $stmt->bind_param("sssss", $user->email, $user->firstName, $user->lastName, $user->password, $user->salt);
        }
        else{
          $stmt->bind_param("ssss", $user->email, $user->companyName, $user->password, $user->salt);
        }
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
          $user->id = $row['id'];
          $user->imgUrl = $row['imgUrl'];
          $user->adress = $row['adress'];
          $user->city = $row['city'];
          $user->zipCode = $row['zipCode'];

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

    public function EditUser($user){
      $this->Connect();
      if(get_class($user) == 'User'){
        $sql = "UPDATE user
                SET email=?, firstName=?, lastName=?, adress=?, city=?, zipCode=?
                WHERE email=?";
      }
      else{
        $sql = "UPDATE user
                SET email=?, companyName=?, adress=?, city=?, zipCode=?
                WHERE email=?";
      }

      if($stmt = $this->conn->prepare($sql))
      {
        if(get_class($user) == 'User'){
          $stmt->bind_param("sssssss", $user->email, $user->firstName, $user->lastName, $user->adress, $user->city, $user->zipCode, $_SESSION['email']);
        }
        else{
          $stmt->bind_param("ssssss", $user->email, $user->companyName, $user->adress, $user->city, $user->zipCode, $_SESSION['email']);
        }

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

    public function AddNews($authorId, $title, $message){
      $this->Connect();
      $sql = "INSERT INTO news(authorId, title, message) VALUES (?,?,?)";
      if($stmt = $this->conn->prepare($sql))
      {
        $stmt->bind_param("iss", $authorId, $title, $message);
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

    public function GetNews(){
      $this->connect();
      $sql = "SELECT title, message FROM news";
      $result = $this->conn->query($sql);
      if($this->conn->error){
        die($this->conn->error);
      }
      $arr = array();
      while($row = $result->fetch_assoc())
      {
        $obj = array('title' => $row['title'], 'message' => $row['message']);
        array_push($arr, $obj);
      }
      return $arr;
    }
  }
 ?>
