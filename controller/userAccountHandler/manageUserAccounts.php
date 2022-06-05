<?php
check_permission();


global $ACCOUNTS_PER_PAGE;

$ACCOUNTS_PER_PAGE = $_SESSION['nbr_accounts_per_page'];


/************************************* Check for errors ***********************/

// instanciation of $page_nbr
include(dirname(__FILE__).'/manageUserAccountsCheckForErrors.php');


/************************************* Display list of entries ****************/

$_SESSION['accounts_page_nbr'] = $page_nbr;

$request = new UserAccountsService();

$request->displayUserAccounts($page_nbr);