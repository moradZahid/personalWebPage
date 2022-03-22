<?php
include_once(dirname(__FILE__).'/EntriesModification.class.php');
include_once(dirname(__FILE__).'/controllerDictionaryHandlerFunctions.php');
include_once(dirname(__FILE__,2).'/authorisationSystem/authorisationSystemFunctions.php');


global $entries_per_page;
global $nbr_entries;

verify_permission('admin services');


$entries_per_page = 10;
$nbr_entries = get_number_entries();

/************************************* Check for errors ***********************/

// instanciation of $letter and $page_nbr
include(dirname(__FILE__).'/manageEntriesCheckForErrors.php');


/************************************* Display list of entries ****************/

//$offset = get_offset($letter,$page_nbr);
//$nbr_entries_to_display = get_nbr_entries_to_display($letter,$page_nbr);

$request = new DictionaryService();

$request->displayStoredEntriesList($letter,$page_nbr);
