<?php
session_start();
include_once(dirname(__FILE__).'/dictionaryHandlerExceptions.php');


try
{
	include_once(dirname(__FILE__).'/addEntries.php');
}
catch(IsNotSet $e)
{
	$_SESSION['msg'] = 'The ';
	$_SESSION['msg'] .= $e->getMessage();
	$_SESSION['msg'] .= ' is not set';
	$url = $_SESSION['index'];
	$url .='/controller/frontalController.php?from=add entries service';
	header('Location:'.$url);
}
catch(UnexpectedValue $e)
{
	$_SESSION['msg'] = 'The ';
	$_SESSION['msg'] .= $e->getMessage();
	$_SESSION['msg'] .= ' has not the expected value';
	$url = $_SESSION['index'];
	$url .='/controller/frontalController.php?from=add entries service';
	header('Location:'.$url);
}
catch(FileError $e)
{
	$_SESSION['msg'] = $e->getMessage();
	$url = $_SESSION['index'];
	$url='/controller/frontalController.php?from=add entries service';
	header('Location:'.$url);
}
catch(EmptyString $e)
{
	$_SESSION['msg'] = 'The field ';
	$_SESSION['msg'] .= $e->getMessage();
	$_SESSION['msg'] .= ' is empty';
	$url = $_SESSION['index'];
	$url .='/controller/frontalController.php?from=add entries service';
	header('Location:'.$url);
}
