<?php
class IsNotSet extends Exception
{
	private $complementInfo;
	
	public function __construct($string=NULL)
	{
		$this->complementInfo=$string;
	}
	
	function getComplementInfo()
	{
		return $this->complementInfo;
	}
}