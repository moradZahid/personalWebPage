<?php
session_start();
include_once(dirname(__FILE__).'/DictionaryService.class.php');
include_once(dirname(__FILE__,2).'/authorisationSystem/authorisationSystemFunctions.php');
include_once(dirname(__FILE__).'/dictionaryHandlerExceptions.php');


if ($_SESSION['service'] == 'manageEntries')
{
    check_permission();

    $service = $_SESSION['service'];
    include_once(dirname(__FILE__).'/manageEntriesController.php');
}
else
{
    if ($_SESSION['lang'] == 'english')
    {
        $_SESSION['msg'] = 'Error. Action not allowed.';
    }
    else
    {
        $_SESSION['msg'] = 'Erreur. Action non autorisée. ';
    }
    $url = $_SESSION['index'];
    $url .= '/controller/frontalController.php';
    header('Location:'.$url);
}