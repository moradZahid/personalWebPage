<?php 
// set $url, $fonts, $msg, $login
include(dirname(__FILE__).'/setManageUserAccountsVariables.php');
?>

<!DOCTYPE html>
<html>
	<!-- head -->
		<?php include(dirname(__FILE__).'/deleteOneUserAccountsHead.php'); ?>
	
	<body>
		<!-- header -->
		<?php include(dirname(__FILE__,2).'/home/headerLoggedEnglishTemplate.php') ?>
		<main>
			<?php include(dirname(__FILE__,2).'/changeLang/changeLangEnglishTemplate.php') ?>
			<h1>Manage Personal Information</h1>
			
			<div class="main-container">
                <div class="secondary-container-CUA">
                    <!-- form -->
                    <?php include(dirname(__FILE__).'/deleteOneUserAccountsFormEnglish-Template.php') ?>

                    <p id="confirmation" class="delete">Do you really want to delete this account?</p>
                <div>
			</div>
		</main>
		<!-- footer -->
		<?php include(dirname(__FILE__,2).'/home/footerTemplate.php'); ?>
		
		<?php $_SESSION['msg'] = NULL; ?>
	</body>
</html>