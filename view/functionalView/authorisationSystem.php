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
			<h2> Authorisation System Module</h2>
			<h3> System </h3>
			<p> Authorisation System<p>
			<h3> Actors</h3>
			<p>Primary actor: Dictionary Manager as Manager<br>
				Secondary actor: User </p>
			<h3> Use Case Diagram </h3>
			<img src="<?= $img.'/functionalViewAuthorisationSystemModuleUseCaseDiagram.jpg' ?>" 
			     alt='functionalViewAuthorisationSystemModuleUseCaseDiagram'>
			<h3> Request Authorisation </h3>
			<p> Give the authorisation to the secondary actor to use a service provided by 
				the Dictionary Manager.   
			</p>
			<img src="<?= $img.'/functionalViewAuthorisationSystemModuleAuthorisationQuery.jpg' ?>"
			     alt='functionalViewAuthorisationSystemModuleAuthorisationQuery'>
		</section>	
		<?php include(dirname(__FILE__,2).'/footerTemplate.php') ?>
	</body>
</html>