<?php
include_once(dirname(__FILE__,3).'/controller/dictionaryHandler/DictionaryEntry.class.php');
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
		$str_prep = 'INSERT INTO Dictionary(french_id, english_id, user_id)
												VALUES(:fr, :en, :user)';
		$prep=$db->prepare($str_prep);
		$prep->execute(array('fr' => $entry->getFrenchId(),
							 					 'en' => $entry->getEnglishId(),
											 	 'user' => $_SESSION['user_id']));
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
 * is_french_expression_in_table	: check if the expression $expr is stored in the dictionary table
 *
 *									: param	: $expr	: string
 *
 *									: return: 1 if the expression is stored
 *									:		: 0 otherwise
 */
function is_french_expression_in_table($expr)
{
	global $db;

	try
	{
		$prep=$db->prepare('SELECT french_id FROM French WHERE expression=:expr');
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

	$data = $prep->fetch();

	if(isset($data['french_id']))
	{
		return $data['french_id'];
	}
	else
	{
		return 0;
	}
}

/**
 * is_english_expression_in_table	: check if the expression $expr is stored in the dictionary table
 *
 *									: param	: $expr	: string
 *
 *									: return: 1 if the expression is stored
 *									:		: 0 otherwise
 */
function is_english_expression_in_table($expr)
{
	global $db;

	try
	{
		$prep=$db->prepare('SELECT english_id FROM English WHERE expression=:expr');
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

	$data = $prep->fetch();

	if (isset($data['english_id']))
	{
		return $data['english_id'];
	}
	else
	{
		return 0;
	}
}

/**
 * add_french_expression	: add an expression in the table French and return
 *												  its id
 *
 *													param : $expr : string
 *
 *													return: int
 */
 function add_french_expression($expr)
 {
	 global $db;

	 try
	 {
	   $str_prep = 'INSERT INTO French (expression) VALUES (:expression)';
		 $prep = $db->prepare($str_prep);
		 $prep->execute(array('expression' => $expr));
		 $str_prep = 'SELECT french_id FROM French WHERE expression=:expression';
		 $prep = $db->prepare($str_prep);
		 $prep->execute(array('expression' => $expr));
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
	 return $data['french_id'];
 }


 /**
  * add_english_expression	: add an expression in the table English and return
  *												  its id
  *
  *													param : $expr : string
  *
  *													return: int
  */
  function add_english_expression($expr)
  {
 	 global $db;

 	 try
 	 {
 	   $str_prep = 'INSERT INTO English (expression) VALUES (:expression)';
 		 $prep = $db->prepare($str_prep);
 		 $prep->execute(array('expression' => $expr));
 		 $str_prep = 'SELECT english_id FROM English WHERE expression=:expression';
 		 $prep = $db->prepare($str_prep);
 		 $prep->execute(array('expression' => $expr));
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
 	 return $data['english_id'];
  }


/**
 * is_entry_in_dictionary	: check if the pair ($french_id,$english_id) is
 *													already in the dictionary
 *
 * 												: param : $entry 	: object of the class DictionaryEntry
 *																: $english_id : int
 *
 *												: return: bool
 */
 function is_entry_in_dictionary($entry)
 {
	 global $db;
	 try
	 {
	   $str_prep = 'SELECT COUNT(*) AS nb FROM Dictionary
		 							WHERE french_id=:fr AND english_id=:en';
		 $prep = $db->prepare($str_prep);
		 $prep->execute(array('fr' => $entry->getFrenchId(),
	 												'en' => $entry->getEnglishId()));
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
	 if ($data['nb'] == 0)
	 {
		 return false;
	 }
	 else
	 {
	 	return true;
	 }
 }
