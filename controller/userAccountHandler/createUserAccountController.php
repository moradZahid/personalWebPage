<?php
session_start();
include_once(dirname(__FILE__,2).'/authorisationSystem/authorisationSystemFunctions.php');
include_once(dirname(__FILE__).'/userAccountHandlerExceptions.php');
include_once(dirname(__FILE__).'/controllerUserAccountHandlerFunctions.php');
include_once(dirname(__FILE__).'/UserAccountCreation.class.php');

try
{
	include(dirname(__FILE__).'/createUserAccount.php');
}
catch(ServiceIsNotSet $e)
{
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'Error. Action not allowed.';
	}
	else
	{
		$_SESSION['msg'] = 'Erreur. Action non autorisée. ';
	}
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php';
	header('Location:'.$url);
}
catch(UnexpectedValue $e)
{
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'Error. Action not allowed.';
		$_SESSION['msg'] .= $e->getMessage();
	}
	else
	{
		$_SESSION['msg'] = 'Erreur. Action non autorisée. ';
		$_SESSION['msg'] .= $e->getMessage();
	}
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php?from=';
	$url .= $service;
	header('Location:'.$url);
}
catch(IsNotSet $e)
{
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'Error. Action not allowed.';
	}
	else
	{
		$_SESSION['msg'] = 'Erreur. Action non autorisée.';
	}
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php?from=';
	$url .= $service;
	header('Location:'.$url);
}
catch(EmptyString $e)
{
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'Error. All the field are mandatory.';
	}
	else
	{
		$_SESSION['msg'] = 'Erreur. Tous les champs sont obligatoires.';
	}
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php?from=';
	$url .= $service;
	header('Location:'.$url);
}
catch(InvalidEmail $e)
{
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'Error. Invalid email address.';
	}
	else
	{
		$_SESSION['msg'] = 'Erreur. L\'adresse mail n\'est pas valide.';
	}
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php?from=';
	$url .= $service;
	header('Location:'.$url);
}
catch(InvalidCode $e)
{
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'Error. Invalid captcha code.';
	}
	else
	{
		$_SESSION['msg'] = 'Erreur. Le code entré est incorrect.';
	}
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php?from=';
	$url .= $service;
	header('Location:'.$url);
}
catch(InvalidPassword $e)
{
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'Error. The two passwords are not identical.';
	}
	else
	{
		$_SESSION['msg'] = 'Erreur. Les mots de passe ne sont pas identiques.';
	}
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php?from=';
	$url .= $service;
	header('Location:'.$url);
}