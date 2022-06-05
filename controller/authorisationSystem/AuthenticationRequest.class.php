<?php

class AuthenticationRequest
{
	private $login;
	private $password;


	public function __construct($login,$paswd)
	{
		$this->login = $login;
		$this->password = $paswd;
	}

	/**
     * cleanSession : erase user account informations in $_SESSION
     */
    private function cleanSession()
    {
        $_SESSION['authentication_login'] = NULL;
	}

	/**
	 * checkForLoginPassword : check the users list for the 'login' and 'password' given by the user
	 * 				  		   and return the user_id if the login and password are correct otherwise
	 * 						   the method returns 0
	 * 
	 * 						 : return : integer
	 */
	private function checkForLoginPassword()
	{
		$data=NULL;

		// check if the 'login' is stored in the 'users_list' table and get the password and user_id in $data
		include_once(dirname(__FILE__,3).'/model/authorisationSystem/checkRegister.php');

		// if the login is stored in the table...
		if (!isset($data['password']))
		{
			return false;
		}
		// ...check the validity of the password
		if (password_verify($this->password,$data['password']))
		{
			return $data['user_id'];
		}
		else
		{
			return 0;
		}
	}


	/**
	 * authenticate	: if the user has given a registered login and its associated password, it
	 *				: creates a logged session
	 */
	public function authenticate()
	{
		$user_id = $this->checkForLoginPassword();
		if ($user_id > 0)
		{
			$_SESSION['login'] = $this->login;
			$_SESSION['user_id'] = $user_id;
			$_SESSION['msg'] = NULL;
		}
		else
		{
			throw new InvalidPassword();
		}
		$this->cleanSession();
	}
}
