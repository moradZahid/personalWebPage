<?php

/***************************** Get the id of the account to modify **************************/

$user_id = filter_input(INPUT_GET,'user_id',FILTER_VALIDATE_INT);
if ($user_id <= 0)
{
    throw new UnexpectedValue();
}
verify_modification_user_account_permission($user_id);



/***************************** Display the interface to modify one user account **************/

$data = [];
include_once(dirname(__FILE__,3).'/model/userAccountHandler/getOneUserAccount.php');
$userAccount = get_user_account($data);
if (isset($userAccount))
{
    if ($_SESSION['lang'] == 'english')
    {
        include(dirname(__FILE__,3).'/view/userAccountHandler/modifyOneUserAccountEnglishTemplate.php');
    } 
    else 
    {
        include(dirname(__FILE__,3).'/view/userAccountHandler/modifyOneUserAccountFrenchTemplate.php');
    }
}