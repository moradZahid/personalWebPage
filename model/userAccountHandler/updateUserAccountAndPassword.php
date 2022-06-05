<?php
// connection to the database
include($_SESSION['db']);

try
{
	$prep = $db->prepare('UPDATE users_list
						  SET login=:login, email=:email, password=:password
						  WHERE user_id=:user_id'); 
	
	$prep->execute(array( 
        'login' => $userAccount->getLogin(),
        'password' => password_hash(
            $userAccount->getPassword(),
            NULL),
        'email' => $userAccount->getEmail(),        
		'user_id' => $userAccount->getUserId()));
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