<?php 
session_start();
$url = $_SESSION['index'];
$img = $_SESSION['image'];
?>

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
			<h2> Authorisation System Module </h2>
			<img src="<?= $img.'/staticViewAuthorisationSystemModule.jpg' ?>"
				 alt='staticViewAuthorisationSystemModule'>
		</section>	
		<?php include(dirname(__FILE__,2).'/footerTemplate.php') ?>
	</body>
</html>