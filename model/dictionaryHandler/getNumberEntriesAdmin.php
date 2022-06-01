<?php
// connection to the database
include($_SESSION['db']);

for ($i=0; $i<26; $i++)
{
	// prepare the query
	$str_query = 'SELECT COUNT(*) AS nbr
				  FROM French INNER JOIN Dictionary INNER JOIN English
				  ON French.french_id=Dictionary.french_id
				  AND English.english_id=Dictionary.english_id
				  WHERE French.expression LIKE "';
	$str_query .= chr($i+97);
	$str_query .= '%"';

	// execute the query
	try
	{
		$ans = $db->query($str_query);
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
