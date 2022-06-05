<?php
include_once(dirname(__FILE__).'/EntryDelation.class.php');
include_once(dirname(__FILE__,2).'/authorisationSystem/authorisationSystemFunctions.php');


check_permission();
	

/************************************* Check for errors ********************************************/	

// instantiate $french_id and $english_id...
// ... and instantiate $confirmation if the deletion was confirmed
include(dirname(__FILE__).'/deleteOneEntryCheckForErrors.php');
verify_modification_entry_permission($french_id,$english_id);


/************************************** Ask for confirmation **********************************/

$request = new EntryDelation();

if (!isset($confirmation)) {
    $request->askForConfirmation($french_id,$english_id);
}


/************************************* Delete the entry ***********************************************/

else {
    $request->delete($french_id,$english_id); 
}
