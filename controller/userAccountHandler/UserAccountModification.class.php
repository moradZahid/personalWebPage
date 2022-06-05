<?php

include_once(dirname(__FILE__).'/UserAccount.class.php');

class UserAccountModification {
    private $login;
    private $password1;
    private $password2;
    private $email;
    private $userId;
    private $pswdModified;

    public function __construct($login,$email,$pswd_modified,$user_id,$password=[])
    {
        $this->login = $login;
        $this->email = $email;
        $this->pswdModified = $pswd_modified;
        $this->userId = $user_id;

        if ($pswd_modified == 'modified')
        {
            $this->password1 = $password[0];
            $this->password2 = $password[1];
        }
    }

    /**
     *  execute : update the user account with new information
     */
    public function execute() 
    {
        checkEmail($this->email);
        if ($this->pswdModified == 'modified') 
        {
            checkPassword($this->password1,$this->password2);
            $userAccount = new UserAccount($this->login, $this->email,  $this->password1, $this->userId);
            include(dirname(__FILE__,3).'/model/userAccountHandler/updateUserAccountAndPassword.php');
        }
        else
        {
            $userAccount = new UserAccount($this->login, $this->email, NULL, $this->userId);
            include(dirname(__FILE__,3).'/model/userAccountHandler/updateUserAccount.php');
        }
        if ($_SESSION['login'] != 'admin')
        {
            $_SESSION['login'] = $this->login;
        }
    }
}