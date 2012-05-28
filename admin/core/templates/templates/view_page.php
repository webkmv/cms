<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS.'ModelPages.php';
require_once DIR_ADMIN_MODELS.'Templates.php';
require_once DIR_ADMIN_VIEWS.'ViewIndex.php';

try 
{
	$id = $_GET["id"];
	$model = new ModelPages();
	$mTemplates = new ModelTemplates();
	$view = new ViewIndex();
	
	$pageData = $model->GetPageById($id);
	$templates = $mTemplates->GetTemplaesByViewPage((int)$pageData["id_template"]);
	
	$view->assign("nameSection", $pageData["title"]);
	$view->assign("id", $pageData["id"]);
	$view->assign("title", $pageData["title"]);
	$view->assign("url", $pageData["url"]);
	$view->assign("keywords", $pageData["keywords"]);
	$view->assign("description", $pageData["description"]);
	$view->assign("templates", $templates);
	$view->assign("body", $pageData["text"]);
	
	$view->display("view_page.tpl");
}
catch (Exception $exception)
{
	die($exception->getMessage());
}
?>