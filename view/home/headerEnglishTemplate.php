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
			<div>	
				Sign Up
			</div>
		</a>
		<a href="<?=$url.'/controller/frontalController.php?from=authentication'?>">
			<div>
				Sign In
			</div>
		</a>
	</div>
</header>