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
}