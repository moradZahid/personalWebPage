<?php
try
{
	include_once(dirname(__FILE__).'/manageEntries.php');
}
catch(UnexpectedValue $e)
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
