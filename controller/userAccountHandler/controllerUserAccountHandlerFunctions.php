<?php
include_once(dirname(__FILE__,3).'/model/userAccountHandler/modelUserAccountHandlerFunctions.php');

/**
 * getUserAccount	: Convert raw data from the users_list table into a 
 *				      UserAccount object
 *
 *					: param : $elt : array of string
 *
 *					: return: UserAccount object or NULL if $elt is not set
 */
function get_user_account($elt)
{
	if (isset($elt))
    {
        $user_account = new UserAccount($elt['login'],
                                        $elt['email'],
                                        $elt['password'],
                                        $elt['user_id']);
        return $user_account;
    }
    return NULL;
}

/**
 *  checkEmail :  Check for valid email address
 */
function checkEmail($email) 
{
    $email = filter_var($email,FILTER_VALIDATE_EMAIL);
    if ($email === false) {
        throw new InvalidEmail();
    }
    return true;
}

/**
 *  checkPassword :  Check for valid password
 */
function checkPassword($password1,$password2) 
{
    if ($password1 != $password2)
    {
        throw new InvalidPassword();
    }
    return true;
}


/**
 * check_validity_page_nbr	: return 0 if the parameter is not a valid page number 
 *
 *						    : param : $page		: integer
 *
 *						    : return: boolean
 */
function check_validity_page_nbr($page_nbr)
{
    if ($page_nbr < 1)
    {
        return false;
    }
    $total_page_nbr = get_total_page_nbr();

    if ($page_nbr > $total_page_nbr)
    {
        return false;
    }
    return true;
}

/**
 * get_offset	: return the offset of the first item to display
 *
 *				: param : $page_nbr	: integer
 *
 *				: return: integer
 */
function get_offset($page_nbr)
{
  global $ACCOUNTS_PER_PAGE;

  return ($page_nbr - 1) * $ACCOUNTS_PER_PAGE;
}

/**
 * get_nbr_accounts_to_display : return the number of item to display
 *
 *							  : param : $page_nbr : integer
 *
 *							  : return: integer
 */
 function get_nbr_accounts_to_display($page_nbr)
 {
	global $ACCOUNTS_PER_PAGE;

	$account_nbr = get_account_nbr();

	$remainder = $account_nbr % $ACCOUNTS_PER_PAGE;
	$last_page = ceil($account_nbr / $ACCOUNTS_PER_PAGE);

	if ($remainder == 0)
	{
		return $ACCOUNTS_PER_PAGE;
	}
	if ($page_nbr == $last_page)
	{
		return $remainder;
	}
	return $ACCOUNTS_PER_PAGE;
 }

 /**
  * get_total_page_nbr : get the total number of pages of user accounts
  *
  *                    : return : integer
  */
function get_total_page_nbr()
{
    global $ACCOUNTS_PER_PAGE;
    
    $account_nbr = get_account_nbr();
   
    return ceil($account_nbr / $ACCOUNTS_PER_PAGE);
}