<?php

check_permission();

/************************************* Check for errors ********************************************/

// set $service, $login, $password1, $password2, $email, $pswd_modified and $user_id
include_once(dirname(__FILE__).'/modifyOneUserAccountCheckForErrors.php');


/************************************* Create a user account ****************************/

verify_modification_user_account_permission($user_id);

if ($pswd_modified == 'modified')
{
    $request = new UserAccountModification($login,$email,'modified',$user_id,[$password1,$password2]);
}
else
{
    $request = new UserAccountModification($login,$email,'not-modified',$user_id);
}
$request->execute();

if($_SESSION['login'] == 'admin')
{
    if ($_SESSION['lang'] == 'english')
    {
        $_SESSION['success'] = 'User account updated.';
    }
    else
    {
        $_SESSION['success'] = 'Compte utilisateur modifié.';
    }
    $url = $_SESSION['index'];
    $url .= '/controller/frontalController.php?from=';
	$url .= $service;
    header('Location:'.$url);
}
else
{
    if ($_SESSION['lang'] == 'english')
    {
        $_SESSION['success'] = 'User account updated.';
    }
    else
    {
        $_SESSION['success'] = 'Compte utilisateur modifié.';
    }
    $url = $_SESSION['index'];
    $url .= '/controller/frontalController.php';
    header('Location:'.$url);
}