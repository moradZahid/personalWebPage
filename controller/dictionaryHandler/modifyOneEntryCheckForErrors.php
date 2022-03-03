<?php

if (!filter_has_var(INPUT_GET,'entry_id'))
{
	throw new IsNotSet('entry_id');
}
$entry_id = filter_input(INPUT_GET,'entry_id',FILTER_SANITIZE_SPECIAL_CHARS);
$entry_id = (int) $entry_id;

if ($entry_id < 0) 
{
	throw new UnexpectedValue('entry_id');
}

if (filter_has_var(INPUT_POST,'french'))
{
	$french = filter_input(INPUT_POST,'french',FILTER_SANITIZE_SPECIAL_CHARS);
	if ($french == '')
	{
		throw new EmptyString('french expression');
	}
	if (!filter_has_var(INPUT_POST,'english'))
	{
		throw new IsNotSet('english expression');
	}
	
	$english = filter_input(INPUT_POST,'english',FILTER_SANITIZE_SPECIAL_CHARS);
	if ($english == '')
	{
		throw new EmptyString('english expression');
	}
}
else
{
	if (filter_has_var(INPUT_POST,'english'))
	{
		throw new IsNotSet('french expression');
	}
}