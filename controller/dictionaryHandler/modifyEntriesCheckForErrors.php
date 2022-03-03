<?php

//check for letter
if (!filter_has_var(INPUT_GET,'letter'))
{
	throw new IsNotSet('letter');
}

$letter = filter_input(INPUT_GET,'letter',FILTER_SANITIZE_SPECIAL_CHARS);

if (!check_validity_letter($letter))
{
	throw new UnexpectedValue('letter');
}


//check for page
if (!filter_has_var(INPUT_GET,'page'))
{
	throw new IsNotSet('page number');
}

$page_nbr = filter_input(INPUT_GET,'page',FILTER_SANITIZE_SPECIAL_CHARS);
$page_nbr = (int) $page_nbr;

if (!check_validity_page($page_nbr,$letter))
{
	throw new UnexpectedValue('page number');
}