<?php

check_permission();

/************************************* Check for errors ********************************************/

// set $service and $user_id
include_once(dirname(__FILE__).'/deleteOneUserAccountCheckForErrors.php');


/************************************* Create a user account ****************************/

verify_modification_user_account_permission($user_id);

$request = new UserAccountDeletion($user_id);

$request->execute();