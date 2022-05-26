<?php

/************************************* Check for errors ********************************************/

// set $service, $login, $password1, $password2, $email, $code and $captcha_nbr
include_once(dirname(__FILE__).'/createUserAccountCheckForErrors.php');


/************************************* Create a user account ****************************/
printf($captcha_nbr);