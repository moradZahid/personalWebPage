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
     * checkPage : check if the page number is still valid
     */
    private function checkPage()
    {
		global $ENTRIES_PER_PAGE;
		global $nbr_entries;

		$ENTRIES_PER_PAGE = $_SESSION['nbr_entries_per_page'];
		$nbr_entries = get_number_entries();

		$letter = $_SESSION['letter'];
		$page_nbr = $_SESSION['page_nbr'];
		$index = ord($letter) - 97;
	
		if ($nbr_entries[$index] == "0")
		{
			$_SESSION['letter'] = NULL;
			$_SESSION['page_nbr'] = NULL;
		} 
		else {
			if (!check_validity_page($page_nbr,$letter))
			{
				$last_page = ceil($nbr_entries[$index] / $ENTRIES_PER_PAGE);
				$_SESSION['page_nbr'] = $last_page;
			}
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

		$this->checkPage();
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
