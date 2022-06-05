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
     * cleanSession : erase user account informations in $_SESSION
     */
    private function cleanSession()
    {
        $_SESSION['create_account_login'] = NULL;
        $_SESSION['create_account_password1'] = NULL;
        $_SESSION['create_account_password2'] = NULL;
        $_SESSION['create_account_email'] = NULL;
        $_SESSION['create_account_code'] = NULL;
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
        checkEmail($this->email);
        checkPassword($this->password1,$this->password2);
        $this->checkCode();
        $userAccount = new UserAccount($this->login, $this->email, $this->password1);
        include(dirname(__FILE__,3).'/model/userAccountHandler/addUserAccount.php');
        $this->cleanSession();
    }
}