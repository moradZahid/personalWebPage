<form method='post'
      action="<?= $url_action ?>" >
    <label for='french'>Français :</label>
    <input type="text" name="french" id="french"
	       value="<?php echo $entry->getFrench() ?>" >
    <label for='english'>Anglais :</label>
	<input type="text" name="english" id="english"
		   value="<?php echo $entry->getEnglish() ?>" >
    
    <input type="submit" value="Modifier" id="modify">
    <a href="<?= $url.'/controller/frontalController.php?from=manageEntries'?>"> 
        <input type="button" value="Annuler" id="cancel">
    </a>
</form>