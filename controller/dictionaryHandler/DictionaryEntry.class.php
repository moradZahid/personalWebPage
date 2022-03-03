<?php
class DictionaryEntry
{
	protected $french;
	protected $english;
	
	public function __construct($french,$english)
	{
		$this->french = $french;
		$this->english = $english;
	}
	
	
	/**
	 * getFrench : return the attribute french
	 */
	public function getFrench()
	{
		return $this->french;
	}
	
	
	/**
	 * getEnglish : return the attribute english
	 */
	public function getEnglish()
	{
		return $this->english;
	}
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	