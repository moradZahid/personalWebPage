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
		<link rel="stylesheet" href="<?= $url.'/view/dynamicView/dynamicViewStyle.css' ?>"> 
	</head>
	
	<body>
		<?php include(dirname(__FILE__,2).'/headerTemplate.php') ?>
		<section>
			<h1> Dynamic View </h1>
			<h2> Frontal Controller</h2>
			<img src="<?= $img.'/dynamicViewFrontalController.jpg' ?>"
			     alt='dynamicViewFrontalController'>
		</section>	
		<?php include(dirname(__FILE__,2).'/footerTemplate.php') ?>
	</body>
</html>