<?php
class DictionaryEntry
{
	protected $french;
	protected $english;
	protected $frenchId;  //identity number of the french expression in the French table
	protected $englishId; //identity number of the english expression in the English table

	public function __construct($french,$french_id,$english,$english_id)
	{
		$this->french = $french;
		$this->english = $english;
		$this->frenchId = $french_id;
		$this->englishId = $english_id;
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

	/**
	 * getFrenchId : return the attribute frenchId
	 */
	public function getFrenchId()
	{
		return $this->frenchId;
	}


	/**
	 * getEnglishId : return the attribute englishId
	 */
	public function getEnglishId()
	{
		return $this->englishId;
	}
}
