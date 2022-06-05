<?php

/***************************** Check the id of the account to modify **************************/

if ($user_id <= 0)
{
    throw new UnexpectedValue();
}
verify_modification_user_account_permission($user_id);



/****************************** Ask for confirmation *****************************************/

$data = [];
include_once(dirname(__FILE__,3).'/model/userAccountHandler/getOneUserAccount.php');
$userAccount = get_user_account($data);
if (isset($userAccount))
{
    if ($_SESSION['lang'] == 'english')
    {
        include(dirname(__FILE__,3).'/view/userAccountHandler/deleteOneUserAccountEnglishTemplate.php');
    } 
    else 
    {
        include(dirname(__FILE__,3).'/view/userAccountHandler/deleteOneUserAccountFrenchTemplate.php');
    }
}