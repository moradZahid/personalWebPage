<?php
// connection to the database
include($_SESSION['db']);

$str_prep_fr = 'UPDATE French SET expression=:french
 								WHERE french_id=:french_id';
$str_prep_en = 'UPDATE English SET expression=:english
								WHERE english_id=:english_id';

try
{
	$prep = $db->prepare($str_prep_fr);

	$prep->execute(array( 'french' => $entry->getFrench(),
												'french_id' => $entry->getFrenchId()));


	$prep = $db->prepare($str_prep_en);

	$prep->execute(array('english' => $entry->getEnglish(),
						  				 'english_id' => $entry->getEnglishId()));
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
