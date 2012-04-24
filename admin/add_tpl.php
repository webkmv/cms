<?php

require_once 'core/configcore.php';
require_once DIR_LIBS.'Forms.php';
require_once DIR_LIBS.'Files.php';
require_once DIR_ADMIN_MODELS.'Templates.php';

$form = new Forms();
if(!$form->CheckByEmptyAllInputs($_POST))
	die ("Заполните все поля формы.");
else 
{
	$title = $_POST["title"];
	$sumBlocks = (int)$_POST["sum_blocks"];
	$tmpFilename = $_FILES['filename']['tmp_name'];
	$filename = $_FILES['filename']['name'];
	$fileToSave = DIR_ADMIN_TEMPLATES.$filename;
	$dateNow = date("Y-m-j H:i:s");
	
	//копируем файл на сервер
	$file = new Files($tmpFilename);
	$file->Upload($fileToSave);
	
	//сохраняем данные о шаблоне в базе
	$model = new ModelTemplates();
	$model->SaveTemplate(1, $title, $fileToSave, $dateNow, $sumBlocks);
}

?>