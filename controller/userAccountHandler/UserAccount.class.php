<?php
class UserAccount {
    private $login;
    private $password;
    private $email;    
    private $userId;

    public function __construct($login,$email,$password=NULL, $user_id=NULL) 
    {
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        if (isset($password))
        {
            $this->password = $password;
        }
        if (isset($user_id))
        {
            $this->userId = $user_id;
        }
    }

    /**
     * getLogin :   Return the login attribute 
     */
    public function getLogin() {
        return $this->login;
    }
    
    /**
     * getPassword :   Return the password attribute 
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * getEmail :   Return the email attribute 
     */
    public function getEmail() {
        return $this->email;
    }

     /**
     * getUserId :   Return the userId attribute 
     */
    public function getUserId() {
        return $this->userId;
    }
}