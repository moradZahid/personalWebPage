<?php
include_once(dirname(__FILE__).'/StoredDictionaryEntry.class.php');


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
		$i=0;
		foreach($data as $elt)
		{
			$entry=new StoredDictionaryEntry($elt['french'],$elt['english'],$elt['ID']);
			$stored_entries_list[$i]=$entry;
			$i++;
		}
		return $stored_entries_list;
	}	
	
	
	/**
	 * displayStoredEntriesList	: display all the entries of the dictionary table from $offset to
	 *							  $offset + $nbr in order to either modify or delete them 
	 *							  (depending on the value of $action)
	 *							
	 *							: param : $action	: string
	 *									: $offset	: integer
	 *									: $nbr		: integer
	 */
	public function displayStoredEntriesList($offset,$nbr,$action)
	{
		$data=NULL;
		include_once(dirname(__FILE__,3).'/model/dictionaryHandler/getSomeEntries.php');
		$stored_entries_list=$this->getStoredEntriesList($data);
		include_once(dirname(__FILE__,3).'/view/dictionaryHandler/displayStoredEntriesTemplate.php');
	}
	
	/**
	 * displayAvailableLetters	: display all the letters which are initials of a french expression
	 *								: according to the array $nbr_entries given in parametre
	 *
	 *								: param : $action	: string (either 'modify' or 'delete')
	 */
	 public function displayAvailableLetters($action)
	 {
		 global $nbr_entries;
		 
		 echo '<p>';
		 foreach ($nbr_entries as $i => $nbr)
		 {
			$nbr = (int) $nbr;
			if ($nbr > 0)
			{
				$url = $_SESSION['index'];
				 $url .= '/controller/dictionaryHandler/'.$action.'EntriesController.php';
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
	 *							: param : $letter	: string
	 *							: 		: $action	: string (either 'modify' or 'delete')
	 */
	 public function displayAvailablePages($letter,$action)
	 {
		 global $nbr_entries;
		 global $entries_per_page;
		 
		 $index = ord($letter) - 97;
		 
		 $total_pages = ceil($nbr_entries[$index] / $entries_per_page);
		 
		 echo '<p>';
		 for ($i=0 ; $i < $total_pages ; $i++)
		 {
		 	 $url = $_SESSION['index'];
			 $url .= '/controller/dictionaryHandler/'.$action.'EntriesController.php';
			 $url .= '?letter='.$letter.'&page='.($i+1);
			 echo '<a href="'.$url.'">';
			 echo ' '.($i+1).' ';
			 echo '</a>'; 
		 }
		 echo '</p>';	 
	 }
}