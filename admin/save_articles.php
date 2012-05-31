<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS."ModelArticles.php";

try
{
	$model = new ModelArticles();
	$model->SaveArticles($_POST);
	
	header("Location: articles.php");
}
catch (Exception $exc)
{
	die ($exc->getMessage());
}

?>