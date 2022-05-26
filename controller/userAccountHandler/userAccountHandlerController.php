<?php
session_start();

switch ($_SESSION['service'])
{
case 'createUserAccount':
    if ($_SESSION['lang'] == 'english')
    {
        include(dirname(__FILE__,3).'/view/userAccountHandler/createUserAccountEnglishTemplate.php');
    } 
    else 
    {
        include(dirname(__FILE__,3).'/view/userAccountHandler/createUserAccountFrenchTemplate.php');
    }
    break;
    
default:
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
