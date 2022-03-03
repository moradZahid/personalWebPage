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
		<h1>Administrative page</h1>
		<h2><?php echo $action.' entries' ?></h2>
		<p><a href="<?= $url.'/controller/frontalController.php?from=admin services'?>">return to the main page </a></p>
		<?php 
		foreach($stored_entries_list as $entry)
		{
			display_entry($entry,$action);
		}
		?>
		
	</body>
</html>