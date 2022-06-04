<?php
// set $url, $fonts and $login
include(dirname(__FILE__).'/setModifyOneEntryVariables.php');
?>

<!DOCTYPE html>
<html>
	<!-- head -->
		<?php include(dirname(__FILE__).'/deleteOneEntryHead.php'); ?>
	
	<body>
		<!-- header -->
		<?php include(dirname(__FILE__,2).'/home/headerLoggedEnglishTemplate.php') ?>
		<main>
			<?php include(dirname(__FILE__,2).'/changeLang/changeLangEnglishTemplate.php') ?>
			<h1>Gestion des entrées du dictionnaire</h1>
			
			<div class="main-container">
                <div class="secondary-container-ME">
                    <?php
                        $url_confirmation = $url.'/controller/dictionaryHandler/deleteOneEntryController.php';
                        $url_confirmation .= '?french_id='.$entry->getFrenchId();
                        $url_confirmation .= '&english_id='.$entry->getEnglishId();
                        $url_confirmation .= '&confirmation=confirmed';
                    ?>
                    <table>
                        <tr>
                            <td><?= $entry->getFrench() ?></td> 
                            <td><?= $entry->getEnglish() ?></td>
                        </tr>
                    </table>
                    <p>
                        Are you sure you want to delete this entry? 
                        <a href="<?= $url_confirmation ?>" 
                           class="confirmation delete"> 
                           yes 
                        </a> 
                        <a href="<?= $url.'/controller/frontalController.php?from=manageEntries'?>"
                           class="confirmation cancel">
                            no 
                        </a>
                    </p>
                <div>
			</div>
		</main>
		<!-- footer -->
		<?php include(dirname(__FILE__,2).'/home/footerTemplate.php'); ?>
		
		<?php $_SESSION['msg'] = NULL; ?>
        <?php $_SESSION['success'] = NULL; ?>
	</body>
</html>