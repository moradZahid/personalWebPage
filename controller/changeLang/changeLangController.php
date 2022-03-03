<?php
session_start();
include_once(dirname(__FILE__,2).'/exceptions/IsNotSet.class.php');

try
{
	include(dirname(__FILE__).'/changeLang.php');
}
catch(IsNotSet $e)
{
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php';
	header('Location:'.$url);
}