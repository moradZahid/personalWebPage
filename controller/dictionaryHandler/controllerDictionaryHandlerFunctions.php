<?php
include_once(dirname(__FILE__).'/dictionaryHandlerExceptions.php');


/**
 * get_number_entries	: return for each letters the number of entries in the dictionary
 *                        whose the french expression begins with this letter
 *
 *						: return : array of integer
 */
function get_number_entries()
{
 	// will receive the number of entries for each letters
 	$nbr_entries = [];

 	//call the model to fill $nbr_entries
	if ($_SESSION['login'] == 'admin')
	{
		include(dirname(__FILE__,3).'/model/dictionaryHandler/getNumberEntriesAdmin.php');
	}
	else
	{
 		include(dirname(__FILE__,3).'/model/dictionaryHandler/getNumberEntries.php');
	}
    return $nbr_entries;
}


/**
 * get_offset	: return the offset of the first entry to display
 *
 *				    : param : $page_nbr	: integer
 *
 *				    : return: integer
 */
function get_offset($page_nbr)
{
  global $ENTRIES_PER_PAGE;

  return ($page_nbr - 1) * $ENTRIES_PER_PAGE;
}

/**
 * get_nbr_entries_to_display : return the number of entries to display
 *
 *							  : param : $letter	  : string
 *							          : $page_nbr : integer
 *
 *							  : return: integer
 */
 function get_nbr_entries_to_display($letter,$page_nbr)
 {
	global $nbr_entries;
	global $ENTRIES_PER_PAGE;

	$index = ord($letter) - 97;

	if ($nbr_entries[$index] == 0)
	{
		return 0;
	}

	$remainder = $nbr_entries[$index] % $ENTRIES_PER_PAGE;
	$last_page = ceil($nbr_entries[$index] / $ENTRIES_PER_PAGE);

	if ($remainder == 0)
	{
		return $ENTRIES_PER_PAGE;
	}
	if ($page_nbr == $last_page)
	{
		return $remainder;
	}
	return $ENTRIES_PER_PAGE;
 }


/**
 * check_validity_letter	: return 0 if the parameter is not a letter between a and z
 *
 *							: param : $letter : string
 *
 *							: return: integer
 */
 function check_validity_letter($letter)
 {
 	 if (strlen($letter) != 1)
 	 {
 	 	 return 0;
 	 }
 	 $ord = ord($letter);
 	 if ($ord < 97 || $ord > 122)
 	 {
 	 	 return 0;
 	 }
 	 return 1;
 }


 /**
 * check_validity_page	: return 0 if the first parameter is not a valid page number for the
 *						: letter given in parameter
 *
 *						: param : $page		: integer
 *								: $letter	: string
 *						: return: integer
 */
 function check_validity_page($page,$letter)
 {

 	global $nbr_entries;
	global $ENTRIES_PER_PAGE;

	if ($page < 1)
	{
		return 0;
	}

	$index = ord($letter) - 97;

	$last_page = ceil($nbr_entries[$index] / $ENTRIES_PER_PAGE);

	if ($page > $last_page)
	{
		return 0;
	}
	return 1;
 }

/**
* pairs_of_expressions  : return pairs of expression obtained from a list of
*                       : expressions separated by a comma
*
*                       : param : $multi_expressions : array of strings
*
*                       :return: array of pairs of strings
*/
 function pairs_of_expressions($multi_expressions)
 {
     $expr1 = explode(',' , $multi_expressions[0]);
     $expr2 = explode(',' , $multi_expressions[1]);
     $arr_pairs = [];

     foreach ($expr1 as $elt1)
     {
         foreach ($expr2 as $elt2)
         {
             $pair = array(trim($elt1) , trim($elt2));
             $arr_pairs[] = $pair;
         }
     }
     return $arr_pairs;
 }


/**
 * save_letter_page : memorize the letter and the page of the list of entries
 * 					  for the manage entries interface.
 */
function save_letter_page($letter, $page_nbr)
{
	$_SESSION['letter'] = $letter;
	$_SESSION['page_nbr'] = $page_nbr;
} 