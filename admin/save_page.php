<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS."ModelPages.php";

try
{
	$model = new ModelPages();
	$model->SavePage($_POST);

	echo "Страница сохранена!";
}
catch (Exception $exc)
{
	die ($exc->getMessage());
}

?>