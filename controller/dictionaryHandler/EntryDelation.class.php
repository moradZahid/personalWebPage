<?php

class EntryDelation
{
	/**
	 * delete	: Delete the entry whose id is given in parameter
	 *
	 *			: param : $entry_id : integer
	 */
	 public function delete($entry_id)
	 {
		include(dirname(__FILE__,3).'/model/dictionaryManager/deleteOneEntry.php');
		
		$_SESSION['msg'] = 'Entry delated';
		$url = $_SESSION['index'];
		$url .= '/controller/frontalController.php?from=admin services';
		header('Location:'.$url);
	 } 
}
