<header>
	<div id="header-block-1">
		<span id="header_title">Morad Zahid</span>
		<nav>
			<ul>
				<li><a href="<?=$url.'/controller/frontalController.php'?>" 
					id='home'>Accueil</a></li>
				<li><a href="<?=$url.'/controller/frontalController.php?from=tuto'?>"
					id='app-explain'>Fonctionnement du site</a></li> 
				<li><a href="<?=$url.'/controller/frontalController.php?from=cv'?>"
					id='cv'>CV</a></li>
			</ul>	
		</nav>
	</div>
	<div id="header-block-2" class="french-width"> 
		<div class="header-buttons">
			<span id="logged-button">
				<?= $login ?>
			</span>
		</div>
        <div class="hidden" id="management-menu">
			<ul>
				<li><a href="<?= $url.'/controller/frontalController.php?from=manageAccount'?>">
					Gestion du compte</a></li>
				<li><a href="<?= $url.'/controller/frontalController.php?from=manageEntries'?>">
					Gestion des entrées</a></li>
				<li><a href="<?= $url.'/controller/frontalController.php?from=logout'?>">
					Déconnexion</a></li>
			</ul>
        </div>    
	</div>
</header>