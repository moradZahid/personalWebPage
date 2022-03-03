<?php
include_once(dirname(__FILE__).'/StoredDictionaryEntry.class.php');


class EntryModification
{
	/**
	 * getStoredEntry	: Convert raw data from the dictionary table into a StoredDictionaryEntry object
	 *
	 *					: param : $data : array of string
	 *
	 *					: return: StoredDictionaryEntry object
	 */
	 private function getStoredEntry($data)
	 {
	 	 $entry = new StoredDictionaryEntry($data['french'],$data['english'],$data['ID']);
	 	 return $entry;
	 }
	
	
	/**
	 * displayModifyOneEntryInterfaceTemplate	: display the interface to modify the entry whose id is given
	 *											  in parameter
	 *
	 *										 	: param : $entry_id : integer
	 */
	 public function displayModifyOneEntryInterfaceTemplate($entry_id)
	 {
		$data=NULL;
		include(dirname(__FILE__,3).'/model/dictionaryHandler/getOneEntry.php');
		$entry = $this->getStoredEntry($data);
		
		include(dirname(__FILE__,3).'/view/dictionaryHandler/modifyOneEntryInterfaceTemplate.php');
	} 
	
	/**
	 * modify	: Modify the entry given in parameter
	 *
	 *			: param : $entry : StoredDictionaryEntry object
	 */
	 public function modify($entry)
	 {
		include(dirname(__FILE__,3).'/model/dictionaryHandler/modifyOneEntry.php');
		
		$_SESSION['msg'] = 'Entry modified';
		$url = $_SESSION['index'];
		$url .= '/controller/frontalController.php?from=admin services';
		header('Location:'.$url);
	 }
}
