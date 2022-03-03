<?php

include_once(dirname(__FILE__).'/EntriesAddition.class.php');
include_once(dirname(__FILE__,2).'/authorisationSystem/authorisationSystemFunctions.php');


verify_permission('add entries service');
	

/************************************* Check for errors ********************************************/	

include_once(dirname(__FILE__).'/addEntriesCheckForErrors.php');


/************************************* Addition of the entries *************************************/

$file_name=$_FILES['data_file']['tmp_name'];

$addition = new EntriesAddition($file_name,$mod);

$addition->execute();


/************************************* Successful ending **********************************************/

$_SESSION['msg']='entries added';
$url = $_SESSION['index'];
$url .= '/controller/frontalController.php?from=add entries service';
header('Location:'.$url);