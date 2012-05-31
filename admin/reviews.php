<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS.'ModelReviews.php';
require_once DIR_ADMIN_VIEWS.'ViewIndex.php';
require_once DIR_LIBS.'Files.php';

try
{
    $model = new ModelReviews();
    $view = new ViewIndex();

    $view->assign("nameSection", "Отзывы");
    $view->assign("reviews", $model->getAllReviews());
    $view->display("list_reviews.tpl");
}
catch (Exception $exception)
{
	die ($exception->getMessage());
}
?>