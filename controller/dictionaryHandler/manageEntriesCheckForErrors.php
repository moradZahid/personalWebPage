<?php

//check for letter
if (!filter_has_var(INPUT_GET,'letter'))
{
	$letter = isset($_SESSION['letter'])? $_SESSION['letter'] : 'a';
}
else 
{
	$letter = filter_input(INPUT_GET,'letter',FILTER_SANITIZE_SPECIAL_CHARS);
}
if (!check_validity_letter($letter))
{
	throw new UnexpectedValue();
}


//check for page
if (!filter_has_var(INPUT_GET,'page'))
{
	$page_nbr = isset($_SESSION['page_nbr'])? $_SESSION['page_nbr'] : 1;
}
else
{
	$page_nbr = filter_input(INPUT_GET,'page',FILTER_SANITIZE_SPECIAL_CHARS);
	$page_nbr = (int) $page_nbr;
}
if (!check_validity_page($page_nbr,$letter))
{
	throw new UnexpectedValue();
}
