<form method="post"
	  action="<?= $url.'/controller/authorisationSystem/authenticationController.php'?>"
	  class="authentication-form">

	<label for="login">Login :</label>
	<input type="text" name="login" id="login"
		   value="<?= $login ?>">
    
    <label for="password">Mot de passe :</label>
	<input type="password" name="password" id="password"
		   value="<?= $password ?>">
		   
    <input type="submit" value="Envoyer" id="submit">
</form>