<?php
include_once(dirname(__FILE__,3).'/controller/dictionaryHandler/DictionaryEntry.class.php');


/**
 * display_entry	: display the entry given in parameter and a link to the controller which will either
 *				  	  modify or delete the entry (depending on the value of $action)
 *
 *					: param	: $entry 	: DictionaryEntry object
 */
function display_entry($entry, $modify, $delete)
{
	echo '<tr>';
	echo '<td>'.$entry->getFrench().' </td> ';
	echo '<td>'.$entry->getEnglish().' </td> ';

	//link to the modification controller
	$url = $_SESSION['index'];
	$url .= '/controller/dictionaryHandler/modifyOneEntryController.php';
	$url .= '?french_id='.$entry->getFrenchId();
  $url .= '&english_id='.$entry->getEnglishId();

	echo '<td><a href="'.$url.'">'.$modify.'</a></td> ';

  //link to the deletion controller
	$url = $_SESSION['index'];
	$url .= '/controller/dictionaryHandler/deleteOneEntryController.php';
	$url .= '?french_id='.$entry->getFrenchId();
  $url .= '&english_id='.$entry->getEnglishId();

	echo '<td><a href="'.$url.'" class="delete">'.$delete.'</a></td> ';
	echo '</tr>';
 }
