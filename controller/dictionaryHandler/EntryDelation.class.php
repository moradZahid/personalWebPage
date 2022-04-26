<?php
include_once(dirname(__FILE__).'/DictionaryEntry.class.php');


class EntryDelation
{
	/**
	 * askForConfirmation :	Ask to confirm the deletion of the entry 
	 *
	 * 					  : param : $french_id : integer
	 * 							  : $english_id: integer 
	 */
	public function askForConfirmation($french_id,$english_id)
	{
		// $data will contain the French and English expressions 
		$data = null;
		include(dirname(__FILE__,3).'/model/dictionaryHandler/getOneEntry.php');
		if (empty($data))
		{
			throw new UnexpectedValue('internal variable');
		}
		$entry = new DictionaryEntry($data['french'],$french_id,$data['english'],$english_id);
		include(dirname(__FILE__,3).'/view/dictionaryHandler/deleteOneEntryInterfaceTemplate.php');	
	}


	/**
	 * delete	: Delete the entry whose id is given in parameter
	 *
	 *			: param : $french_id : integer
	 * 					: $english_id: integer 
	 */
	 public function delete($french_id,$english_id)
	 {
		include(dirname(__FILE__,3).'/model/dictionaryHandler/deleteOneEntry.php');
		
		$_SESSION['msg'] = 'Entry delated';
		$url = $_SESSION['index'];
		$url .= '/controller/frontalController.php?from=manage entries services';
		header('Location:'.$url);
	 } 
}
