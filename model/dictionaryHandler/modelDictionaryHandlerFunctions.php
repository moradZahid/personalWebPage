<?php
// connection to the database
include($_SESSION['db']);

/**
 * store_entry	: store an object of class DictionaryEntry in the table dictionary
 *				:
 *				: param	: $entry: Dictionary Entry object
 */
function store_entry($entry)
{
	global $db;
	
	try
	{
		$prep=$db->prepare('INSERT INTO dictionary(french, english) VALUES(:french, :english)');
		$prep->execute(array('french' => $entry->getFrench(), 
							 'english' => $entry->getEnglish()));
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
}

/**
 * is_in_table_french_expression	: check if the expression $expr is stored in the dictionary table
 *
 *									: param	: $expr	: string
 *	
 *									: return: 1 if the expression is stored
 *									:		: 0 otherwise
 */
function is_in_table_french_expression($expr)
{
	global $db;
	
	try
	{
		$prep=$db->prepare('SELECT COUNT(*) AS expr_nb FROM dictionary WHERE french=:expr');
		$prep->execute(array('expr' => $expr));
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
	
	$nb=$prep->fetch();
	
	if($nb['expr_nb']>=1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}

/**
 * is_in_table_english_expression	: check if the expression $expr is stored in the dictionary table
 *
 *									: param	: $expr	: string
 *	
 *									: return: 1 if the expression is stored
 *									:		: 0 otherwise
 */
function is_in_table_english_expression($expr)
{
	global $db;
	
	try
	{
		$prep=$db->prepare('SELECT COUNT(*) AS expr_nb FROM dictionary WHERE english=:expr');
		$prep->execute(array('expr' => $expr));
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
	
	$nb=$prep->fetch();
	
	if($nb['expr_nb']>=1)
	{
		return 1;
	}
	else
	{
		return 0;
	}
}