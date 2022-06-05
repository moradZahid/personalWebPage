<?php
include_once(dirname(__FILE__).'/UserAccount.class.php');
include_once(dirname(__FILE__).'/controllerUserAccountHandlerFunctions.php');

class UserAccountsService
{
	/**
	 * getUserAccountList	: Convert raw data from the users_list table into a list of
	 *						  UserAccount objects
	 *
	 *						: param : $data : array of array of string
	 *
	 *						: return: array of UserAccount objects
	 */
	private function getUserAccountList($data)
	{
        if (isset($data))
        {
            foreach($data as $elt)
            {
                $user_account = new UserAccount($elt['login'],
                                                $elt['email'],
                                                $elt['password'],
                                                $elt['user_id']);

                $user_account_list[] = $user_account;
            }
            return $user_account_list;
        }
        return [];
	}

	/**
	 * displayUserAccounts	: display the user informations for modification
	 *
	 *					 	: param : $page_nbr	: integer
	 */
	public function displayUserAccounts($page_nbr)
	{
       
	    $data = [];
		if ($_SESSION['login'] == 'admin')
		{
            $offset = get_offset($page_nbr);
		    $nbr = get_nbr_accounts_to_display($page_nbr);
		    include_once(dirname(__FILE__,3).'/model/userAccountHandler/getSomeUserAccounts.php');	
            
            $user_account_list = $this->getUserAccountList($data);
            if ($_SESSION['lang'] == 'english')
            {
                include(dirname(__FILE__,3).'/view/userAccountHandler/manageUserAccountsAdminEnglishTemplate.php');
            } 
            else 
            {
                include(dirname(__FILE__,3).'/view/userAccountHandler/manageUserAccountsAdminFrenchTemplate.php');
            }
		}
		else
		{
            $user_id = $_SESSION['user_id'];
			include_once(dirname(__FILE__,3).'/model/userAccountHandler/getOneUserAccount.php');
            $userAccount = get_user_account($data);
            if (isset($userAccount))
            {
                if ($_SESSION['lang'] == 'english')
                {
                        include(dirname(__FILE__,3).'/view/userAccountHandler/manageUserAccountsEnglishTemplate.php');
                } 
                else 
                {
                        include(dirname(__FILE__,3).'/view/userAccountHandler/manageUserAccountsFrenchTemplate.php');
                }
            }
		}
        
	}
}
