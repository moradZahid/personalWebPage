<?php
// connection to the database
include($_SESSION['db']);

for ($i=0; $i<26; $i++)
{
	// prepare the query
	$strg_query = 'SELECT COUNT(*) AS nbr FROM dictionary WHERE french LIKE "';
	$strg_query .= chr($i+97);
	$strg_query .= '%"';
	
	// execute the query
	try
	{
		$ans=$db->query($strg_query);
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
	
	// get the number of entries
	$data = $ans->fetch();
	$nbr_entries[$i] = $data['nbr'];
}
