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
			<h2> Dictionary Module </h2>
			<img src="<?= $img.'/staticViewDictionaryModule.jpg' ?>"
				 alt='staticViewDictionaryModule'>
		</section>	
		<?php include(dirname(__FILE__,2).'/footerTemplate.php') ?>
	</body>
</html>