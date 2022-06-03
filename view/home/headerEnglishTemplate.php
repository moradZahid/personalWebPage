<header>
	<div id="header-block-1">
		<span id="header_title">Morad Zahid</span>
		<nav>
			<ul>
				<li><a href="<?=$url.'/controller/frontalController.php'?>" 
					id='home'>Home</a></li>
				<li><a href="<?=$url.'/controller/frontalController.php?from=tuto'?>"
					id='tuto'>App Explanations</a></li> 
				<li><a href="<?=$url.'/controller/frontalController.php?from=cv'?>"
					id='cv'>Resume</a></li>
			</ul>	
		</nav>
	</div>
	<div id="header-block-2">
		<a href="<?=$url.'/controller/frontalController.php?from=createUserAccount'?>">
			<span>	
				Sign Up
			</span>
		</a>
		<a href="<?=$url.'/controller/frontalController.php?from=authentication'?>">
			<span>
				Sign In
			</span>
		</a>
	</div>
</header>