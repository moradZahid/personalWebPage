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
			<?php //include(dirname(__FILE__,2).'/changeLang/changeLangFrenchTemplate.php') ?> 
			<h1>Fonctionnement du site</h1>
			
			<div class="main-container">
                <div class="secondary-container">
                    <figure>
                        <img src="<?=$img.'/appExplanations/home.jpg'?>">
                        <figcaption>
                            <p>
                                Entrez un terme dans la zone 1.
                            </p>
                            <p>
                                Si une traduction est disponible, elle s'affichera dans la zone 2.
                            </p>
                            <p>
                                Pour s'inscrire et contribuer à l'enrichissement du dictionnaire, cliquez sur le 
                                bouton de la zone 3
                            </p>
                        </figcaption>
                    </figure>

                    <figure>
                        <img src="<?=$img.'/appExplanations/sign-up.jpg'?>">       
                        <figcaption>
                            <p>
                                Pour s'inscrire remplisser le formulaire dans la zone 1.
                            </p>
                            <p>
                                Un code, entré dans la zone 2, permet de vérifier que le compte est bien crée par un humain.
                            </p>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="<?=$img.'/appExplanations/sign-in.jpg'?>">
                        <figcaption>
                            <p>
                                Ensuite vous pouvez vous connecter.
                            </p>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="<?=$img.'/appExplanations/logged.jpg'?>">
                        <figcaption>
                            <p>
                                Lorsque vous êtes connecté, votre login s'affiche dans le bouton de la zone 1.
                            </p>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="<?=$img.'/appExplanations/menu.jpg'?>">
                        <figcaption>
                            En cliquant dessus vous accédez au menu offrant différentes fonctionnalités.
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="<?=$img.'/appExplanations/entries-management.jpg'?>">
                        <figcaption>
                            <p>
                                Vous pouvez ajouter des entrées dans le dictionnaire.
                            </p>
                            <p>
                                Vous pourrez alors les modifier ou les supprimer.
                            </p>
                            <p>
                                Cependant vous ne pouvez pas avoir accés aux entrées que vous n'avez pas ajoutées.
                            </p>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="<?=$img.'/appExplanations/account-management.jpg'?>">
                        <figcaption>
                            <p>
                                Vous pouvez modifier vos informations personnelles ou supprimer votre compte.
                            </p>   
                            <p>
                                En cliquant sur le bouton 1, vous pourrez changer votre mot de passe.
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
