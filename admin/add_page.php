<?php

require_once 'core/configcore.php';
require_once DIR_LIBS.'Forms.php';
require_once DIR_LIBS.'Files.php';
require_once DIR_LIBS.'Logs.php';
require_once DIR_ADMIN_MODELS.'ModelPages.php';

try
{
	//данные формы
	$title = $_POST["title"];
	$url = $_POST["url"];
	$idTemplate = (int) $_POST['template'];
	$keywords = $_POST['keywords'];
	$description = $_POST['description'];
	$body = $_POST['body'];
	$dateNow = date("Y-m-j H:i:s");

	//сохраняем данные о шаблоне в базе
	$model = new ModelPages();
	$model->InsertPage($title, $url, $idTemplate, $keywords, $description, $body, $dateNow);
	
	header('Location: pages.php');
}
catch (Exception $exception)
{
	die ($exception->getMessage());
}

?>