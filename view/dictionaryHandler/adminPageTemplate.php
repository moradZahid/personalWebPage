<?php $url = $_SESSION['index']; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> admin page </title>
	</head>
	
	<body>
		<h1>Administrative page</h1>
		<nav>
			<ul>
				<li><a href="<?= $url.'/controller/frontalController.php?from=add entries service'?>">Add entries</a>
				<li><a href="<?= $url.'/controller/dictionaryHandler/modifyEntriesController.php?letter=a&page=1'?>">Modify entries</a>
				<li><a href="<?= $url.'/controller/dictionaryHandler/deleteEntriesController.php?letter=a&page=1'?>">Delete entries</a>
			</ul>
		</nav>	
		<p>return to the <a href="<?= $url.'/controller/frontalController.php'?>">home page</a></p>
		<p><?=$_SESSION['msg'] ?></p>
		<?php $_SESSION['msg'] = NULL ?>
	</body>
</html>