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
		<?php include(dirname(__FILE__,2).'/home/headerLoggedFrenchTemplate.php') ?>
		<main>
			<?php include(dirname(__FILE__,2).'/changeLang/changeLangFrenchTemplate.php') ?>
			<h1>Gestion des informations personnelles</h1>
			
			<div class="main-container">
                <div class="secondary-container-CUA">
                    <!-- form -->
                    <?php include(dirname(__FILE__).'/deleteOneUserAccountsFormFrench-Template.php') ?>

                    <p id="confirmation" class="delete">Voulez vous vraiment supprimer ce compte?</p>
                <div>
			</div>
		</main>
		<!-- footer -->
		<?php include(dirname(__FILE__,2).'/home/footerTemplate.php'); ?>
		
		<?php $_SESSION['msg'] = NULL; ?>
	</body>
</html>