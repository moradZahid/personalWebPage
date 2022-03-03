<?php
include_once(dirname(__FILE__).'/DictionaryEntry.class.php');

class StoredDictionaryEntry extends DictionaryEntry
{
	protected $entryId;
	
	
	public function __construct($french,$english,$id)
	{
		DictionaryEntry::__construct($french,$english);
		$this->entryId = $id;
	}
	
	
	/**
	 * getEntryId : return the attribute entryId
	 */
	public function getEntryId()
	{
		return $this->entryId;
	}
}