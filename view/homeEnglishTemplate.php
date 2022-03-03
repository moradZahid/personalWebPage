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
		<?php include(dirname(__FILE__).'/changeLang/changeLangEnglishTemplate.php') ?>
		<section>
			<h1>English-French Dictionary of Mathematical Terms</h1>
			
			<div id='block1'>
				<!-- display the form -->
				<?php include(dirname(__FILE__).'/homeEnglishForm-Template.php') ?>
			</div>
				
			<div id='block2'>
				<span class='no_disp'>Term to translate :</span>
				<span id="result"><?= $result ?></span>
				<span id="error"><?= $msg ?></span>
			</div>
			
			<div id='block3'>
				<?php include(dirname(__FILE__).'/contributionEnglishTemplate.php') ?>
				<?php include(dirname(__FILE__).'/authorEnglishTemplate.php') ?>
			</div>	
		</section>
		<?php 
		include(dirname(__FILE__).'/footerTemplate.php');
		$_SESSION['msg'] = NULL;
		?>
	</body>
</html>
