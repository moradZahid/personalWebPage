<?php

/************************************* Check for errors ********************************************/

// set $service, $login, $password1, $password2, $email, $code and $captcha_nbr
include_once(dirname(__FILE__).'/createUserAccountCheckForErrors.php');


/************************************* Create a user account ****************************/
saveFormInput($login,$password1,$password2,$email,$code);
$request = new UserAccountCreation($login,$password1,$password2,$email,$code,$captcha_nbr);
$request->execute();

if ($_SESSION['lang'] == 'english')
{
    $_SESSION['success'] = 'User account created.';
}
else
{
	$_SESSION['success'] = 'Compte utilisateur créé.';
}
$url = $_SESSION['index'];
$url .= '/controller/frontalController.php';
header('Location:'.$url);