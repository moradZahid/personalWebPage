<?php 
include(dirname(__FILE__,2).'/home/viewHomeFunctions.php');

// set $url, $fonts, $img and $login
include(dirname(__FILE__).'/setAppExplanationsVariables.php');
?>

<!DOCTYPE html>
<html>
	<!-- head -->
		<?php include(dirname(__FILE__).'/appExplanationsHead.php'); ?>
	

	<body>
		<!-- header -->
		<?php include(dirname(__FILE__,2).'/home'.choose_header()) ?>
		<main>
			<?php include(dirname(__FILE__,2).'/changeLang/changeLangEnglishTemplate.php') ?> 
			<h1>Application Explanations</h1>
			
			<div class="main-container">
                <div class="secondary-container">
                    <figure>
                        <img src="<?=$img.'/appExplanations/home.jpg'?>">
                        <figcaption>
                            <p>
                                Input a term in the area 1.
                            </p>
                            <p>
                                If there is a translation, it will be displayed in the area 2.
                            </p>
                            <p>
                                To sign up and contributing to enhance the dictionary, please click on the button
                                in the area 3.
                            </p>
                        </figcaption>
                    </figure>

                    <figure>
                        <img src="<?=$img.'/appExplanations/sign-up.jpg'?>">       
                        <figcaption>
                            <p>
                                To sign up, fill the form in the area 1.
                            </p>
                            <p>
                                A code, in the area 2, prevent from nonhuman account creation.
                            </p>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="<?=$img.'/appExplanations/sign-in.jpg'?>">
                        <figcaption>
                            <p>
                                Then sign in.
                            </p>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="<?=$img.'/appExplanations/logged.jpg'?>">
                        <figcaption>
                            <p>
                                When you are logged, your login is printed inside the button in the area 1.
                            </p>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="<?=$img.'/appExplanations/menu.jpg'?>">
                        <figcaption>
                            Click on it to access the menu and explore the different features.
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="<?=$img.'/appExplanations/entries-management.jpg'?>">
                        <figcaption>
                            <p>
                                You can add entries in the dictionary.
                            </p>
                            <p>
                                Then you will be able to modify or delete them.
                            </p>
                            <p>
                                Be careful you cannot access the entries you do not own.
                            </p>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="<?=$img.'/appExplanations/account-management.jpg'?>">
                        <figcaption>
                            <p>
                                You can update your personal information or delete your account.
                            </p>   
                            <p>
                                Please, click on the button in the area 1 to change your password.
                            </p>
                        </figcaption>
                    </figure>
                </div>
			</div>
		</main>
		<!-- footer -->
		<?php include(dirname(__FILE__,2).'/home/footerTemplate.php'); ?>
	</body>
</html>
