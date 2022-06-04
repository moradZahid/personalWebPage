<?php
include_once(dirname(__FILE__).'/DictionaryEntry.class.php');


class EntryModification
{
	/**
	 * getStoredEntry	: Convert raw data from the dictionary table into a DictionaryEntry object
	 *
	 *				    : param : $data 		: array of string
	 *							: $french_id 	: integer
	 *							: $english_id 	: integer
	 *
	 *					: return: DictionaryEntry object
	 */
	 private function getStoredEntry($data,$french_id,$english_id)
	 {
	 	 $entry = new DictionaryEntry($data['french'],
		 							  $french_id,
									  $data['english'],
									  $english_id);
	 	 return $entry;
	 }


	/**
	 * displayModifyOneEntryInterfaceTemplate	: display the interface to modify the entry whose id is given
	 *											in parameter
	 *
	 *										 	: param : $french_id 	: integer
	 *													: $english_id 	: integer
	 *																								: $english_id : integer
	 */
	 public function displayModifyOneEntryInterfaceTemplate($french_id,$english_id)
	 {
		$data = [];
		include(dirname(__FILE__,3).'/model/dictionaryHandler/getOneEntry.php');
		$entry = $this->getStoredEntry($data,$french_id,$english_id);
		if ($_SESSION['lang'] == 'english')
		{
			include(dirname(__FILE__,3).'/view/dictionaryHandler/modifyOneEntryEnglishTemplate.php');
		} 
		else 
		{
			include(dirname(__FILE__,3).'/view/dictionaryHandler/modifyOneEntryFrenchTemplate.php');
		}
	}

	/**
	 * modify	: Modify the entry given in parameter
	 *
	 *				: param : $entry : DictionaryEntry object
	 */
	 public function modify($entry)
	 {
		include(dirname(__FILE__,3).'/model/dictionaryHandler/modifyOneEntry.php');
		
		if ($_SESSION['lang'] == 'english')
		{
			$_SESSION['success']='Entry modified';
		}
		else
		{
			$_SESSION['success']='L\'entrée a été modifiée';
		}
		$url = $_SESSION['index'];
		$url .= '/controller/frontalController.php?from=manageEntries';
		header('Location:'.$url);
	 }
}
