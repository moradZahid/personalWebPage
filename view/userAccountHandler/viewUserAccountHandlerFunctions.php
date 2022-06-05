<?php
$NUMBER_IMAGES = 10;

/**
 * imageCaptchaGallery : generate a gallery of captcha images
 */
function imageCaptchaGallery() {
    global $NUMBER_IMAGES;
    global $img;

    for ($i=1 ; $i <= $NUMBER_IMAGES ; $i++) {
        $name = 'captcha'.$i;
        $src = $img.'/captcha/'.$name.'.jpg';
        echo '<div id="'.$name.'" class="hidden">';
        echo '<img src="'.$src.'">';
        echo '</div>';
    }
}

/**
 * displayAvailablePages	: display all the page numbers 
 */
function display_available_pages()
{
    $total_pages = get_total_page_nbr();
    for ($i=0 ; $i < $total_pages ; $i++)
    {
        $url = $_SESSION['index'];
        $url .= '/controller/userAccountHandler/manageUserAccountsController.php';
        $url .= '?page='.($i+1);
        echo '<a href="'.$url.'">';
        echo '<div class="paging">';
        echo ' '.($i+1).' ';
        echo '</div></a>';
    }
}

/**
 * display_user_account	: display the user account given in parameter and a link to the controller which will either
 *				  	      modify or delete the user account
 *
 *					    : param	: $account 	: UserAccount object
 */
function display_user_account($account, $modify, $delete)
{
	echo '<tr>';
	echo '<td>'.$account->getLogin().' </td> ';
	echo '<td>'.$account->getEmail().' </td> ';

	//link to the modification controller
	$url = $_SESSION['index'];
	$url .= '/controller/userAccountHandler/modifyUserAccountController.php';
	$url .= '?user_id='.$account->getUserId();

	echo '<td><a href="'.$url.'">'.$modify.'</a></td> ';

  //link to the deletion controller
	$url = $_SESSION['index'];
	$url .= '/controller/userAccountHandler/deleteUserAccountController.php';
	$url .= '?user_id='.$account->getUserId();

	echo '<td><a href="'.$url.'" class="delete">'.$delete.'</a></td> ';
	echo '</tr>';
 }