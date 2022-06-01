<?php
include_once(dirname(__FILE__).'/viewDictionaryHandlerFunctions.php');

// set $url, $fonts, $msg and $success
include(dirname(__FILE__).'/setManageEntriesVariables.php');
?>

<!DOCTYPE html>
<html>
	<!-- head -->
		<?php include(dirname(__FILE__).'/manageEntriesHead.php'); ?>
	
	<body>
		<!-- header -->
		<?php include(dirname(__FILE__,2).'/home/headerLoggedEnglishTemplate.php') ?>
		<main>
			<?php include(dirname(__FILE__,2).'/changeLang/changeLangEnglishTemplate.php') ?>
			<h1>Dictionary Entries Management</h1>
			
			<div class="main-container">
                <div class="secondary-container-ME">
                    <p class="error"><?= $msg ?></p>
                    <p class="success"><?= $success ?></p>
                    <div id="entriesTable">
                    	<?php include(dirname(__FILE__).'/entriesTableTemplate.php') ?>
					</div>
                    <?php include(dirname(__FILE__).'/addEntriesFormEnglishTemplate.php') ?>
                <div>
			</div>
		</main>
		<!-- footer -->
		<?php include(dirname(__FILE__,2).'/home/footerTemplate.php'); ?>
		
		<?php $_SESSION['msg'] = NULL; ?>
        <?php $_SESSION['success'] = NULL; ?>
	</body>
</html>