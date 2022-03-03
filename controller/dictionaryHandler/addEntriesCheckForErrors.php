<?php

// check for modality

if (!filter_has_var(INPUT_POST,'modality'))
{
	throw new IsNotSet();
}
$mod=filter_input(INPUT_POST,'modality',FILTER_SANITIZE_SPECIAL_CHARS);

if ($mod != 'eng:fr' && $mod != 'fr:eng')
{
	throw new UnexpectedValue();
}

// check for file upload

if (!isset($_FILES['data_file']['error']))
{
	throw new FileError('error while uploading file');
}

if ($_FILES['data_file']['error']==UPLOAD_ERR_FORM_SIZE)
{
	throw new FileError('error: file size has to be less than 50ko');
}

if ($_FILES['data_file']['error']!=UPLOAD_ERR_OK)
{
	throw new FileError('error while uploading file');
}
