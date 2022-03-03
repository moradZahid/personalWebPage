<?php 
session_start();
$url = $_SESSION['index'];
$img = $_SESSION['image'];
?>

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
			<h2> Authorisation System Module</h2>
			<h3>  Authorisation System Controller </h3>
			<img src="<?= $img.'/dynamicViewAuthorisationSystemController.jpg' ?>"
			     alt='dynamicViewAuthorisationSystemController'>
			<h3>  Authentication Controller </h3>
			<img src="<?= $img.'/dynamicViewAuthenticationController.jpg' ?>"
			     alt='dynamicViewAuthenticationController'>
		</section>	
		<?php include(dirname(__FILE__,2).'/footerTemplate.php') ?>
	</body>
</html>