<?php
// set $url, $fonts and $login
include(dirname(__FILE__).'/setModifyOneEntryVariables.php');
?>

<!DOCTYPE html>
<html>
	<!-- head -->
		<?php include(dirname(__FILE__).'/modifyOneEntryHead.php'); ?>
	
	<body>
		<!-- header -->
		<?php include(dirname(__FILE__,2).'/home/headerLoggedEnglishTemplate.php') ?>
		<main>
			<?php include(dirname(__FILE__,2).'/changeLang/changeLangEnglishTemplate.php') ?>
			<h1>Dictionary Entries Management</h1>
			
			<div class="main-container">
                <div class="secondary-container-ME">
                    <?php
                        $url_action = $url.'/controller/dictionaryHandler/modifyOneEntryController.php';
                        $url_action .= '?french_id='.$entry->getFrenchId();
                        $url_action .= '&english_id='.$entry->getEnglishId();
                        
                        include(dirname(__FILE__).'/modifyOneEntryFormEnglishTemplate.php') ?>
                <div>
			</div>
		</main>
		<!-- footer -->
		<?php include(dirname(__FILE__,2).'/home/footerTemplate.php'); ?>
		
		<?php $_SESSION['msg'] = NULL; ?>
        <?php $_SESSION['success'] = NULL; ?>
	</body>
</html>