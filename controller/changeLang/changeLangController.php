<?php
session_start();
include_once(dirname(__FILE__,2).'/authorisationSystem/authorisationSystemFunctions.php');
include_once(dirname(__FILE__,2).'/exceptions/ServiceIsNotSet.class.php');
include_once(dirname(__FILE__,2).'/exceptions/IsNotSet.class.php');

try
{
	include(dirname(__FILE__).'/changeLang.php');
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
