<?php $url = $_SESSION['index']; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Dynamic view </title>
		<link rel="stylesheet" href="<?= $url.'/view/dynamicView/dynamicViewStyle.css'?>">
	</head>
	
	<body>
		<?php include(dirname(__FILE__,2).'/headerTemplate.php') ?>
		<section>
			<h1> Dynamic View </h1>
			<nav>
				<ul>
					<li><p><a href="<?= $url.'/view/dynamicView/frontalController.php'?>">
						Frontal controller</a></p></li>
					<li><p><a href="<?= $url.'/view/dynamicView/dictionary.php'?>">
						Dictionary module</a></p></li>
					<li><p><a href="<?= $url.'/view/dynamicView/authorisationSystem.php'?>">
						Authorisation System module</a></p></li>
					<li><p><a href="<?= $url.'/view/dynamicView/dictionaryHandler.php'?>">
						Dictionary Handler module</a></p></li>
				</ul>
			</nav>
		</section>	
		<?php include(dirname(__FILE__,2).'/footerTemplate.php') ?>
	</body>
</html>