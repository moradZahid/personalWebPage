<?php
global $db;
// connection to the database
include($_SESSION['db']);

include_once(dirname(__FILE__).'/modelDictionaryHandlerFunctions.php');


foreach($entry_list as $entry)
{
	if(!is_in_table_french_expression($entry->getFrench()) && !is_in_table_english_expression($entry->getEnglish()))
	{
		store_entry($entry);
	}
}
