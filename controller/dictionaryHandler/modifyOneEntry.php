<?php
include_once(dirname(__FILE__).'/EntryModification.class.php');
include_once(dirname(__FILE__).'/dictionaryHandlerExceptions.php');
include_once(dirname(__FILE__,2).'/authorisationSystem/authorisationSystemFunctions.php');


verify_permission('admin services');
	

/************************************* Check for errors ********************************************/	

// instanciate $entry_id ... 
// ... and instanciate $french, $english if $_POST is set

include(dirname(__FILE__).'/modifyOneEntryCheckForErrors.php');


/***************************** Display modify one entry interface ***********************************/

$request = new EntryModification();

if (!filter_has_var(INPUT_POST,'french'))
{
	$request->displayModifyOneEntryInterfaceTemplate($entry_id);
}


/************************************* Modify the entry ***********************************************/

else
{
	$entry = new StoredDictionaryEntry($french,$english,$entry_id);
	$request->modify($entry);
}