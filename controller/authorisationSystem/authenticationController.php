<?php
include_once(dirname(__FILE__).'/authorisationSystemExceptions.php');


try
{
	include(dirname(__FILE__).'/requestAuthentication.php');
}

catch(UnexpectedValue $e)
{
	header('Location:http://localhost/morad/controller/frontalController.php');
}

catch(IsNotSet $e)
{
	$_SESSION['msg']='invalid login or password';
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php?from=';
	$url .= $e->getComplementInfo();
	header('Location:'.$url);
}

catch(EmptyString $e)
{
	$_SESSION['msg']='invalid login or password';
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php?from=';
	$url .= $e->getComplementInfo();
	header('Location:'.$url);
}

catch(InvalidPassword $e)
{
	$_SESSION['msg']='invalid login or password';
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php?from=';
	$url .= $e->getComplementInfo();
	header('Location:'.$url);
}