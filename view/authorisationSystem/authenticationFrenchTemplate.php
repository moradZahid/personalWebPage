<?php
// set $url, $fonts, $msg, $login, $password
include(dirname(__FILE__).'/setAuthenticationVariables.php');
?>

<!DOCTYPE html>
<html>
	<!-- head -->
		<?php include(dirname(__FILE__).'/authenticationHead.php'); ?>
	
	<body>
		<!-- header -->
		<?php include(dirname(__FILE__,2).'/home/headerFrenchTemplate.php') ?>
		<main>
			<?php include(dirname(__FILE__,2).'/changeLang/changeLangFrenchTemplate.php') ?>
			<h1>Connection</h1>
			
			<div class="main-container">
                <div class="secondary-container-authent">
                    <!-- form -->
                    <?php include(dirname(__FILE__).'/authenticationFormFrench-Template.php') ?>

                    <p class="error"><?= $msg ?></p>
                <div>
			</div>
		</main>
		<!-- footer -->
		<?php include(dirname(__FILE__,2).'/home/footerTemplate.php'); ?>
		
		<?php $_SESSION['msg'] = NULL; ?>
	</body>
</html>