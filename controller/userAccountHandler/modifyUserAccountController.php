<?php
session_start();
include_once(dirname(__FILE__).'/userAccountHandlerExceptions.php');
include_once(dirname(__FILE__).'/UserAccountModification.class.php');
include_once(dirname(__FILE__,2).'/authorisationSystem/authorisationSystemFunctions.php');
include_once(dirname(__FILE__).'/controllerUserAccountHandlerFunctions.php');

if (filter_has_var(INPUT_GET,'user_id'))
{
    try
    {
        include_once(dirname(__FILE__).'/modifyUserAccount.php');
    }
    catch(UnexpectedValue $e)
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
        $url .='/controller/frontalController.php?from=manageUserAccounts';
        header('Location:'.$url);
    }
}
else
{
    include_once(dirname(__FILE__).'/modifyOneUserAccountController.php');
}