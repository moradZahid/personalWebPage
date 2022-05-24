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
}
