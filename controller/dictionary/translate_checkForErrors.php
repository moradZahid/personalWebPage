<?php

// check for the text entry "expression" 

if (!filter_has_var(INPUT_POST,'expression'))
{
	throw new IsNotSet();
}
$expression=filter_input(INPUT_POST,'expression',FILTER_SANITIZE_SPECIAL_CHARS);
$_SESSION['last_expr'] = $expression;

if (strlen($expression) < 1)
{
	throw new EmptyString();
}


// check for the radio button "language"

if (!filter_has_var(INPUT_POST,'language'))
{
	throw new IsNotSet();
}

$language=filter_input(INPUT_POST,'language',FILTER_UNSAFE_RAW);
if ($language != 'english')
{
	if ($language != 'french')
	{
		throw new UnexpectedValue('language');
	}
}
$_SESSION['last_lang_trans'] = $language;