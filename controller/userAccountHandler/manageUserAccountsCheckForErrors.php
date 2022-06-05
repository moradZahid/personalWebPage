<?php

if (!check_service($_SESSION['service']))
{
	throw new ServiceIsNotSet();
}
$service = $_SESSION['service'];


//check for page
if (!filter_has_var(INPUT_GET,'page'))
{
	$page_nbr = isset($_SESSION['accounts_page_nbr'])? $_SESSION['accounts_page_nbr'] : 1;
}
else
{
	$page_nbr = filter_input(INPUT_GET,'page',FILTER_VALIDATE_INT);
}
if (!check_validity_page_nbr($page_nbr))
{
	throw new UnexpectedValue();
}
