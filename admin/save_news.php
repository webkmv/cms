<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS."ModelNews.php";

try
{
	$model = new ModelNews();
	$model->SaveNews($_POST);

	header("Location: news.php");
}
catch (Exception $exc)
{
	die ($exc->getMessage());
}

?>