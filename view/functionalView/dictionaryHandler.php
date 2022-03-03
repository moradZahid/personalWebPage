<?php 
session_start();
$url = $_SESSION['index'];
$img = $_SESSION['image'];
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Dictionary Handler module </title>
		<link rel="stylesheet" href="<?= $url.'/view/functionalView/functionalViewStyle.css'?>">
	</head>
	
	<body>
		<?php include(dirname(__FILE__,2).'/headerTemplate.php') ?>
		<section>
			<h1> Functional View </h1>
			<h2> Dictionary Handler Module</h2>
			<h3> System </h3>
			<p> Dictionary Handler<p>
			<h3> Actors</h3>
			<p>Primary actor: Registred User, Administrator as User<br>
				Secondary actor: Authorisation System </p>
			<h3> Use Case Diagram </h3>
			<img src="<?= $img.'/functionalViewDictionaryHandlerModuleUseCaseDiagram.jpg' ?>" 
			     alt='functionalViewDictionaryHandlerModuleUseCaseDiagram'>
			<h3> Add Entries </h3>
			<p> Add entries contained in a file. If the modality is "fr:eng", the file has to be 
				in the following form:
			</p>
			<table>
				<tr> 
					<td>"french_expression_1"</td>
					<td>:</td>
					<td>"english_expression_1"</td>
				</tr>
				<tr> 
					<td>"french_expression_2"</td>
					<td>:</td>
					<td>"english_expression_2"</td>
				</tr>
				<tr> 
					<td>...</td>
					<td> </td>
					<td>...</td>
				</tr>
			</table>	
			<p>If the modality is "eng:fr", the file has to be 
				in the following form:</p>
			</p>
			<table>
				<tr> 
					<td>"english_expression_1"</td>
					<td>:</td>
					<td>"french_expression_1"</td>
				</tr>
				<tr> 
					<td>"english_expression_2"</td>
					<td>:</td>
					<td>"french_expression_2"</td>
				</tr>
				<tr> 
					<td>...</td>
					<td> </td>
					<td>...</td>
				</tr>
			</table>
			<img src="<?= $img.'/functionalViewDictionaryHandlerModuleAddEntries.jpg' ?>" 
			     alt='functionalViewDictionaryHandlerModuleAddEntries'>
			<h3>Modify Entries</h3>
			<p>Modify entries in the dictionary table</p>
			<img src="<?= $img.'/functionalViewDictionaryHandlerModuleModifyEntries.jpg' ?>"
			     alt='functionalViewDictionaryHandlerModuleModifyEntries'>
			<h3>Delete Entries</h3>
			<p>Deletes entries in the dictionary table</p>
			<img src="<?= $img.'/functionalViewDictionaryHandlerModuleDeleteEntries.jpg' ?>" 
			     alt='functionalViewDictionaryHandlerModuleDeleteEntries'>
		</section>	
		<?php include(dirname(__FILE__,2).'/footerTemplate.php') ?>
	</body>
</html>