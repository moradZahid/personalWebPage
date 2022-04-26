<?php
include_once(dirname(__FILE__).'/viewDictionaryHandlerFunctions.php');
$url = $_SESSION['index'];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> admin  </title>
	</head>

	<body>
		<h1>Administrative Page</h1>
		<h2>Manage Entries Services</h2>
		<p><?php
		  echo $_SESSION['msg'];
		  $_SESSION['msg'] = NULL;
	  	?></p><br>
		<p><a href="<?= $url.'/controller/frontalController.php?from=manage entries services'?>">return to the main page </a></p>
		<?php
		foreach($entries_list as $entry)
		{
			display_entry($entry);
		}
		$this->displayAvailableLetters();
		$this->displayAvailablePages($letter);
		?>
	  <form method="post" action="<?= $url.'/controller/dictionaryHandler/addEntriesController.php' ?>">
			<p><label for="french">French expression</label>
				<input type="text" name="french" id="french">
				- - -
				<label for="english">English expression</label>
				<input type="text" name="english" id="english">
			</p>
			<input type="hidden" name="method" value="manually">
			<p><input type="submit" value="submit">
		</form>
	</body>
</html>
