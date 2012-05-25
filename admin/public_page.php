<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS.'ModelPages.php';

try
{
	$id = $_GET["id"];
	$state = $_GET["state"];
	
	$model = new ModelPages();
	$model->UpdatePublished((int)$id, (int)$state);
	
	header('Location: pages.php');
}
catch (Exception $exception)
{
	die ($exception->getMessage());
}
?>