<form method="post"
	  action="<?= $url.'/controller/userAccountHandler/deleteOneUserAccountController.php'?>">

	<p id="label-for-login">Login :</p>
	<p id="login">
		<?= $userAccount->getLogin() ?>
	</p>
    
	<p id="label-for-email">E-mail :</p>
	<p id="email">
		<?= $userAccount->getEmail() ?>
	</p>
	<p id="sub-cancel">
		<input type="submit" value="Supprimer" id="submit" class="delete">
		<a href="<?= $url.'/controller/frontalController.php?from=manageUserAccounts'?>">
			<input type="button" value="Annuler" class="cancel">
		</a>
	</p>

	<input type="hidden" name="user_id" value="<?= $userAccount->getUserId() ?>">
</form>
