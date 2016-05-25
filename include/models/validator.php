<?php
  class Validator{

    public function ValidateRegistration($user)
    {
      if( $this->ValidateEmail($user->email) &&
          $this->ValidateString($user->name) &&
          $this->ValidatePassword($user->password))
        {
          return true;
        }
        return false;
    }

    public function ValidateLogin($email, $password)
    {
      if( $this->ValidateEmail($email) &&
          $this->ValidatePassword($password))
      {
        return true;
      }
      return false;
    }

    private function ValidateEmail($email)
    {
      if(strpos($email, "@") == 0 || strpos($email, ".") <= strpos($email, "@"))
      {
        die ("Ogiltig email ");
        return false;
      }
      return true;
    }

    private function ValidateString($string)
    {
      if($string == ""){
        return false;
      }
      return true;
    }

    private function ValidatePassword($password)
    {
      if($this->ValidateString($password))
      {
        return true;
      }
      return false;
    }
  }
 ?>
