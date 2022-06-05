<?php 
include(dirname(__FILE__,2).'/home/viewHomeFunctions.php');

// set $url, $fonts, $img and $login
include(dirname(__FILE__,2).'/appExplanations/setAppExplanationsVariables.php');
?>

<!DOCTYPE html>
<html>
	<!-- head -->
		<?php include(dirname(__FILE__).'/resumeHead.php'); ?>
	

	<body>
		<!-- header -->
		<?php include(dirname(__FILE__,2).'/home'.choose_header()) ?>
		<main>
			<h1>CV</h1>
			
			<div class="main-container">
                <div class="secondary-container">
                    <img src="<?=$img.'/resume/resume.jpg'?>">
                </div>
			</div>
		</main>
		<!-- footer -->
		<?php include(dirname(__FILE__,2).'/home/footerTemplate.php'); ?>
	</body>
</html>
