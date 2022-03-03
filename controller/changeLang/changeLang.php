<?php
/******************************** Check for errors **************************************/

if (!filter_has_var(INPUT_POST,'lang'))
{
	throw new IsNotSet();
}
$lang=filter_input(INPUT_POST,'lang',FILTER_SANITIZE_SPECIAL_CHARS);


/******************************* Change de language of the session *********************/

if ($lang=='english')
{
	$_SESSION['lang']='english';
}
else
{
	$_SESSION['lang']='french';
}


/****************************** Apply change *******************************************/ 

$url = $_SESSION['index'];
$url .= '/controller/frontalController.php';
header('Location:');

	