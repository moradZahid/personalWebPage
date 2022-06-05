<?php 
$url = filter_var($_SESSION['index'],FILTER_SANITIZE_SPECIAL_CHARS); 
$fonts = filter_var($_SESSION['fonts'],FILTER_SANITIZE_SPECIAL_CHARS);

if ($_SESSION['login'] !== NULL)
{
	$login = filter_var($_SESSION['login'],FILTER_SANITIZE_SPECIAL_CHARS);
}
else 
{
	$login = NULL;
}