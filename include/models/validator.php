<?php
  class Validator{

    public function ValidateRegistration($user)
    {
      $allValidated = $this->ValidateEmail($user->email);
      $allValidated = $this->ValidatePassword($user->password);

      if(get_class($user) == 'User'){
        $allValidated = $this->ValidateString($user->firstName);
        $allValidated = $this->ValidateString($user->lastName);
      }
      else{
        $allValidated = $this->ValidateString($user->companyName);
      }
      return $allValidated;
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
