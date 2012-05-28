<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS.'ModelPages.php';

try
{	
	$model = new ModelPages();
	$model->UpdatePublished($_GET);
	
	header('Location: pages.php');
}
catch (Exception $exception)
{
	die ($exception->getMessage());
}
?>