<?php
include_once(dirname(__FILE__).'/DictionaryService.class.php');
include_once(dirname(__FILE__).'/DictionaryEntry.class.php');

class EntriesAddition extends DictionaryService
{
	/**
	 * getEntryListToAdd	: convert the list returned by the function extractEntries() into a list of
	 *						  DictionaryEntry objects
	 *
	 *						: param	: $data_list	: array of pair of strings
	 *						 		: $frenchIndex 	: index of the french expressions in the pair of strings
	 *								: $englishIndex : index of the english expressions in the pair of strings
	 */
	protected function getEntryListToAdd($data_list, $frenchIndex, $englishIndex)
	{
		$i=0;
		foreach($data_list as $pair)
		{
			$entry=new DictionaryEntry($pair[$frenchIndex],$pair[$englishIndex]);

			$entries_list[$i]=$entry;
			$i++;
		}
		return $entries_list;
	}


	/**
	 * 	addEntriesInTable	: insert a list of DictionaryEntry objects into the dictionary table
	 *
	 *						: param : $entry_list : array of DictionaryEntry objects
	 */
	protected function addEntriesInTable($entry_list)
	{
		include_once(dirname(__FILE__,3).'/model/dictionaryHandler/addEntriesInTable.php');
	}
}
