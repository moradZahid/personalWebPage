<?php $url = $_SESSION['index']; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> admin index </title>
	</head>

	<body>
		<h1>Administrative page</h1>
		<h2>Modify One Term</h2>
		<form method='post'
		      action="<?= $url.'/controller/dictionaryHandler/modifyOneEntryController.php?entry_id='.$entry->getEntryId() ?>" >
			<p><label for='french'>french</label>
				<input type="text" name="french" id="french"
				 value="<?php echo $entry->getFrench() ?>" ></p>

			<p><label for='english'>english</label>
				<input type="text" name="english" id="english"
				 value="<?php echo $entry->getEnglish() ?>" ></p>

			<p><input type="submit" value="submit">
		</form>
		<a href="<?= $url.'/controller/frontalController.php?from=admin services'?>">return to the administrative page </a>
	</body>
</html>
