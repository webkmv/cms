<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS.'Templates.php';
require_once DIR_LIBS.'Files.php';
require_once DIR_LIBS.'Forms.php';
$form = new Forms();

if ($form->CheckByEmptyAllInputs($_POST))
{
	$id = $_POST["idToFile"];
	$idUser = 0;
	$title = $_POST["title"];
	$filename = $_POST["pathToFile"];
	$sumBlock = $_POST["sum_block"];
	$dataFile = $_POST["text"];
	
	$file = new Files($filename);
	$file->Write($dataFile);
	
	$template = new ModelTemplates();
	$template->SaveTemplate($id, $idUser, $title, $filename, $sumBlock);
	
	echo "Шаблон сохранен!";
}
else
{
	die ("Укажите все данные формы.");
}

?>
