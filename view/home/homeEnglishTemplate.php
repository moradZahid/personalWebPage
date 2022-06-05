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
			<?php include(dirname(__FILE__,2).'/changeLang/changeLangEnglishTemplate.php') ?>
			<h1>English-French Dictionary of Mathematical Terms</h1>
			
			<div id="main-container">
					<!-- form -->
					<?php include(dirname(__FILE__).'/homeEnglishForm-Template.php') ?>
					<p class="error"><?= $msg ?></p>
					<p class="success"><?= $success ?></p>

					<!-- article -->
					<?php include(dirname(__FILE__).choose_contribution()) ?>
					<!-- aside -->
					<?php include(dirname(__FILE__).'/authorEnglishTemplate.php') ?>
			</div>
		</main>
		<!-- footer -->
		<?php include(dirname(__FILE__).'/footerTemplate.php'); ?>

		<?php $_SESSION['msg'] = NULL; 
			  $_SESSION['success'] = NULL; ?>
	</body>
</html>