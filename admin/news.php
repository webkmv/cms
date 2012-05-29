<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS.'ModelNews.php';
require_once DIR_ADMIN_VIEWS.'ViewIndex.php';
require_once DIR_LIBS.'Files.php';

try
{
    $model = new ModelNews();
    $view = new ViewIndex();

    $view->assign("nameSection", "Новости");
    $view->assign("news", $model->GetAllNews());
    $view->display("list_news.tpl");
}
catch (Exception $exception)
{
	die ($exception->getMessage());
}
?>