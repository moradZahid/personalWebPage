<?php $url = $_SESSION['index']; ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Static view </title>
		<link rel="stylesheet" href="<?= $url.'/view/staticView/staticViewStyle.css'?>">
	</head>
	
	<body>
		<?php include(dirname(__FILE__,2).'/headerTemplate.php') ?>
		<section>
			<h1> Static View </h1>
			<nav>
				<ul>
					<li><p><a href="<?= $url.'/view/staticView/dictionary.php'?>">
						Dictionary module</a></p></li>
					<li><p><a href="<?= $url.'/view/staticView/authorisationSystem.php'?>">
						Authorisation System module</a></p></li>
					<li><p><a href="<?= $url.'/view/staticView/dictionaryHandler.php'?>">
						Dictionary Handler module</a></p></li>
				</ul>
			</nav>
		</section>	
		<?php include(dirname(__FILE__,2).'/footerTemplate.php') ?>
	</body>
</html>