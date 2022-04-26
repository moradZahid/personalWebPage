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
		<?php
			$url_action = $url.'/controller/dictionaryHandler/modifyOneEntryController.php';
			$url_action .= '?french_id='.$entry->getFrenchId();
			$url_action .= '&english_id='.$entry->getEnglishId();
		?>
		<form method='post'
		      action="<?= $url_action ?>" >
			<p><label for='french'>french</label>
				<input type="text" name="french" id="french"
				 value="<?php echo $entry->getFrench() ?>" ></p>

			<p><label for='english'>english</label>
				<input type="text" name="english" id="english"
				 value="<?php echo $entry->getEnglish() ?>" ></p>

			<p><input type="submit" value="submit">
		</form>
		<a href="<?= $url.'/controller/frontalController.php?from=manage entries services'?>">
			return to the administrative page
		</a>
	</body>
</html>
