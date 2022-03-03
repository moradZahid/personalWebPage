<?php
include_once(dirname(__FILE__).'/DictionaryService.class.php');

class EntriesModification extends DictionaryService
{
	
	/**
	 * displayStoredEntriesList	: display all the entries of the dictionary table from $offset to
	 *							  $offset + $nbr in order to modify them 
	 *							
	 *							: param : $offset	: integer
	 *									: $nbr		: integer
	 */
	public function displayStoredEntriesList($offset,$nbr,$action='modify')
	{
		DictionaryService::displayStoredEntriesList($offset,$nbr,$action);
	}
	
	
	/**
	 * displayAvailableLetters	: display all the letters which are initials of a french expression
	 *							: according to the array $nbr_entries given in parametre
	 */
	 public function displayAvailableLetters($action='modify')
	 {
	 	 DictionaryService::displayAvailableLetters($action);
	 }
	 
	
	/**
	 * displayAvailablePages	: display all the page numbers for a letter given in parametre
	 *
	 *							: param : $letter	: string
	 */
	 public function displayAvailablePages($letter,$action='modify')
	 {
	 	 DictionaryService::displayAvailablePages($letter,$action);
	 }
}