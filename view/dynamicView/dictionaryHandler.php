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
			<h2> Dictionary Handler Module</h2>
			<h3>  Add Entries Controller </h3>
			<img src="<?= $img.'/dynamicViewAddEntriesController.jpg' ?>"
			     alt='dynamicViewAddEntriesController'>
			<h3>  Modify Entries Controller </h3>
			<img src="<?= $img.'/dynamicViewModifyEntriesController.jpg' ?>"
			     alt='dynamicViewModifyEntriesController'>
			<h3>  Delete Entries Controller </h3>
			<img src="<?= $img.'/dynamicViewDeleteEntriesController.jpg' ?>"
			     alt='dynamicViewDeletedEntriesController'>
		</section>	
		<?php include(dirname(__FILE__,2).'/footerTemplate.php') ?>
	</body>
</html>