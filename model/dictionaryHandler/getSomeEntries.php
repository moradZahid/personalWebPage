<?php
// connection to the database
include($_SESSION['db']);

// prepare the query
//$strg_query = 'SELECT * FROM dictionary ORDER BY french LIMIT '.$offset.' ,'.$nbr;
$str_query = 'SELECT French.expression AS french, English.expression AS english,
							Dictionary.french_id, Dictionary.english_id, Dictionary.user_id
							FROM French INNER JOIN Dictionary INNER JOIN English
							ON French.french_id=Dictionary.french_id
							AND English.english_id=Dictionary.english_id
							WHERE French.expression LIKE "'.$letter.'%" ';
$str_query .=	'ORDER BY French.expression
							 LIMIT '.$offset.' ,'.$nbr;
//execute the query
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

$data = $ans->fetchAll();
