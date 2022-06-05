<?php
// connection to the database
include($_SESSION['db']);

// query
$str_query = 'SELECT * FROM users_list
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