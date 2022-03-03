<form method="post" 
	  action="<?= $url.'/controller/frontalController.php?from=translation query'?>"> 
					
	<div id="expression">
		<label for="expression">Terme à traduire :</label> 
		<input type="text" name="expression" 
			   value="<?=$last_expr?>">
	</div>
					
	<label for="language">en</label>
	<div id="language">
		<input type="radio" name="language" value="french" 
			   <?php if ($_SESSION['last_lang_trans'] == 'french')
 			   		 {
			   		 	 echo 'checked';
			   		 }?> >
		<label for="french">français</label><br>
						
		<input type="radio" name="language" value="english"
			   <?php if ($_SESSION['last_lang_trans'] == 'english')
			   		 {
			   		 	 echo 'checked';
			   		 }?> >
		<label for="english">anglais</label>
	</div>
					
	<input type="submit" value="traduire">
				
</form>