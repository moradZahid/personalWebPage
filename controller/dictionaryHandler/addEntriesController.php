<?php
session_start();
include_once(dirname(__FILE__).'/dictionaryHandlerExceptions.php');


try
{
	include_once(dirname(__FILE__).'/addEntries.php');
}
catch(ServiceIsNotSet $e)
{
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'Error. Action not allowed.';
	}
	else
	{
		$_SESSION['msg'] = 'Erreur. Action non autorisée. ';
	}
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php';
	header('Location:'.$url);
}
catch(IsNotSet $e)
{
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'Warning: The ';
		$_SESSION['msg'] .= $e->getMessage();
		$_SESSION['msg'] .= ' is not set';
	}
	else 
	{
		switch ($e->getMessage())
		{
			case 'method' :
				$_SESSION['msg'] = 'Attention: La méthode n\'est pas sélectionnée';
				break;
			case 'modality':
				$_SESSION['msg'] = 'Attention: La modalité n\'est pas sélectionnée';
				break;
			default :
				$_SESSION['msg'] = 'Erreur. Action non autorisée. ';
		}
	}
	$url = $_SESSION['index'];
	$url .='/controller/frontalController.php?from='.$service;
	header('Location:'.$url);
}
catch(UnexpectedValue $e)
{
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'Error. Action not allowed.';
	}
	else
	{
		$_SESSION['msg'] = 'Erreur. Action non autorisée. ';
	}
	$url = $_SESSION['index'];
	$url .='/controller/frontalController.php?from='.$service;
	header('Location:'.$url);
}
catch(FileError $e)
{
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = $e->getMessage();
	}
	else
	{
		$_SESSION['msg'] = 'Erreur durant le transfert de fichier.';
	}
	$url = $_SESSION['index'];
	$url .='/controller/frontalController.php?from='.$service;
	header('Location:'.$url);
}
catch(EmptyString $e)
{
	if ($_SESSION['lang'] == 'english')
	{
		$_SESSION['msg'] = 'Error. All the field are mandatory.';
	}
	else
	{
		$_SESSION['msg'] = 'Erreur. Tous les champs sont obligatoires.';
	}
	$url = $_SESSION['index'];
	$url .= '/controller/frontalController.php?from=';
	$url .= $service;
	header('Location:'.$url);
}
