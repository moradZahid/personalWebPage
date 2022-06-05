<?php
$_SESSION['login']='anonymous';
$_SESSION['msg']=NULL;
$_SESSION['success']=NULL;
$_SESSION['accounts_page_nbr'] = NULL;
$_SESSION['letter'] = NULL;
$_SESSION['page_nbr'] = NULL;

$url = $_SESSION['index'];
$url .= '/controller/frontalController.php';
header('Location:'.$url);