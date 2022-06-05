<?php
// check for service
if (isset($_SESSION['service'])) {
    if (!check_service($_SESSION['service'])) {
        throw new ServiceIsNotSet();
    }
}
$service = $_SESSION['service'];


// check for login
if (!filter_has_var(INPUT_POST,'login'))
{
	throw new IsNotSet();
}
$login = filter_input(INPUT_POST,'login',FILTER_SANITIZE_SPECIAL_CHARS);

if (strlen($login) == 0)
{
	throw new EmptyString();
}

// check for email
if (!filter_has_var(INPUT_POST,'email'))
{
	throw new IsNotSet();
}
$email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
if (strlen($email) == 0)
{
	throw new EmptyString();
}

// check for user_id
if (!filter_has_var(INPUT_POST,'user_id'))
{
	throw new IsNotSet();
}
$user_id = filter_input(INPUT_POST,'user_id',FILTER_VALIDATE_INT);
if ($user_id == 0)
{
	throw new UnexpectedValue();
}

// check for pswd-modified
if (!filter_has_var(INPUT_POST,'pswd-modified'))
{
	throw new IsNotSet();
}
$pswd_modified = filter_input(INPUT_POST,'pswd-modified');

switch ($pswd_modified)
{
    case 'not-modified':
        break;

    case 'modified':

        // check for password1
        if (!filter_has_var(INPUT_POST,'password1'))
        {
            throw new IsNotSet();
        }
        $password1 = filter_input(INPUT_POST,'password1');
        if (strlen($password1) == 0)
        {
            throw new EmptyString();
        }

        // check for password2
        if (!filter_has_var(INPUT_POST,'password2'))
        {
            throw new IsNotSet();
        }
        $password2 = filter_input(INPUT_POST,'password2');
        if (strlen($password2) == 0)
        {
            throw new EmptyString();
        }
        break;

    default :
        throw new UnexpectedValue();    
}