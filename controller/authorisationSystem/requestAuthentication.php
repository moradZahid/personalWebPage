<?php
include_once(dirname(__FILE__).'/AuthenticationRequest.class.php');
include_once(dirname(__FILE__).'/authorisationSystemFunctions.php');


/****************************** check for errors *****************************/

// and instancies $login , $password
include_once(dirname(__FILE__).'/requestAuthenticationCheckForErrors.php');


/*********************** authentication request *******************************/

$request = new AuthenticationRequest($login,$password);
$request->authenticate();













