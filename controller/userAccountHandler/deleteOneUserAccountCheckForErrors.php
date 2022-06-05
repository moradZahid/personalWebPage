<?php
// check for service
if (isset($_SESSION['service'])) {
    if (!check_service($_SESSION['service'])) {
        throw new ServiceIsNotSet();
    }
}
$service = $_SESSION['service'];

// check for user_id
if (!filter_has_var(INPUT_POST,'user_id'))
{
	throw new IsNotSet();
}
$user_id = filter_input(INPUT_POST,'user_id',FILTER_VALIDATE_INT);
if ($user_id <= 0)
{
	throw new UnexpectedValue();
}
