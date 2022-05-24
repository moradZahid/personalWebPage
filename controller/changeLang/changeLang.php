<?php
include_once(dirname(__FILE__,2).'/controller/authorisationSystem/authorisationSystemFunctions.php');


/******************************** Check for errors **************************************/

include(dirname(__FILE__).'/changeLangCheckForErrors.php');

/******************************* Change de language of the session *********************/

if ($lang == 'english')
{
	$_SESSION['lang'] = 'english';
}
else
{
	$_SESSION['lang'] = 'french';
}
$_SESSION['result'] = NULL;


/****************************** Apply change *******************************************/ 

$url = $_SESSION['index'];
$url .= '/controller/frontalController.php?from=';
$url .= $service;
header('Location:'.$url);	