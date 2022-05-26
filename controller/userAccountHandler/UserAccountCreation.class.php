<?php

include_once(dirname(__FILE__).'/UserAccount.class.php');

class UserAccountCreation {
    private $userAccount;
    private $code;
    private $captcha;

    public function __construct($login,$password,$email,$code,$captcha)
    {
        $this->userAccount = new UserAccount($login,$password,$email);
        $this->code = $code;
        $this->captcha = $captcha;
    }

    private function checkCode()
    {
        printf('ok');
    }

    public function execute() 
    {
        checkCode();
    }
}