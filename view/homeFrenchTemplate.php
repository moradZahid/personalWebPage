<?php 
// set $url, $msg, $result and $last_result
include(dirname(__FILE__).'/setHomeVariables.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> home </title>
		<link rel="stylesheet" href="<?=$url.'/view/homeStyle.css'?>"> 
	</head>
	
	<body>
		<?php include(dirname(__FILE__).'/headerTemplate.php') ?>
		<?php include(dirname(__FILE__).'/changeLang/changeLangFrenchTemplate.php') ?>
		<section>
			<h1>Dictionnaire français/anglais de termes mathématiques</h1>
			
			<div id='block1'>
				<!-- display the form -->
				<?php include(dirname(__FILE__).'/homeFrenchForm-Template.php') ?>
			</div>
				
			<div id='block2'>
				<span class='no_disp'>Terme à traduire :</span>
				<span id="result"><?= $result ?></span>
				<span id="error"><?= $msg ?></span>
			</div>
			
			<div id='block3'>
				<?php include(dirname(__FILE__).'/contributionFrenchTemplate.php') ?>
				<?php include(dirname(__FILE__).'/authorFrenchTemplate.php') ?>
			</div>
		</section>
		<?php 
		include(dirname(__FILE__).'/footerTemplate.php'); 
		$_SESSION['msg'] = NULL;			
		?>
	</body>
</html>
