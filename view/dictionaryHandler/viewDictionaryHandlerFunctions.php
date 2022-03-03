<?php
include_once(dirname(__FILE__,3).'/controller/dictionaryHandler/StoredDictionaryEntry.class.php');


/**
 * display_entry	: display the entry given in parameter and a link to the controller which will either
 *				  	  modify or delete the entry (depending on the value of $action)
 *
 *					: param	: $entry 	: StoredDictionaryEntry object
 *							: $action	: string
 */
 function display_entry($entry, $action)
 {
	echo '<p>'.$entry->getFrench().' : '.$entry->getEnglish().' | ';
	
	//link to the controller
	$url = $_SESSION['index'];
	$url .= '/controller/dictionaryHandler/'.$action.'OneEntryController.php';
	$url .= '?entry_id='.$entry->getEntryId();
	
	echo '<a href="'.$url.'">'.$action.'</a></p>';
 }
