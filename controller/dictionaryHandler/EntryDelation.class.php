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
		if ($_SESSION['lang'] == 'english')
		{
			include(dirname(__FILE__,3).'/view/dictionaryHandler/deleteOneEntryEnglishTemplate.php');
		} 
		else 
		{
			include(dirname(__FILE__,3).'/view/dictionaryHandler/deleteOneEntryFrenchTemplate.php');
		}
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

		if ($_SESSION['lang'] == 'english')
		{
			$_SESSION['success']='Entry delated';
		}
		else
		{
			$_SESSION['success']='L\'entrée a été supprimée';
		}
		$url = $_SESSION['index'];
		$url .= '/controller/frontalController.php?from=manageEntries';
		header('Location:'.$url);
	 } 
}
