<?php
if (!filter_has_var(INPUT_POST,'method'))
{
	throw new IsNotSet('method');
}
$method = filter_input(INPUT_POST,'method',FILTER_SANITIZE_SPECIAL_CHARS);
switch ($method)
{
	case 'file' :
		// check for modality

		if (!filter_has_var(INPUT_POST,'modality'))
		{
			throw new IsNotSet('modality');
		}
		$mod=filter_input(INPUT_POST,'modality',FILTER_SANITIZE_SPECIAL_CHARS);

		if ($mod != 'eng:fr' && $mod != 'fr:eng')
		{
			throw new UnexpectedValue('modality');
		}

		// check for file upload

		if (!isset($_FILES['data_file']['error']))
		{
			throw new FileError('error while uploading file');
		}

		if ($_FILES['data_file']['error'] == UPLOAD_ERR_FORM_SIZE)
		{
			throw new FileError('error: file size has to be less than 50ko');
		}

		if ($_FILES['data_file']['error']!=UPLOAD_ERR_OK)
		{
			throw new FileError('error while uploading file');
		}
		break;

	case 'manually' :
		if (!filter_has_var(INPUT_POST,'french'))
		{
			throw new IsNotSet('French expression');
		}
		$french = filter_input(INPUT_POST,'french',FILTER_SANITIZE_SPECIAL_CHARS);
		if (strlen($french) < 1)
		{
			throw new EmptyString('French expression');
		}

		if (!filter_has_var(INPUT_POST,'english'))
		{
			throw new IsNotSet('English expression');
		}
		$english = filter_input(INPUT_POST,'english',FILTER_SANITIZE_SPECIAL_CHARS);
		if (strlen($english) < 1)
		{
			throw new EmptyString('English expression');
		}
		break;

	default:
		throw new UnexpectedValue('method');
}
