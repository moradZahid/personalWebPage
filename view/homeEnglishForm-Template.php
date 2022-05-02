<form method="post"
	  action="<?= $url.'/controller/dictionary/dictionaryController.php'?>"> 

	<div id="expression">
		<label for="expression">Term to translate :</label>
		<input type="text" name="expression"
			   value="<?=$last_expr?>">
	</div>

	<label for="language">in</label>
	<div id="language">
		<input type="radio" name="language" value="french"
			   <?php if ($_SESSION['last_lang_trans'] == 'french')
 			   		 {
			   		 	 echo 'checked';
			   		 }?> >
		<label for="french">French</label><br>

		<input type="radio" name="language" value="english"
			   <?php if ($_SESSION['last_lang_trans'] == 'english')
			   		 {
			   		 	 echo 'checked';
			   		 }?> >
		<label for="english">English</label>
	</div>

	<input type="submit" value="traduire">

</form>
