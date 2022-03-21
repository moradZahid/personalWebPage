<?php
include_once(dirname(__FILE__).'/EntriesAddition.class.php');

class EntriesAdditionWithForm extends EntriesAddition
{
  private $french;
  private $english;

  public function __construct($french, $english)
  {
    $this->french = $french;
    $this->english = $english;
  }

  /**
  * extractEntries  : extract the data given in the form and
  *					  			  return a list of pairs of strings consisting of two expressions
  *
  *                  return: array of array of strings
  */
  private function extractEntries()
  {
    $arr = pairs_of_expressions(array($this->french, $this->english));
    return $arr;
  }

  /**
   *	execute	: execute the algorithm of addition of entries
   */
  public function execute()
  {
    $data_list = $this->extractEntries();

    $entry_list = $this->getEntryListToAdd($data_list,0,1);

    $this->addEntriesInTable($entry_list);
  }
}
