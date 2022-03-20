<?php

class AuthorisationRequest
{
	private $service;
	private $userName;


	public function __construct($service,$name)
	{
		$this->service=$service;
		$this->userName=$name;
	}


	/**
	 * isUserAuthenticated	: check if the user is logged
	 *
	 *						: return : integer
	 */
	private function isUserAuthenticated()
	{
		if ($this->userName == 'anonymous')
		{
			return 0;
		}
		return 1;
	}


	/**
	 * checkPermission	: check if the user whose name is in the attribute 'login' has the permission to use
	 *					  the service in the attribute 'service'
	 *
	 *					: return : string
	 */
	private function checkPermission()
	{
		switch ($this->userName)
		{
		case 'anonymous':
			return 'not allowed';

		case 'admin':
			$_SESSION['add entries permission'] = 'allowed';
			$_SESSION['admin services permission'] = 'allowed';
			return 'allowed';

		default:
			if ($this->service == 'add entries service')
			{
				$_SESSION['add entries permission'] = 'allowed';
				return 'allowed';
			}
			return 'not allowed';
		}
	}


	/**
	 * requestAuthentication	: display the authentication interface i.e. a form asking the login and password
	 *							: of the user
	 */
	private function requestAuthentication()
	{
		include(dirname(__FILE__,3).'/view/authorisationSystem/authenticationInterfaceTemplate.php');
	}

	/**
	 * execute	: execute the authorisation request sent by the frontal controller for the 'service' and 'userName'
	 */
	public function execute()
	{
		if ($this->isUserAuthenticated())
		{
			if ($this->checkPermission() == 'not allowed')
			{
				throw new PermissionDenied();
			}
			$url = $_SESSION['index'];
			$url .= '/controller/frontalController.php?from=authorisation system';
			header('Location:'.$url);
		}
		else
		{
			$this->requestAuthentication();
		}
	}
}
