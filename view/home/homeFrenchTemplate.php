<?php 
include(dirname(__FILE__).'/viewHomeFunctions.php');

// set $url, $fonts, $msg, $success, $result, $last_result and $login
include(dirname(__FILE__).'/setHomeVariables.php');
?>

<!DOCTYPE html>
<html>
	<!-- head -->
		<?php include(dirname(__FILE__).'/head.php'); ?>
	

	<body>
		<!-- header -->
		<?php include(dirname(__FILE__).choose_header()) ?>
		<main>
			<?php include(dirname(__FILE__,2).'/changeLang/changeLangFrenchTemplate.php') ?>
			<h1>Dictionnaire français-anglais de termes mathématiques</h1>
			
			<div id="main-container">
					<!-- form -->
					<?php include(dirname(__FILE__).'/homeFrenchForm-Template.php') ?>
					<p class="error"><?= $msg ?></p>
					<p class="success"><?= $success ?></p>

					<!-- article -->
					<?php include(dirname(__FILE__).choose_contribution()) ?>
					<!-- aside -->
					<?php include(dirname(__FILE__).'/authorFrenchTemplate.php') ?>
			</div>
		</main>
		<!-- footer -->
		<?php include(dirname(__FILE__).'/footerTemplate.php'); ?>
		
		<?php $_SESSION['msg'] = NULL; 
		 	  $_SESSION['success'] = NULL; ?>
	</body>
</html>
