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
	<div id="header-block-2" class="english-width">
		<div class="header-buttons">
			<span id="logged-button">
				<?= $login ?>
			</span>
		</div>
        <div class="hidden" id="management-menu">
            <ul>
                <li><a href="<?= $url.'/controller/frontalController.php?from=manageUserAccounts'?>">
                Manage your account</a></li>
                <li><a href="<?= $url.'/controller/frontalController.php?from=manageEntries'?>">
                Manage your entries</a></li>
                <li><a href="<?= $url.'/controller/frontalController.php?from=logout'?>">
                Sign out</a></li>
            </ul>
        </div>
	</div>
</header>