<table>
    <?php
		foreach($entries_list as $entry)
		{
			display_entry($entry);
		}
    ?>
</table>    
<div id="available-letters"><?php	$this->displayAvailableLetters(); ?></div>
<div id="available-pages"><?php $this->displayAvailablePages($letter); ?></div>