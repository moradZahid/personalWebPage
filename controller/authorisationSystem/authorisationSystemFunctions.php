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
		case 'manageUserAccounts':
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

/**
 * verify_modification_entry_permission	: check if the user who wants to modify the entry is the 
 * 										  owner of the entry
 * 
 * 										: param	: $french_id 	: integer
 * 												: $english_id	: integer
 * 
 * 										:return: boolean
 */
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
	return true;
}


/**
 * verify_modification_user_account_permission	: check if the user who wants to modify the user account  
 * 										  			has the right to do it
 * 
 * 												: param	: $user_id 	: integer
 * 
 * 												:return: boolean
 */
function verify_modification_user_account_permission($user_id)
{
	if ($_SESSION['login'] == 'admin')
	{
		return true;
	}
	try
	{
		if ($user_id != $_SESSION['user_id'])
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
	return true;
}
