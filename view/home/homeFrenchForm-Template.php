<form method="post"
	action="<?= $url.'/controller/dictionary/dictionaryController.php'?>"
	id="translation-form"> 

	<label for="expression"><p>Terme à traduire :</p></label>
	<input type="text" name="expression" id="expression"
		   value="<?=$last_expr?>">
	
	<div id="language">
		<span id="in">en</span> 
		<input type="radio" name="language" value="french" id="french"
			<?php if ($_SESSION['last_lang_trans'] == 'french')
			{
				echo 'checked';
			}?> >
		<label for="french">français</label><br>
		<input type="radio" name="language" value="english" id="english"
			<?php if ($_SESSION['last_lang_trans'] == 'english')
			{
				echo 'checked';
			}?> >
		<label for="english">anglais</label>
	</div>
	<input type="submit" value="traduire" id="submit">
	<span id="result"><?= $result ?></span>
</form>
