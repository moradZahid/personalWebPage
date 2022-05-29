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
	<div id="header-block-2">
		<a href="<?=$url.'/controller/frontalController.php?from=createUserAccount'?>">
			<span>	
				Inscription
			</span>
		</a>
		<a href="<?=$url.'/controller/frontalController.php?from=authentication'?>">
			<span>
				Connexion
			</span>
		</a>
	</div>
</header>