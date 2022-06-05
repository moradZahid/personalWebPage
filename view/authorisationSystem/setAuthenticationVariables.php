<?php
$url = filter_var($_SESSION['index'],FILTER_SANITIZE_SPECIAL_CHARS); 
$fonts = filter_var($_SESSION['fonts'],FILTER_SANITIZE_SPECIAL_CHARS);

if ($_SESSION['msg'] !== NULL)
{
	$msg = filter_var($_SESSION['msg'],FILTER_SANITIZE_SPECIAL_CHARS);
}
else 
{
	$msg = NULL;
}

if (isset($_SESSION['authentication_login']))
{
	$login = filter_var($_SESSION['authentication_login'],FILTER_SANITIZE_SPECIAL_CHARS);
}
else 
{
	$login = NULL;
}