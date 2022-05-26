<?php

if (isset($_SESSION['service'])) {
    if (!check_service($_SESSION['service'])) {
        throw new ServiceIsNotSet();
    }
}
$service = $_SESSION['service'];

if (!filter_has_var(INPUT_POST,'lang'))
{
	throw new IsNotSet('lang');
}

$lang = filter_input(INPUT_POST,'lang',FILTER_SANITIZE_SPECIAL_CHARS);


