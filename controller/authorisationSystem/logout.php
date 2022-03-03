<?php
$_SESSION['add entries permission']='not allowed';
$_SESSION['admin services permission']='not allowed';
$_SESSION['login']='anonymous';
$_SESSION['msg']=NULL;

$url = $_SESSION['index'];
$url .= '/controller/frontalController.php';
header('Location:'.$url);