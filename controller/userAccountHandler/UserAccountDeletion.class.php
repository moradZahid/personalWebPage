<?php

include_once(dirname(__FILE__).'/UserAccount.class.php');

class UserAccountDeletion {
    private $userId;
    

    public function __construct($user_id)
    {
        $this->userId = $user_id;
    }


    /**
     * checkPage : check if the page number is still valid
     */
    private function checkPage()
    {
        global $ACCOUNTS_PER_PAGE;

        $ACCOUNTS_PER_PAGE = $_SESSION['nbr_accounts_per_page'];
        $page_nbr = $_SESSION['accounts_page_nbr'];
        if (!check_validity_page_nbr($page_nbr))
        {
            $_SESSION['accounts_page_nbr'] = get_total_page_nbr();
        }
    }



    /**
     *  execute : delete the user account 
     */
    public function execute() 
    {
        include(dirname(__FILE__,3).'/model/userAccountHandler/deleteUserAccount.php');
        if($_SESSION['login'] == 'admin')
        {
            $this->checkPage();

            if ($_SESSION['lang'] == 'english')
            {
                $_SESSION['success'] = 'User account deleted.';
            }
            else
            {
                $_SESSION['success'] = 'Compte utilisateur supprimé.';
            }
            $url = $_SESSION['index'];
            $url .= '/controller/frontalController.php?from=';
            $url .= 'manageUserAccounts';
            header('Location:'.$url);
        }
        else
        {
            //logout
            include(dirname(__FILE__,2).'/authorisationSystem/logout.php');
        }
    }
}