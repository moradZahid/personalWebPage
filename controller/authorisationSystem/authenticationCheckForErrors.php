<?php

// check for service
$service = $_SESSION['service'];
if (check_service($service) == 0)
{
	throw new ServiceIsNotSet();
}

// check for login
if (!filter_has_var(INPUT_POST,'login'))
{
	throw new IsNotSet();
}
$login = filter_input(INPUT_POST,'login',FILTER_SANITIZE_SPECIAL_CHARS);

if ($login == '')
{
	throw new EmptyString();
}

// check for password
if (!filter_has_var(INPUT_POST,'password'))
{
	throw new IsNotSet();
}
$password = filter_input(INPUT_POST,'password',FILTER_UNSAFE_RAW);
if ($password == '')
{
	throw new EmptyString();
}
