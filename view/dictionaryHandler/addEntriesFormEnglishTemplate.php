<form method='post'
      action="<?= $url.'/controller/dictionaryHandler/addEntriesController.php'?>"
      enctype='multipart/form-data'>
	<p>
        <input type="radio" name="method" value="file" id="file">
		<label for="file">Add entries by the following file</label>
    </p>
	<p>
        <label for='file_name'>File (file size < 50ko): </label>
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
		<label for="manually">add an entry manually</label>
    </p>
	<p>
        <label for="french">French expression</label>
		<input type="text" name="french" id="french">
		
		<label for="english"> English expression</label>
		<input type="text" name="english" id="english">
	</p>
    <br>
	<p><input type="submit" value="Submit"></p>
</form>