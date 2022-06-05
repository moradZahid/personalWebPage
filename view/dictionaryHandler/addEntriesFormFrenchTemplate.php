<form method='post'
      action="<?= $url.'/controller/dictionaryHandler/addEntriesController.php'?>"
      enctype='multipart/form-data'>
	<p>
        <input type="radio" name="method" value="file" id="file">
		<label for="file">Ajoutez des entrées avec un fichier</label>
    </p>
	<p>
        <label for='file_name'>Fichier (taille < 50ko): </label>
		<input type='file' name="data_file" id="file_name" size='50000'>
    </p>
	<p>
        <input type="radio" name="modality" value="eng:fr" id="eng:fr">
		<label for="eng:fr">eng:fr</label><br>
		<input type="radio" name="modality" value="fr:eng" id="fr:eng">
		<label for="fr:eng">fr:eng</label>
    </p>
    <br>
	<p>
        <input type="radio" name="method" value="manually" id="manually">
		<label for="manually">Ajouter manuellement une entrée</label>
    </p>
	<p>
        <label for="french">Expression en français</label>
		<input type="text" name="french" id="french">
		
		<label for="english"> Expression en anglais</label>
		<input type="text" name="english" id="english">
	</p>
    <br>
	<p><input type="submit" value="Envoyer"></p>
</form>