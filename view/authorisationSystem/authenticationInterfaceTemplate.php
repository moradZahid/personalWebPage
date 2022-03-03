<?php $url = $_SESSION['index']; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> authentication interface </title>
	</head>
	
	<body>
		<h1>Authentication page</h1>
		
		<form method='post'
			  action="<?= $url.'/controller/frontalController.php?from=authentication interface'?>">
			  <p><label for='login'>login : </login>
			     <input type='text' name='login' id='login'>
			  </p>   
			  <p><label for='password'>password : </login>
			     <input type='password' name='password' id='password'>
			  </p>
			  <p><input type='submit' value='submit'></p>
		</form>
		
		<form method='post'
			  action="<?= $url.'/controller/frontalController.php'?>">
			  <p><input type='submit' value='cancel'></p>
		</form>
	</body>
</html>