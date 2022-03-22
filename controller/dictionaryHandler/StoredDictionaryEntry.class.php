<?php
include_once(dirname(__FILE__).'/DictionaryEntry.class.php');

class StoredDictionaryEntry extends DictionaryEntry
{
	protected $userId; //identity number of the user who add this entry in the Dictionary table


	public function __construct($french,$french_id,$english,$english_id,$user_id)
	{
		DictionaryEntry::__construct($french,$french_id,$english,$english_id);
		$this->userId = $user_id;
	}


	/**
	 * getEntryId : return the attribute entryId
	 */
	public function getUserId()
	{
		return $this->userId;
	}
}
