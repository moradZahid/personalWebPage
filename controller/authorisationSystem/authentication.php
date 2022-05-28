<?php
include_once(dirname(__FILE__).'/AuthenticationRequest.class.php');
include_once(dirname(__FILE__).'/authorisationSystemFunctions.php');


/****************************** check for errors *****************************/

// and instancies $login , $password
include_once(dirname(__FILE__).'/authenticationCheckForErrors.php');


/*********************** authentication request *******************************/

$request = new AuthenticationRequest($login,$password);
$request->authenticate();

if ($_SESSION['lang'] == 'english')
{
    $_SESSION['success'] = 'Welcome '.$_SESSION['login'];
}
else
{
	$_SESSION['success'] = 'Bienvenue '.$_SESSION['login'];
}

$url = $_SESSION['index'];
$url .= '/controller/frontalController.php';
header('Location:'.$url);