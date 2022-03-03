<?php
class UnexpectedValue extends Exception
{
	private $variable;
	
	public function __construct($string=NULL)
	{
		$this->variable=$string;
	}
	
	function getVariable()
	{
		return $this->variable;
	}	
}