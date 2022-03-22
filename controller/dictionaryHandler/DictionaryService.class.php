<?php
include_once(dirname(__FILE__).'/StoredDictionaryEntry.class.php');
include_once(dirname(__FILE__).'/controllerDictionaryHandlerFunctions.php');

class DictionaryService
{
	/**
	 * getStoredEntriesList	: Convert raw data from the dictionary table into a list of
	 *						  StoredDictionaryEntry objects
	 *
	 *						: param : $data : array of array of string
	 *
	 *						: return: array of StoredDictionaryEntry objects
	 */
	private function getStoredEntriesList($data)
	{
		foreach($data as $elt)
		{
			$entry=new StoredDictionaryEntry($elt['french'],
																			 $elt['french_id'],
																			 $elt['english'],
																			 $elt['english_id'],
																			 $elt['user_id']);
			$stored_entries_list[] = $entry;
		}
		return $stored_entries_list;
	}


	/**
	 * displayStoredEntriesList	: display all the entries of the dictionary table
	 *														begin by $letter at the page $page_nbr
	 *
	 *													: param : $letter		: character
	 *																	: $page_nbr	: integer
	 */
	public function displayStoredEntriesList($letter,$page_nbr)
	{
		$offset = get_offset($page_nbr);
		$nbr = get_nbr_entries_to_display($letter,$page_nbr);
		$data = [];
		include_once(dirname(__FILE__,3).'/model/dictionaryHandler/getSomeEntries.php');
		$stored_entries_list=$this->getStoredEntriesList($data);
		include_once(dirname(__FILE__,3).'/view/dictionaryHandler/displayStoredEntriesTemplate.php');
	}

	/**
	 * displayAvailableLetters	: display all the letters which are initials of a french expression
	 *													: according to the array $nbr_entries given in parametre
	 */
	 private function displayAvailableLetters()
	 {
		 global $nbr_entries;

		 echo '<p>';
		 foreach ($nbr_entries as $i => $nbr)
		 {
			$nbr = (int) $nbr;
			if ($nbr > 0)
			{
				$url = $_SESSION['index'];
				 $url .= '/controller/dictionaryHandler/manageEntriesController.php';
				 $url .= '?letter='.chr($i+97).'&page=1';

				 echo '<a href="'.$url.'">';
				 echo ' '.chr($i+97).' ';
				 echo '</a>';
			}
		 }
		 echo '</p>';
	 }


	/**
	 * displayAvailablePages	: display all the page numbers for a letter given in parametre
	 *
	 *							          :param : $letter	: string
	 */
	 private function displayAvailablePages($letter)
	 {
		 global $nbr_entries;
		 global $entries_per_page;

		 $index = ord($letter) - 97;

		 $total_pages = ceil($nbr_entries[$index] / $entries_per_page);

		 echo '<p>';
		 for ($i=0 ; $i < $total_pages ; $i++)
		 {
		 	 $url = $_SESSION['index'];
			 $url .= '/controller/dictionaryHandler/manageEntriesController.php';
			 $url .= '?letter='.$letter.'&page='.($i+1);
			 echo '<a href="'.$url.'">';
			 echo ' '.($i+1).' ';
			 echo '</a>';
		 }
		 echo '</p>';
	 }
}
