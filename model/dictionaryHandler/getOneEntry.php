<?php
// connection to the database
include($_SESSION['db']);

$str_prep = 'SELECT French.expression AS french,
			English.expression AS english
			FROM French INNER JOIN Dictionary INNER JOIN English
			ON French.french_id=Dictionary.french_id
			AND English.english_id=Dictionary.english_id
			WHERE Dictionary.french_id=:french_id
			AND Dictionary.english_id=:english_id';

try
{
	$prep = $db->prepare($str_prep);
	$prep->execute(array('french_id' => $french_id,
						 'english_id' => $english_id));
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

$data = $prep->fetch();
