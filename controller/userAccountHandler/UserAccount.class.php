<?php
class UserAccount {
    private $login;
    private $password;
    private $email;

    public function __construct($login,$password,$email) 
    {
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
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
}