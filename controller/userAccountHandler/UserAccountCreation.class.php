<?php

include_once(dirname(__FILE__).'/UserAccount.class.php');

class UserAccountCreation {
    private $login;
    private $password1;
    private $password2;
    private $email;
    private $code;
    private $captcha_nbr;

    public function __construct($login,$password1,$password2,$email,$code,$captcha_nbr)
    {
        $this->login = $login;
        $this->password1 = $password1;
        $this->password2 = $password2;
        $this->email = $email;
        $this->code = $code;
        $this->captcha_nbr = $captcha_nbr;
    }

    /**
     *  checkEmail :  Check for valid email address
     */
    private function checkEmail() 
    {
        $this->email = filter_var($this->email, FILTER_VALIDATE_EMAIL);
        if ($this->email === false) {
	        throw new InvalidEmail();
        }
    }

    /**
     *  checkPassword :  Check for valid password
     */
    private function checkPassword() 
    {
        if ($this->password1 != $this->password2)
        {
            throw new InvalidPassword();
        }
    }

    /**
     *  checkCode :  Check for right captcha code  
     */
    private function checkCode()
    {
        switch ($this->captcha_nbr) 
        {
            case 1:
                $right_code = 'p6qq82';
                break;
            case 2:
                $right_code = '3PLHJ';
                break;
            case 3:
                $right_code = 'EKWBB';
                break;
            case 4:
                $right_code = 'F62PB';
                break;
            case 5:
                $right_code = 'JHXL3';
                break;
            case 6:
                $right_code = '263S2V';
                break;
            case 7:
                $right_code = 'AAXUE';
                break;
            case 8:
                $right_code = 'RUNAJIX';
                break;
            case 9:
                $right_code = 'mWXe2';
                break;
            case 10:
                $right_code = 'Eps10 vecTor';
                break;
        }
        
        if ($this->code != $right_code) 
        {
            throw new InvalidCode();
        }

    }

    public function execute() 
    {
        $this->checkEmail();
        $this->checkPassword();
        $this->checkCode();
        $userAccount = new UserAccount($this->login, $this->password1, $this->email);
        include(dirname(__FILE__,3).'/model/userAccountHandler/addUserAccount.php');
    }
}