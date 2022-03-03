<?php
include_once(dirname(__FILE__).'/authorisationSystemExceptions.php');


$_SESSION['service']=$call;

try
{
	include_once(dirname(__FILE__,2).'/authorisationSystem/requestAuthorisation.php');
}
catch(UnexpectedValue $e)
{
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php';
	header('Location:'.$url);
}
catch(PermissionDenied $e)
{
	$_SESSION['result'] = NULL;
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'Permission denied: your not allowed to use this service';
	}
	else
	{
		$_SESSION['msg'] = 'Permission refusée: vous n\'êtes pas autorisé à utiliser ce service';
	}
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php';
	header('Location:'.$url);
}