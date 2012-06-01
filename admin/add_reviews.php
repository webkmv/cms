<?php

require_once 'core/configcore.php';
require_once DIR_LIBS.'Forms.php';
require_once DIR_LIBS.'Files.php';
require_once DIR_LIBS.'Logs.php';
require_once DIR_ADMIN_MODELS.'ModelReviews.php';

try
{
	//данные формы
	$email = $_POST["email"];
        $id = $_POST["id"];
        
        //сохраняем данные о шаблоне в базе
	$model = new ModelReviews();
        $model->InsertSetReviews($id,$email);
	
	header('Location: reviews.php');
}
catch (Exception $exception)
{
	die ($exception->getMessage());
}

?>