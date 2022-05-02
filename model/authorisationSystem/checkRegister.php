<?php
// connection to the database
include($_SESSION['db']);


try
{
	$prep=$db->prepare('SELECT user_id, password FROM users_list WHERE login=:log');
	$prep->execute(array('log' => $this->login));
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

$data=$prep->fetch();
