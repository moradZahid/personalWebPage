<?php
include_once(dirname(__FILE__).'/AuthorisationRequest.class.php');
include_once(dirname(__FILE__).'/authorisationSystemFunctions.php');


/****************************** Check for errors ********************************************/

$service=$_SESSION['service'];

if (check_service($service) == 0) 
{
	throw new UnexpectedValue('service');
}


/****************************** Request authorisation ***************************************/

if (isset($_SESSION['login']))
{
	$name=$_SESSION['login'];
}
else
{
	$name = 'anonymous';
}
$request = new AuthorisationRequest($service,$name);

$request->execute();