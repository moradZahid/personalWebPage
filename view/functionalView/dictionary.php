<?php 
session_start();
$url = $_SESSION['index']; 
$img = $_SESSION['image'];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Functional view </title>
		<link rel="stylesheet" href="<?= $url.'/view/functionalView/functionalViewStyle.css'?>">
	</head>
	
	<body>
		<?php include(dirname(__FILE__,2).'/headerTemplate.php') ?>
		<section>
			<h1> Functional View </h1>
			<h2> Dictionary Module</h2>
			<h3> System </h3>
			<p> Dictionary<p>
			<h3> Actors</h3>
			<p>Primary actor : User</p>
			<h3> Use Case Diagram </h3>
			<img src="<?= $img.'/functionalViewDictionaryModuleUseCaseDiagram.jpg' ?>"
				 alt='functionalViewDictionaryModuleUseCaseDiagram'>
			<h3> Translation Query </h3>
			<p> The query is compound of an expression and a language to translate (French or English).
				The user send a query and the system treats it.
			</p>	
			<img src="<?= $img.'/functionalViewDictionaryModuleTranslationQuery.jpg' ?>" 
				 alt='functionalViewDictionaryModuleTranslationQuery'>
		</section>	
		<?php include(dirname(__FILE__,2).'/footerTemplate.php') ?>
	</body>
</html>