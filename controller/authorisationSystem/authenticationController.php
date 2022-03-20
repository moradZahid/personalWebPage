<?php
include_once(dirname(__FILE__).'/authorisationSystemExceptions.php');


try
{
	include(dirname(__FILE__).'/requestAuthentication.php');
}

catch(UnexpectedValue $e)
{
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php';
	header('Location:'.$url);
}

catch(IsNotSet $e)
{
	$_SESSION['msg']='invalid login or password';
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php?from=';
	$url .= $e->getMessage();
	header('Location:'.$url);
}

catch(EmptyString $e)
{
	$_SESSION['msg']='invalid login or password';
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php?from=';
	$url .= $e->getMessage();
	header('Location:'.$url);
}

catch(InvalidPassword $e)
{
	$_SESSION['msg']='invalid login or password';
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php?from=';
	$url .= $e->getMessage();
	header('Location:'.$url);
}
