<form method="post"
	  action="<?= $url.'/controller/createUserAccountController.php'?>"
	  id="userAccount-form">

	<label for="login">Login :</label>
	<input type="text" name="login" id="login"
		   value="<?= $login ?>">
    
    <label for="password1">Password :</label>
	<input type="text" name="password1" id="password1"
		   value="<?= $password1 ?>">

    <label for="password2">Rewrite the password :</label>
	<input type="text" name="password2" id="password2"
		   value="<?= $password2 ?>">

    <label for="email">E-mail :</label>
	<input type="text" name="email" id="email"
		   value="<?= $email ?>">

    <label for="code">Enter the code as it appears :</label>
	<input type="text" name="code" id="code">
    <input type="hidden" name="captcha_nbr">

    <input type="submit" value="submit" id="submit">
</form>
