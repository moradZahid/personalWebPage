<?php
include_once(dirname(__FILE__).'/TranslationQuery.class.php');


/****************************** Check for Errors **************************************/

// set $expression and $language
include_once(dirname(__FILE__).'/translate_checkForErrors.php');


/****************************** Query processing **************************************/

$query = new TranslationQuery($expression,$language);

$query->execute();


/**************************** Display the result ***************************************/ 

$_SESSION['result'] = $query->getResult();
$url = $_SESSION['index'];
$url .= '/controller/frontalController.php';
header('Location:'.$url);