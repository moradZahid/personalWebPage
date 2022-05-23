<?php 
// set $url, $fonts, $msg,
include(dirname(__FILE__).'/setCreateUserAccountVariables.php');
?>

<!DOCTYPE html>
<html>
	<!-- head -->
		<?php include(dirname(__FILE__).'/createUserAccountHead.php'); ?>
	

	<body>
		<!-- header -->
		<?php include(dirname(__FILE__,2).'/headerTemplate.php') ?>
		<main>
			<h1>Inscription</h1>
			
			<div id="main-container">
                <div id="secondary-container">
                    <!-- form -->
                    <?php include(dirname(__FILE__).'/createUserAccountForm-Template.php') ?>
                    <div id="captcha">
                        <img alt="Image de la captcha" id="imgCaptcha">
                        <button>Renouveler</boutton>
                    </div>
                    <p class="error"><?= $msg ?></p>
                <div>
			</div>
		</main>
		<!-- footer -->
		<?php include(dirname(__FILE__,2).'/footerTemplate.php'); ?>
		
		<?php $_SESSION['msg'] = NULL; ?>
	</body>
</html>