<?php
include_once(dirname(__FILE__).'/DictionaryService.class.php');
include_once(dirname(__FILE__).'/DictionaryEntry.class.php');

class EntriesAddition extends DictionaryService
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
	public function modality2Index()
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
	 *					  return a list of pairs of strings consisting of two expressions
	 */
	public function extractEntries()
	{
		$data_list=file($this->fileName);
		if ($data_list==0)
		{
			throw new FileError('error: file can\'t be opened');
		}
		$i=0;
		foreach($data_list as $line)
		{
			$line=trim($line);
			
			if (preg_match('#^[a-zA-Z0-9’éèàùçêâûîôïëü -]*:[a-zA-Z0-9’éèàùçêâûîôïëü -]*#',$line))
			{
				$pair = preg_split('#[ ]*:[ ]*#',$line);
				$arr_pairs[$i] = $pair;
				$i++;
			}
		}
		return $arr_pairs;
	}
	
	/**
	 * getEntryListToAdd	: convert the list returned by the function extractEntries() into a list of 
	 *						  DictionaryEntry objects 
	 *
	 *						: param	: $data_list	: array of pair of strings
	 *						 		: $frenchIndex 	: index of the french expressions in the pair of strings
	 *								: $englishIndex : index of the english expressions in the pair of strings
	 */
	public function getEntryListToAdd($data_list, $frenchIndex, $englishIndex)
	{
		$i=0;
		foreach($data_list as $pair)
		{
			$entry=new DictionaryEntry($pair[$frenchIndex],$pair[$englishIndex]);
			
			$entries_list[$i]=$entry;
			$i++;
		}
		return $entries_list;
	}
	
	
	/**
	 * 	addEntriesInTable	: insert a list of DictionaryEntry objects into the dictionary table
	 *
	 *						: param : $entry_list : array of DictionaryEntry objects 
	 */
	public function addEntriesInTable($entry_list)
	{
		include_once(dirname(__FILE__,3).'/model/dictionaryHandler/addEntriesInTable.php');
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