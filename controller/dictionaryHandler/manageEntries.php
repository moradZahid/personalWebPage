<?php
include_once(dirname(__FILE__).'/controllerDictionaryHandlerFunctions.php');
check_permission();


global $ENTRIES_PER_PAGE;
global $nbr_entries;

$ENTRIES_PER_PAGE = 10;
$nbr_entries = get_number_entries();

/************************************* Check for errors ***********************/

// instanciation of $letter and $page_nbr
include(dirname(__FILE__).'/manageEntriesCheckForErrors.php');


/************************************* Display list of entries ****************/

$request = new DictionaryService();

$request->displayEntriesList($letter,$page_nbr);
