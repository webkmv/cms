<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_VIEWS."ViewIndex.php";
require_once DIR_ADMIN_MODELS."ModelPages.php";

try {
	$model = new ModelPages();
	$view = new ViewIndex();

	$view->assign("nameSection", "Страницы");
	$view->assign("pages", $model->GetAllPages());
	$view->display("list_pages.tpl");
}
catch (Exception $exception)
{
	die ($exception->getMessage());
}

?>