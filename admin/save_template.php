<?php

require_once '../config.php';
require_once DIR_ADMIN_MODELS.'Templates.php';
require_once DIR_LIBS.'Files.php';
require_once DIR_LIBS.'Forms.php';

$form = new Forms();

if ($form->CheckAllInputs($_POST))
{
	$idUser = 0;
	$title = $_POST["title"];
	$filename = $_POST["filename"];
	$sumBlock = $_POST["sum_block"];
	$created = ("Y-m-j H:i:s");
	
	$file = new Files($filename);
	$file->Upload(DIR_ADMIN_TEMPLATES);
	
	$template = new ModelTemplates();
	$template->SaveTemplate($idUser, $title, $path, $created, $sumBlock);
	
	header('Location: tpls.php');
}
else
{
	die ("Укажите все данные формы.");
}