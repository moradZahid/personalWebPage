<?php
include_once(dirname(__FILE__).'/EntryDelation.class.php');
include_once(dirname(__FILE__).'/dictionaryHandlerExceptions.php');
include_once(dirname(__FILE__,2).'/authorisationSystem/authorisationSystemFunctions.php');


verify_permission('admin services');
	

/************************************* Check for errors ********************************************/	

// instanciate $entry_id
include(dirname(__FILE__).'/deleteOneEntryCheckForErrors.php');


/************************************* Delete the entry ***********************************************/

$request = new EntryDelation();

$request->delete($entry_id);
