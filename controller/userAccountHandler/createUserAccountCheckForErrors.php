<?php
$NUMBER_IMAGES = 10;

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
$_SESSION['create_account_login'] = $login;


// check for password1
if (!filter_has_var(INPUT_POST,'password1'))
{
	throw new IsNotSet();
}
$password1 = filter_input(INPUT_POST,'password1',FILTER_UNSAFE_RAW);
if (strlen($password1) == 0)
{
	throw new EmptyString();
}
$_SESSION['create_account_password1'] = $password1;


// check for password2
if (!filter_has_var(INPUT_POST,'password2'))
{
	throw new IsNotSet();
}
$password2 = filter_input(INPUT_POST,'password2',FILTER_UNSAFE_RAW);
if (strlen($password2) == 0)
{
	throw new EmptyString();
}
$_SESSION['create_account_password2'] = $password2;


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
$_SESSION['create_account_email'] = $email;


// check for code
if (!filter_has_var(INPUT_POST,'code'))
{
	throw new IsNotSet();
}
$code = filter_input(INPUT_POST,'code',FILTER_SANITIZE_SPECIAL_CHARS);

if (strlen($code) == 0)
{
	throw new EmptyString();
}
$_SESSION['create_account_code'] = $code;


// check for captcha_nbr
if (!filter_has_var(INPUT_POST,'captcha_nbr'))
{
	throw new IsNotSet();
}
$captcha_nbr = filter_input(INPUT_POST,'captcha_nbr',FILTER_VALIDATE_INT);

if ($captcha_nbr <= 0 || $captcha_nbr > $NUMBER_IMAGES)
{
	throw new UnexpectedValue();
}