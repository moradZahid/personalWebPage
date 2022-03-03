<?php
// connection to the database
include($_SESSION['db']);

try
{
	$prep = $db->prepare('UPDATE dictionary SET french=:french_expr, english=:english_expr WHERE ID=:entry_id'); 
	
	$prep->execute(array( 'french_expr' => $entry->getFrench(),
						  'english_expr' => $entry->getEnglish(),
						  'entry_id' => $entry->getEntryId()));
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
