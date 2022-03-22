<?php

// check if the identity numbers are passed in the url
// their presence is mandatory
if (!filter_has_var(INPUT_GET,'french_id'))
{
	throw new IsNotSet('french_id');
}
$entry_id = filter_input(INPUT_GET,'french_id',FILTER_VALIDATE_INT);
if ($entry_id <= 0)
{
	throw new UnexpectedValue('french_id');
}
if (!filter_has_var(INPUT_GET,'english_id'))
{
	throw new IsNotSet('english_id');
}
$entry_id = filter_input(INPUT_GET,'english_id',FILTER_VALIDATE_INT);
if ($entry_id <= 0)
{
	throw new UnexpectedValue('english_id');
}

// check if a form was submited
// in that case all the field are requiered
if (filter_has_var(INPUT_POST,'submit'))
{
	if (!filter_has_var(INPUT_POST,'french'))
	{
			throw new IsNotSet('french expression');
	}
	$french = filter_input(INPUT_POST,'french',FILTER_SANITIZE_SPECIAL_CHARS);
	if (strlen($french) < 1)
	{
		throw new EmptyString('french expression');
	}
	if (!filter_has_var(INPUT_POST,'english'))
	{
		throw new IsNotSet('english expression');
	}

	$english = filter_input(INPUT_POST,'english',FILTER_SANITIZE_SPECIAL_CHARS);
	if (strlen($english) < 1)
	{
		throw new EmptyString('english expression');
	}
}
