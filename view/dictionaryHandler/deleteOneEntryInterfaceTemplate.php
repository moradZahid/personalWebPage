<?php $url = $_SESSION['index']; 
$url_confirmation = $url.'/controller/dictionaryHandler/deleteOneEntryController.php';
$url_confirmation .= '?french_id='.$entry->getFrenchId();
$url_confirmation .= '&english_id='.$entry->getEnglishId();
$url_confirmation .= '&confirmation=confirmed';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> admin index </title>
	</head>

	<body>
		<h1>Administrative page</h1>
		<h2>Delete One Term</h2>
		<p>
            <?= $entry->getFrench() ?> : <?= $entry->getEnglish() ?>
        </p> 
		<p>
            Are you sure you want to delete this entry? 
            <a href="<?= $url_confirmation ?>"> yes </a> /
            <a href="<?= $url.'/controller/frontalController.php?from=admin services'?>">
             no </a>
        </p> 
		<a href="<?= $url.'/controller/frontalController.php?from=admin services'?>">
			return to the administrative page
		</a>
	</body>
</html>
