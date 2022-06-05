<?php
$_SESSION['login']='anonymous';
$_SESSION['msg']=NULL;
$_SESSION['success']=NULL;

$url = $_SESSION['index'];
$url .= '/controller/frontalController.php';
header('Location:'.$url);