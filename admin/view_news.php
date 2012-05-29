<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS.'ModelNews.php';
require_once DIR_ADMIN_MODELS.'Templates.php';
require_once DIR_ADMIN_VIEWS.'ViewIndex.php';

try 
{
	$id = $_GET["id"];
	$model = new ModelNews();
	$mTemplates = new ModelTemplates();
	$view = new ViewIndex();
	
	$pageData = $model->GetNewsFromId($id);
	//$templates = $mTemplates->GetTemplaesByViewPage((int)$pageData["id_template"]);
	
	$view->assign("nameSection", $pageData["title"]);
	$view->assign("id", $pageData["id"]);
	$view->assign("title", $pageData["title"]);
	$view->assign("keywords", $pageData["keywords"]);
	$view->assign("description", $pageData["description"]);
	//$view->assign("templates", $templates);
	$view->assign("text", $pageData["text"]);
        $view->assign("alias", $pageData["alias"]);
        $view->assign("author", $pageData["author"]);
        $view->assign("published", $pageData["published"]);
        
	
	$view->display("view_news.tpl");
}
catch (Exception $exception)
{
	die($exception->getMessage());
}
?>