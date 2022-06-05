<form method="post"
	  action="<?= $url.'/controller/userAccountHandler/createUserAccountController.php'?>"
	  class="userAccount-form-CUA">

	<label for="login">Login :</label>
	<input type="text" name="login" id="login"
		   value="<?= $login ?>">
    
    <label for="password1">Mot de passe :</label>
	<input type="password" name="password1" id="password1"
		   value="<?= $password1 ?>">

    <label for="password2">Réentrez le mot de passe :</label>
	<input type="password" name="password2" id="password2"
		   value="<?= $password2 ?>">

    <label for="email">E-mail :</label>
	<input type="text" name="email" id="email"
		   value="<?= $email ?>">

    <label for="code">Entrez le code comme il apparait :</label>
	<input type="text" name="code" id="code"
		   value="<?= $code ?>">

    <input type="hidden" name="captcha_nbr" id="captcha_nbr">

    <input type="submit" value="Envoyer" id="submit">
</form>
