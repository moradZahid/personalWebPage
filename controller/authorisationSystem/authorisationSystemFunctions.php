<?php

/**
 * check_service	: check if the string given in paramater is a regular name of service
 *
 *					: param : $strg	: string to check
 */
function check_service($strg)
{
	switch ($strg)
	{
	case 'admin services':
		return 1;
	case 'add entries service':
		return 1;
	case 'modify entries service':
		return 1;
	case 'delete entries service':
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
			
			
		case 'admin services':
			if ($_SESSION['admin services permission']!='allowed')
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
			$_SESSION['msg']='Permission denied: your not allowed to use this service';
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