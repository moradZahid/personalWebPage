<form method='post'
      action="<?= $url_action ?>" >
    <label for='french'>French :</label>
    <input type="text" name="french" id="french"
	       value="<?php echo $entry->getFrench() ?>" >
	<label for='english'>English :</label>
	<input type="text" name="english" id="english"
	 	   value="<?php echo $entry->getEnglish() ?>" >
			
	<input type="submit" value="Modify" id="modify">
    <a href="<?= $url.'/controller/frontalController.php?from=manageEntries'?>"> 
        <input type="button" value="Cancel" id="cancel">
    </a>
</form>