<form method="post"
	  action="<?= $url.'/controller/userAccountHandler/modifyUserAccountController.php'?>">

	<label for="login">Login :</label>
	<input type="text" name="login" id="login"
		   value="<?= $userAccount->getLogin() ?>">
    
	<label for="email">E-mail :</label>
	<input type="text" name="email" id="email"
		   value="<?= $userAccount->getEmail() ?>">

	<p id="sub-cancel">
		<input type="submit" value="Modifier" id="submit">
		<a href="<?= $url.'/controller/frontalController.php?from=manageUserAccounts'?>">
			<input type="button" value="Annuler">
		</a>
	</p>
	<p class="btn" id="pswd-btn">Modifier le mot de passe</p>

    <label for="password1" class="hidden">Mot de passe :</label>
	<input type="password" name="password1" id="password1" class="hidden">

    <label for="password2" class="hidden">Réentrez le mot de passe :</label>
	<input type="password" name="password2" id="password2" class="hidden">   

	<input type="hidden" name="pswd-modified" id="pswd-modified" value="not-modified">
	<input type="hidden" name="user_id" value="<?= $userAccount->getUserId() ?>">
</form>
