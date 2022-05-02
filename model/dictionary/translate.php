<?php
// connection to the database
include($_SESSION['db']);
/*
$str_prep = 'SELECT ';
$str_prep .= $this->getLanguage().'.expression ';
$str_prep .= 'FROM French INNER JOIN Dictionary
							 INNER JOIN English
							 ON French.french_id=Dictionary.french_id
							 AND English.english_id=Dictionary.english_id
							 WHERE ';
$str_prep .= $this->getOriginalLanguage().'.expresssion=":expr"';
*/
$str_prep = 'SELECT '.$this->getLanguage();
$str_prep .= '.expression FROM French INNER JOIN Dictionary INNER JOIN English
							ON French.french_id=Dictionary.french_id
							AND English.english_id=Dictionary.english_id';
$str_prep .= ' WHERE '.$this->getOriginalLanguage().'.expression=:expr';

try
{
	$prep = $db->prepare($str_prep);
	$prep->execute(array('expr' => $this->expression));

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

$data = $prep->fetchAll();
