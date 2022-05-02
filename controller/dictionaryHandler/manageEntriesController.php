<?php
session_start();
include_once(dirname(__FILE__).'/dictionaryHandlerExceptions.php');


try
{
	include_once(dirname(__FILE__).'/manageEntries.php');
}
catch(IsNotSet $e)
{
	$_SESSION['msg'] = 'the '.$e->getMessage().' is not set <br>';
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php?from=manage entries services';
	header('Location:'.$url);
}
catch(UnexpectedValue $e)
{
	$_SESSION['msg'] = 'the '.$e->getMessage().' has an unexpected value <br>';
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php?from=manage entries services';
	header('Location:'.$url);
}
