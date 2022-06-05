<?php
include_once(dirname(__FILE__).'/DictionaryEntry.class.php');
include_once(dirname(__FILE__).'/controllerDictionaryHandlerFunctions.php');

class DictionaryService
{
	/**
	 * getEntriesList	: Convert raw data from the dictionary table into a list of
	 *						  StoredDictionaryEntry objects
	 *
	 *						: param : $data : array of array of string
	 *
	 *						: return: array of StoredDictionaryEntry objects
	 */
	private function getEntriesList($data)
	{
		foreach($data as $elt)
		{
			$entry = new DictionaryEntry($elt['french'],
										 $elt['french_id'],
										 $elt['english'],
										 $elt['english_id']);
			$entries_list[] = $entry;
		}
		return $entries_list;
	}

	/**
	 * displayAvailableLetters	: display all the letters which are initials of a french expression
	 *							: according to the array $nbr_entries
	 */
	 private function displayAvailableLetters()
	 {
		 global $nbr_entries;

		 foreach ($nbr_entries as $i => $nbr)
		 {
			$nbr = (int) $nbr;
			if ($nbr > 0)
			{
				$url = $_SESSION['index'];
				$url .= '/controller/dictionaryHandler/dictionaryHandlerController.php';
				$url .= '?letter='.chr($i+97).'&page=1';
				echo '<a href="'.$url.'">';
			 	echo '<div class="paging">';
				echo ' '.chr($i+97).' ';
				echo '</div></a>';
			}
		 }
	 }


	/**
	 * displayAvailablePages	: display all the page numbers for a letter given in parametre
	 *
	 *							: param : $letter	: string
	 */
	 private function displayAvailablePages($letter)
	 {
		 global $nbr_entries;
		 global $ENTRIES_PER_PAGE;

		 $index = ord($letter) - 97;

		 $total_pages = ceil($nbr_entries[$index] / $ENTRIES_PER_PAGE);

		 for ($i=0 ; $i < $total_pages ; $i++)
		 {
		 	 $url = $_SESSION['index'];
			 $url .= '/controller/dictionaryHandler/dictionaryHandlerController.php';
			 $url .= '?letter='.$letter.'&page='.($i+1);
			 echo '<a href="'.$url.'">';
			 echo '<div class="paging">';
			 echo ' '.($i+1).' ';
			 echo '</div></a>';
		 }
	 }

	 /**
	 * displayEntriesList	: display all the entries of the dictionary table
	 *						  begining by $letter at the page $page_nbr
	 *
	 *					 	: param : $letter	: character
	 *							    : $page_nbr	: integer
	 */
	public function displayEntriesList($letter,$page_nbr)
	{
		$offset = get_offset($page_nbr);
		$nbr = get_nbr_entries_to_display($letter,$page_nbr);
		if ($nbr > 0)
		{
			$data = [];
			if ($_SESSION['login'] == 'admin')
			{
				include_once(dirname(__FILE__,3).'/model/dictionaryHandler/getSomeEntriesAdmin.php');	
			}
			else
			{
				include_once(dirname(__FILE__,3).'/model/dictionaryHandler/getSomeEntries.php');
			}
			$entries_list = $this->getEntriesList($data);
		}
		else
		{
			$entries_list = [];	
		}
		if ($_SESSION['lang'] == 'english')
		{
			include(dirname(__FILE__,3).'/view/dictionaryHandler/manageEntriesEnglishTemplate.php');
		} 
		else 
		{
			include(dirname(__FILE__,3).'/view/dictionaryHandler/manageEntriesFrenchTemplate.php');
		}
	}
}
