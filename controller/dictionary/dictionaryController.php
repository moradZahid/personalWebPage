<?php
session_start();
include_once(dirname(__FILE__).'/dictionaryExceptions.php');
	

try
{
	include(dirname(__FILE__).'/translate.php');
}

catch(IsNotSet $e)
{
	$_SESSION['result'] = NULL;
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'error: all fields are requiered';
	}
	else
	{
		$_SESSION['msg'] = 'erreur: tous les champs sont requis';
	}
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php';
	header('Location:'.$url);
}

catch(EmptyString $e)
{
	$_SESSION['result'] = NULL;
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'error: all fields are requiered';
	}
	else
	{
		$_SESSION['msg'] = 'erreur: tous les champs sont requis';
	}
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php';
	header('Location:'.$url);
}

catch(UnexpectedValue $e)
{
	$_SESSION['result'] = NULL;
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'error: the variable'.$e->getVariable().' has an unexpected value';
	}
	else
	{
		$_SESSION['msg'] = 'erreur: la variable'.$e->getVariable().'a une valeur inattendue';
	}	
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php';
	header('Location:'.$url);
}	
