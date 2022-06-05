<form method="post"
	  action="<?= $url.'/controller/dictionary/dictionaryController.php'?>"
	  id="translation-form">

	<label for="expression">Term to translate :</label>
	<input type="text" name="expression" id="expression"
		   value="<?=$last_expr?>">

	<div id="language">
		<span id="in">in</span>
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

	<input type="submit" value="Translate" id="submit">
	<span id="result"><?= $result ?></span>
</form>