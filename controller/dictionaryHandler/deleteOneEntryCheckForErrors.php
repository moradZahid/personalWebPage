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
