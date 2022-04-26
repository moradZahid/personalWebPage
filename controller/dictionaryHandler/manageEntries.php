<?php
include_once(dirname(__FILE__).'/DictionaryService.class.php');
include_once(dirname(__FILE__).'/controllerDictionaryHandlerFunctions.php');
include_once(dirname(__FILE__,2).'/authorisationSystem/authorisationSystemFunctions.php');

verify_permission('manage entries services');


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
