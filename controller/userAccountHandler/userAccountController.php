<?php
session_start();



switch ($_SESSION['service'])
{
    case 'createUserAccount':
        include(dirname(__FILE__,3).'/view/userAccountHandler/createUserAccountTemplate.php');
        break;
}
