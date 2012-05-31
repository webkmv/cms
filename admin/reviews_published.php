<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS.'ModelReviews.php';
require_once DIR_ADMIN_MODELS.'Templates.php';
require_once DIR_ADMIN_VIEWS.'ViewIndex.php';

try 
{
	$id = $_GET["id"];
	$model = new ModelReviews();
	
        $model->Published($id);
        
        header('Location: reviews.php');
}
catch (Exception $exception)
{
	die($exception->getMessage());
}
?>