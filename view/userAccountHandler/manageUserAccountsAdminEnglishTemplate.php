<?php
include_once(dirname(__FILE__).'/viewUserAccountHandlerFunctions.php');

// set $url, $fonts, $msg, $login and $success
include(dirname(__FILE__).'/setManageUserAccountsAdminVariables.php');
?>

<!DOCTYPE html>
<html>
	<!-- head -->
		<?php include(dirname(__FILE__).'/manageUserAccountsAdminHead.php'); ?>
	
	<body>
		<!-- header -->
		<?php include(dirname(__FILE__,2).'/home/headerLoggedEnglishTemplate.php') ?>
		<main>
			<?php include(dirname(__FILE__,2).'/changeLang/changeLangEnglishTemplate.php') ?>
			<h1>Manage Personal Information</h1>
			
			<div class="main-container">
                <div class="secondary-container-ME">
					<p id="message">
						<span class="error"><?= $msg ?></span>
						<span class="success"><?= $success ?></span>
					</p>
                    <div id="userAccountsTable">
						<table>
							<?php
								foreach($user_account_list as $account)
								{
									display_user_account($account,'Modify','Delete');
								}
							?>
						</table>
						<div id="available-pages"><?php display_available_pages(); ?></div>
					</div>
                <div>
			</div>
		</main>
		<!-- footer -->
		<?php include(dirname(__FILE__,2).'/home/footerTemplate.php'); ?>
		
		<?php $_SESSION['msg'] = NULL; ?>
        <?php $_SESSION['success'] = NULL; ?>
	</body>
</html>