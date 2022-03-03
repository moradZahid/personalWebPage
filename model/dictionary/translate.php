<?php
// connection to the database
include($_SESSION['db']);

$str_query='SELECT '.$this->language.' FROM dictionary WHERE '.$this->getOriginalLanguage().' = "'.$this->expression.'"';

try
{
	$ans=$db->query($str_query);
}
catch(Exception $e)
{
	$_SESSION['result'] = NULL;
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'data base error: try later';
	}
	else
	{
		$_SESSION['msg'] = 'erreur de la base de donnée: réessayer plus tard';
	}
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php';
	header('Location:'.$url);
}

$data=$ans->fetch();