<?php 
$url = filter_var($_SESSION['index'],FILTER_SANITIZE_SPECIAL_CHARS); 
$fonts = filter_var($_SESSION['fonts'],FILTER_SANITIZE_SPECIAL_CHARS);

if ($_SESSION['last_expr'] !== NULL)
{
	$last_expr = filter_var($_SESSION['last_expr'],FILTER_SANITIZE_SPECIAL_CHARS);
}
else 
{
	$last_expr = NULL;
}

if ($_SESSION['msg'] !== NULL)
{
	$msg = filter_var($_SESSION['msg'],FILTER_SANITIZE_SPECIAL_CHARS);
}
else 
{
	$msg = NULL;
}

if (isset($_SESSION['success']))
{
	$success = filter_var($_SESSION['success'],FILTER_SANITIZE_SPECIAL_CHARS);
}
else 
{
	$success = NULL;
}

if ($_SESSION['result'] !== NULL)
{
	$result = filter_var($_SESSION['result'],FILTER_SANITIZE_SPECIAL_CHARS);
}
else 
{
	$result = NULL;
}

if ($_SESSION['login'] !== NULL)
{
	$login = filter_var($_SESSION['login'],FILTER_SANITIZE_SPECIAL_CHARS);
}
else 
{
	$login = NULL;
}