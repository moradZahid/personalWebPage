<?php
include_once(dirname(__FILE__).'/EntryModification.class.php');
include_once(dirname(__FILE__,2).'/authorisationSystem/authorisationSystemFunctions.php');


check_permission();

/************************************* Check for errors ********************************************/

// instantiate $french_id and english_id...
// ... and instantiate $french, $english if a form was submited

include(dirname(__FILE__).'/modifyOneEntryCheckForErrors.php');
verify_modification_entry_permission($french_id,$english_id);

/***************************** Display modify one entry interface ***********************************/

$request = new EntryModification();

if (empty($_POST))
{
	$request->displayModifyOneEntryInterfaceTemplate($french_id,$english_id);
}

/************************************* Modify the entry ***********************************************/

else
{
	$entry = new DictionaryEntry($french,$french_id,$english,$english_id);
	$request->modify($entry);
}
