<?php
// connection to the database
include($_SESSION['db']);

try
{
	$prep = $db->prepare('SELECT * FROM dictionary WHERE ID=:entry_id');
	$prep->execute(array('entry_id' => $entry_id));
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