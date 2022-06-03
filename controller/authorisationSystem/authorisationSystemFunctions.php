<?php
include_once(dirname(__FILE__).'/authorisationSystemExceptions.php');
include_once(dirname(__FILE__,3).'/model/authorisationSystem/modelAuthorisationSystemFunctions.php');

/**
 * check_service	: check if the string given in paramater is a regular name of service
 *
 *					: param : $strg	: string to check
 */
function check_service($strg)
{
	switch ($strg)
	{
	case 'manage entries services':
		return 1;
	case 'add entries service':
		return 1;
	case 'createUserAccount':
		return 1;
	case 'authentication':
		return 1;
	case 'manageEntries':
		return 1;
	default:
		return 0;
	}
}

/**
 * verify_permission	: simple verification that the user has the right to use $service
 *						: param : $service	: string containing the service used
 */
function verify_permission($service)
{
	try
	{
		switch ($service)
		{
		case 'add entries service':

			if ($_SESSION['add entries permission']!='allowed')
			{
				throw new PermissionDenied();
			}
			break;


		case 'manage entries services':
			if ($_SESSION['manage entries services permission']!='allowed')
			{
				throw new PermissionDenied();
			}
			break;
		}
	}
	catch(PermissionDenied $e)
	{
		if ($_SESSION['lang']=='english')
		{
			$_SESSION['msg']='Permission denied: you are not allowed to use this service';
			$url = $_SESSION['index'];
			$url .= '/controller/frontalController.php?from=error english';
			header('Location:'.$url);
		}
		else
		{
			$_SESSION['msg']='Permission refusée: vous n\'êtes pas autorisé à utiliser ce service';
			$url = $_SESSION['index'];
			$url .= '/controller/frontalController.php?from=error french';
			header('Location:'.$url);
		}
	}
}

/**
 * check_permission	: simple verification that the user has the right to use the service
 */
function check_permission()
{
	try
	{
		if (!isset($_SESSION['login']) || $_SESSION['login'] == 'anonymous')
		{
			throw new PermissionDenied();
		}
	}
	catch(PermissionDenied $e)
	{
		if ($_SESSION['lang'] == 'english')
		{
			$_SESSION['msg'] = 'Permission denied: you are not allowed to use this service';
			$url = $_SESSION['index'];
			$url .= '/controller/frontalController.php';
			header('Location:'.$url);
		}
		else
		{
			$_SESSION['msg'] = 'Permission refusée: vous n\'êtes pas autorisé à utiliser ce service';
			$url = $_SESSION['index'];
			$url .= '/controller/frontalController.php';
			header('Location:'.$url);
		}
	}
}

function verify_modification_entry_permission($french_id,$english_id)
{
	if ($_SESSION['login'] == 'admin')
	{
		return true;
	}
	$owner = get_owner_entry($french_id,$english_id);
	try
	{
		if ($owner != $_SESSION['user_id'])
		{
			throw new PermissionDenied();
		}
	}
	catch(PermissionDenied $e)
	{
		$_SESSION['msg'] = 'Permission denied: you are not allowed to modifie or delete this entry';
		$url = $_SESSION['index'];
		$url .= '/controller/dictionaryHandler/manageEntriesController.php?letter=a&page=1';
		header('Location:'.$url);
	}
	return true;
}

function saveFormInput($login,$password) {
    $_SESSION['authentication_login'] = $login;
    $_SESSION['authentication_password'] = $password;
}