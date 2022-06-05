<?php
$url = filter_var($_SESSION['index'],FILTER_SANITIZE_SPECIAL_CHARS); 
$fonts = filter_var($_SESSION['fonts'],FILTER_SANITIZE_SPECIAL_CHARS);
$img = filter_var($_SESSION['images'],FILTER_SANITIZE_SPECIAL_CHARS);

if (isset($_SESSION['login']))
{
	$login = filter_var($_SESSION['login'],FILTER_SANITIZE_SPECIAL_CHARS);
}
else 
{
	$login = NULL;
}