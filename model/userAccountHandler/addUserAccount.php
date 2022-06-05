<?php
// connection to the database
include($_SESSION['db']);

try
{
	$prep = $db->prepare('INSERT INTO users_list(login, password, email)
                          VALUES (:login, :password, :email)'); 
	
	$prep->execute(array( 
        'login' => $userAccount->getLogin(),
        'password' => password_hash(
            $userAccount->getPassword(),
            NULL),
        'email' => $userAccount->getEmail()        
    ));
}
catch(Exception $e)
{
	$_SESSION['result'] = NULL;
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'data base error: try later';
	}
	else
	{
		$_SESSION['msg'] = 'erreur de la base de donnée: réessayer plus tard';
	}
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php';
	header('Location:'.$url);
}



printf('ok');