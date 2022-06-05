<?php
include_once(dirname(__FILE__).'/viewDictionaryHandlerFunctions.php');

// set $url, $fonts, $msg, $login and $success
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
					<p id="message">
						<span class="error"><?= $msg ?></span>
						<span class="success"><?= $success ?></span>
					</p>
                    <div id="entriesTable">
						<table>
							<?php
								foreach($entries_list as $entry)
								{
									display_entry($entry,'Modify','Delete');
								}
							?>
						</table>    
						<div id="available-letters"><?php $this->displayAvailableLetters(); ?></div>
						<div id="available-pages"><?php $this->displayAvailablePages($letter); ?></div>
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