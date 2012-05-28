<?php
    
    require_once "core/configcore.php";
    require_once DIR_ADMIN_VIEWS."ViewIndex.php";
    require_once DIR_ADMIN_MODELS."ModelArticles.php";
    
    try
    {
	$model = new ModelArticles();
	$view = new ViewIndex();

	$view->assign("nameSection", "Статьи");
	$view->assign("articles", $model->getAllArticles());
	$view->display("list_articles.tpl");
    }
        catch (Exception $exception)
    {
        die ($exception->getMessage());
    }
?>