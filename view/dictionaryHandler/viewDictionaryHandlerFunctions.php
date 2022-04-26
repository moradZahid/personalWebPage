<?php
include_once(dirname(__FILE__,3).'/controller/dictionaryHandler/DictionaryEntry.class.php');


/**
 * display_entry	: display the entry given in parameter and a link to the controller which will either
 *				  	  modify or delete the entry (depending on the value of $action)
 *
 *					: param	: $entry 	: DictionaryEntry object
 */
 function display_entry($entry)
 {
	echo '<p>'.$entry->getFrench().' : '.$entry->getEnglish().' | ';

	//link to the modification controller
	$url = $_SESSION['index'];
	$url .= '/controller/dictionaryHandler/modifyOneEntryController.php';
	$url .= '?french_id='.$entry->getFrenchId();
  $url .= '&english_id='.$entry->getEnglishId();

	echo '<a href="'.$url.'">Modify</a> -- ';

  //link to the deletion controller
	$url = $_SESSION['index'];
	$url .= '/controller/dictionaryHandler/deleteOneEntryController.php';
	$url .= '?french_id='.$entry->getFrenchId();
  $url .= '&english_id='.$entry->getEnglishId();

	echo '<a href="'.$url.'">Delete</a></p> ';
 }
