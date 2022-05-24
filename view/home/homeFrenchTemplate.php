<?php 
// set $url, $fonts, $msg, $result and $last_result
include(dirname(__FILE__).'/setHomeVariables.php');
?>

<!DOCTYPE html>
<html>
	<!-- head -->
		<?php include(dirname(__FILE__).'/head.php'); ?>
	

	<body>
		<!-- header -->
		<?php include(dirname(__FILE__).'/headerFrenchTemplate.php') ?>
		<main>
			<?php include(dirname(__FILE__,2).'/changeLang/changeLangFrenchTemplate.php') ?>
			<h1>Dictionnaire français-anglais de termes mathématiques</h1>
			
			<div id="main-container">
					<!-- form -->
					<?php include(dirname(__FILE__).'/homeFrenchForm-Template.php') ?>
					<p class="error"><?= $msg ?></p>

					<!-- article -->
					<?php include(dirname(__FILE__).'/contributionFrenchTemplate.php') ?>
					<!-- aside -->
					<?php include(dirname(__FILE__).'/authorFrenchTemplate.php') ?>
			</div>
		</main>
		<!-- footer -->
		<?php include(dirname(__FILE__).'/footerTemplate.php'); ?>
		
		<?php $_SESSION['msg'] = NULL; ?>
	</body>
</html>
