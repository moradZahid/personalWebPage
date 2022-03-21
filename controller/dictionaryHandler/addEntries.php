<?php

include_once(dirname(__FILE__).'/EntriesAdditionWithFile.class.php');
include_once(dirname(__FILE__).'/EntriesAdditionWithForm.class.php');
include_once(dirname(__FILE__,2).'/authorisationSystem/authorisationSystemFunctions.php');


verify_permission('add entries service');


/************************************* Check for errors ********************************************/

// set $method, $mod, $french, $english
include_once(dirname(__FILE__).'/addEntriesCheckForErrors.php');


/************************************* Addition of the entries *************************************/

if ($method == 'file')
{
	$file_name = $_FILES['data_file']['tmp_name'];
	$addition = new EntriesAdditionWithFile($file_name,$mod);
	$addition->execute();
}
else
{
	$addition = new EntriesAdditionWithForm($french,$english);
	$addition->execute();
}


/************************************* Successful ending **********************************************/

$_SESSION['msg']='entries added';
$url = $_SESSION['index'];
$url .= '/controller/frontalController.php?from=add entries service';
header('Location:'.$url);
