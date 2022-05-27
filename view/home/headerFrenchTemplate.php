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
		<div>
			<a href= "<?=$url.'/controller/frontalController.php?from=createUserAccount'?>">
			Inscription</a>
		</div> 
		<div>Connection</div>
	</div>
</header>