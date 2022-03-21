<?php
include_once(dirname(__FILE__).'/DictionaryService.class.php');
include_once(dirname(__FILE__).'/DictionaryEntry.class.php');
include(dirname(__FILE__,3).'/model/dictionaryHandler/modelDictionaryHandlerFunctions.php');

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
		foreach($data_list as $pair)
		{
			$french_id = is_french_expression_in_table($pair[$frenchIndex]);
			if ($french_id < 1)
			{
				$french_id = add_french_expression($pair[$frenchIndex]);
			}

			$english_id = is_english_expression_in_table($pair[$englishIndex]);
			if ($english_id < 1)
			{
				$english_id = add_english_expression($pair[$englishIndex]);
			}
			$entry=new DictionaryEntry($pair[$frenchIndex],$french_id,$pair[$englishIndex],$english_id);

			$entries_list[] = $entry;
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
