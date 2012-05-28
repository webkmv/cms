<?php

require_once "config.php";
require_once DIR_SITE_MODELS.'ModelPages.php';
require_once DIR_SITE_MODELS.'ModelTemplates.php';
require_once DIR_SITE_VIEWS.'ViewIndex.php';

try
{
	$modelPage = new ModelPages();
	$view = new ViewIndex();
	$modelTemplate = new ModelTemplates();
	
	if (empty($_GET))
	{
		$page = $modelPage->GetPage("index");
		$view->assign("title", $page["title"]);
		$view->assign("content", $page["text"]);
		$view->display($modelTemplate->GetTemplateName($page["id_template"]));	
	}
	
	else if (!empty($_GET["page"]))
	{
		$url = $_GET["page"];
		$page = $modelPage->GetPage($url);
		$view->assign("title", $page["title"]);
		$view->assign("content", $page["text"]);
		$view->display($modelTemplate->GetTemplateName($page["id_template"]));
	}
}
catch (Exception $exc)
{
	die($exc->getMessage());
}
?>