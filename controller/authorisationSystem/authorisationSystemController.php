<?php
session_start();

switch ($_SESSION['service'])
{
case 'authentication':
    if ($_SESSION['lang'] == 'english')
    {
        include(dirname(__FILE__,3).'/view/authorisationSystem/authenticationEnglishTemplate.php');
    } 
    else 
    {
        include(dirname(__FILE__,3).'/view/authorisationSystem/authenticationFrenchTemplate.php');
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