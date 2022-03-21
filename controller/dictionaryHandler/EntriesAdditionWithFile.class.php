<?php
include_once(dirname(__FILE__).'/EntriesAddition.class.php');
include(dirname(__FILE__).'/controllerDictionaryHandlerFunctions.php');

class EntriesAdditionWithFile extends EntriesAddition
{
	private $fileName;
	private $modality;

	public function __construct($name,$mod)
	{
		$this->fileName=$name;
		$this->modality=$mod;
	}

	/**
	 * modality2Index	: tell what is the index of the french expression and of the english expression
	 *					  in the array $pair, of the function extractEntries(), which contains an entry to add;
	 *					  for instance if the modality is "fr:eng" then $pair would be of the form
	 *					  [ 0 => "french_expression" ,
	 *						1 => "english_expression" ]
	 */
	private function modality2Index()
	{
		switch($this->modality)
		{
		case "fr:eng" : return array('french_index' => 0,
									'english_index' => 1);
			break;
		case "eng:fr" : return array('french_index' => 1,
									'english_index' => 0);
			break;
		default: return 0;
		}
	}


	/**
	 * extractEntries	: extract the data from the file whose the name is the attribute $fileName and
	 *					  			return a list of pairs of strings consisting of two expressions
	 *
	 *								return: array of array of strings
	 */
	private function extractEntries()
	{
		$data_list=file($this->fileName);
		if ($data_list==0)
		{
			throw new FileError('error: file can\'t be opened');
		}
		foreach($data_list as $line)
		{
			$line=trim($line);

			if (preg_match('#^[a-zA-Z0-9’,éèàùçêâûîôïëü -]*:[a-zA-Z0-9’,éèàùçêâûîôïëü -]*#',$line))
			{
				$pair = preg_split('#[ ]*:[ ]*#',$line);
				$tmp_arr_pairs = pairs_of_expressions($pair);
				foreach ($tmp_arr_pairs as $elt)
				{
					$arr_pairs[] = $elt;
				}
			}
		}
		return $arr_pairs;
	}


	/**
	 *	execute	: execute the algorithm of addition of entries
	 */
	public function execute()
	{
		$index=$this->modality2Index();

		$data_list=$this->extractEntries();

		$entry_list=$this->getEntryListToAdd($data_list,$index['french_index'],$index['english_index']);

		$this->addEntriesInTable($entry_list);
	}
}
