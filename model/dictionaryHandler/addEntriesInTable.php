<?php
include_once(dirname(__FILE__).'/modelDictionaryHandlerFunctions.php');


foreach($entry_list as $entry)
{
	if (!is_entry_in_dictionary($entry))
	{
		store_entry($entry);
	}
}
