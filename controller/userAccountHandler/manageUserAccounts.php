<?php
check_permission();


global $ACCOUNTS_PER_PAGE;

$ACCOUNTS_PER_PAGE = 3;

/************************************* Check for errors ***********************/

// instanciation of $page_nbr
include(dirname(__FILE__).'/manageUserAccountsCheckForErrors.php');


/************************************* Display list of entries ****************/

$_SESSION['accounts_page_nbr'] = $page_nbr;

$request = new UserAccountsService();

$request->displayUserAccounts($page_nbr);