<?php

require_once 'core/configcore.php';
require_once DIR_LIBS.'Forms.php';
require_once DIR_LIBS.'Files.php';
require_once DIR_LIBS.'Logs.php';
require_once DIR_ADMIN_MODELS.'ModelPages.php';

try
{
	$form = new Forms();
	
	if(!$form->CheckByEmptyAllInputs($_POST))
	{
		die ("Заполните все поля формы.");
	}
	else
	{
		//данные формы
		$title = $_POST["title"];
		$url = $_POST["url"];
		$idTemplate = (int) $_POST['template'];
		$keywords = $_POST['keywords'];
		$description = $_POST['description'];
		$body = $_POST['body'];
		$dateNow = date("Y-m-j H:i:s");

		//копируем файл на сервер
		$file = new Files($tmpFilename);
		$file->Upload($fileToSave);

		//сохраняем данные о шаблоне в базе
		$model = new ModelPages();
		$model->InsertPage($title, $url, $idTemplate, $keywords, $description, $body, $dateNow);
	}
}
catch (Exception $exception)
{
	die ($exception->getMessage());
}

?>