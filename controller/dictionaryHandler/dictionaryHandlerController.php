<?php
session_start();
include_once(dirname(__FILE__).'/dictionaryHandlerExceptions.php');
include_once(dirname(__FILE__,2).'/authorisationSystem/authorisationSystemFunctions.php');


switch ($_SESSION['service'])
{
case 'add entries service':

	verify_permission('add entries service');

	// call add entries service page
	include(dirname(__FILE__,3).'/view/dictionaryHandler/addEntriesTemplate.php');
	break;


case 'manage entries services':

	verify_permission('manage entries services');

	// call administrative services page
	include(dirname(__FILE__,3).'/view/dictionaryHandler/dictionaryHandlerIndexTemplate.php');
	break;
}
