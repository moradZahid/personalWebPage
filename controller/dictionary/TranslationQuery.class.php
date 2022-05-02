<?php

class TranslationQuery
{
	protected $expression;
	protected $language;
	protected $result;

	public function __construct($expr,$lang)
	{
		$this->expression = $expr;
		$this->language = $lang;
	}

	/**
	 * getResult	: return the result of the query.
	 *
	 *						: return : string
	 */
	public function getResult()
	{
		return $this->result;
	}


	/**
	 * getLanguage	: return the language of the query.
	 *
	 *							: return : string
	 */
	private function getLanguage()
	{
		switch($this->language)
		{
		case 'french' : return 'French';
		case 'english' : return 'English';
		}
	}

	/**
	 * getOriginalLanguage 	: return the language of the expression
	 *											: return : string
	 */
	private function getOriginalLanguage()
	{
		switch($this->language)
		{
		case 'french' : return 'English';
		case 'english' : return 'French';
		}
	}


	/**
	 * execute	: execute the query. If the expression is not stored the attribute 'result' is not modifie
	 *			  i.e. has the value '/'
	 */
	public function execute()
	{
		$data=NULL;

		// search for the expression into the dictionary
		include_once(dirname(__FILE__,3).'/model/dictionary/translate.php');

		// if the expression is stored set the attribut "result" with the translated expression
		$nb_expr = count($data);
		if ($nb_expr == 0)
		{
			if ($_SESSION['lang'] == 'english')
			{
				$this->result = 'There is no entry in the dictionary.';
			}
			else
			{
				$this->result = 'Le terme ne figure pas dans le dictionnaire.';
			}
		}
		else
		{
			foreach($data as $elt)
			{
				$this->result .= $elt['expression'].', ';
			}
			$this->result = trim($this->result, ', ');
		}
	}
}
