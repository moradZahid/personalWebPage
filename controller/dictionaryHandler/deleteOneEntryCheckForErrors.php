<?php

if (!check_service($_SESSION['service']))
{
	throw new ServiceIsNotSet();
}
$service = $_SESSION['service'];

// check if the identity numbers are passed in the url
// their presence is mandatory
if (!filter_has_var(INPUT_GET,'french_id'))
{
	throw new IsNotSet('french_id');
}
$french_id = filter_input(INPUT_GET,'french_id',FILTER_VALIDATE_INT);
if ($french_id <= 0)
{
	throw new UnexpectedValue('french_id');
}
if (!filter_has_var(INPUT_GET,'english_id'))
{
	throw new IsNotSet('english_id');
}
$english_id = filter_input(INPUT_GET,'english_id',FILTER_VALIDATE_INT);
if ($english_id <= 0)
{
	throw new UnexpectedValue('english_id');
}

// check if there is a confirmation key
if (filter_has_var(INPUT_GET,'confirmation')) {
	$confirmation = filter_input(INPUT_GET,'confirmation');
	if (!$confirmation == 'confirmed') {
		throw new UnexpectedValue('confirmation');
	}
}