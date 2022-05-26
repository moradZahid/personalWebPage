<?php 
// set $url, $fonts, $img, $msg, $login, $password1, $password2, $email
include(dirname(__FILE__).'/setCreateUserAccountVariables.php');
include(dirname(__FILE__).'/viewUserAccountHandlerFunctions.php');
?>

<!DOCTYPE html>
<html>
	<!-- head -->
		<?php include(dirname(__FILE__).'/createUserAccountHead.php'); ?>
	
	<body>
		<!-- header -->
		<?php include(dirname(__FILE__,2).'/home/headerFrenchTemplate.php') ?>
		<main>
			<?php include(dirname(__FILE__,2).'/changeLang/changeLangFrenchTemplate.php') ?>
			<h1>Inscription</h1>
			
			<div id="main-container">
                <div id="secondary-container">
                    <!-- form -->
                    <?php include(dirname(__FILE__).'/createUserAccountFormFrench-Template.php') ?>
                    <div id="captcha">
                        <?php imageCaptchaGallery() ?>
                        <button>Renouveler</boutton>
                    </div>
                    <p class="error"><?= $msg ?></p>
                <div>
			</div>
		</main>
		<!-- footer -->
		<?php include(dirname(__FILE__,2).'/home/footerTemplate.php'); ?>
		
		<?php $_SESSION['msg'] = NULL; ?>
	</body>
</html>