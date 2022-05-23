<?php 
$url = filter_var($_SESSION['index'],FILTER_SANITIZE_SPECIAL_CHARS); 
$fonts = filter_var($_SESSION['fonts'],FILTER_SANITIZE_SPECIAL_CHARS);
$img = filter_var($_SESSION['images'],FILTER_SANITIZE_SPECIAL_CHARS);

if ($_SESSION['msg'] !== NULL)
{
	$msg = filter_var($_SESSION['msg'],FILTER_SANITIZE_SPECIAL_CHARS);
}
else 
{
	$msg = NULL;
}

if (isset($_SESSION['create_account_login']))
{
	$login = filter_var($_SESSION['create_account_login'],FILTER_SANITIZE_SPECIAL_CHARS);
}
else 
{
	$login = NULL;
}

if (isset($_SESSION['create_account_password1']))
{
	$password1 = filter_var($_SESSION['create_account_password1'],FILTER_SANITIZE_SPECIAL_CHARS);
}
else 
{
	$password1 = NULL;
}

if (isset($_SESSION['create_account_password2']))
{
	$password2 = filter_var($_SESSION['create_account_password2'],FILTER_SANITIZE_SPECIAL_CHARS);
}
else 
{
	$password2 = NULL;
}

if (isset($_SESSION['create_account_email']))
{
	$email = filter_var($_SESSION['create_account_email'],FILTER_SANITIZE_SPECIAL_CHARS);
}
else 
{
	$email = NULL;
}
