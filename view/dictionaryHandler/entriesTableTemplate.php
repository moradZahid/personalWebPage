<table>
    <?php
		foreach($entries_list as $entry)
		{
			display_entry($entry);
		}
    ?>
</table>    
<?php	
    $this->displayAvailableLetters();
    $this->displayAvailablePages($letter);
?>