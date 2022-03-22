<?php
include_once(dirname(__FILE__).'/EntryModification.class.php');
include_once(dirname(__FILE__).'/dictionaryHandlerExceptions.php');
include_once(dirname(__FILE__,2).'/authorisationSystem/authorisationSystemFunctions.php');


verify_permission('admin services');


/************************************* Check for errors ********************************************/

// instantiate $french_id and english_id...
// ... and instantiate $french, $english if a form was submited

include(dirname(__FILE__).'/modifyOneEntryCheckForErrors.php');

/***************************** Display modify one entry interface ***********************************/

$request = new EntryModification();

if (!filter_has_var(INPUT_POST,'submit'))
{
	$request->displayModifyOneEntryInterfaceTemplate($french_id,$english_id);
}


/************************************* Modify the entry ***********************************************/

else
{
	verify_modification_entry_permission($french_id,$english_id);
	$entry = new DictionaryEntry($french,$french_id,$english,$english_id);
	$request->modify($entry);
}
