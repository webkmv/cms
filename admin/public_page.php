<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS.'ModelPages.php';

try
<<<<<<< HEAD
{
	$id = $_GET["id"];
	$state = $_GET["state"];
	
	$model = new ModelPages();
	$model->UpdatePublished($id, $state);
=======
{	
	$model = new ModelPages();
	$model->UpdatePublished($_GET);
>>>>>>> 18246f1e275dbc492644b7563217fa2aa8528a41
	
	header('Location: pages.php');
}
catch (Exception $exception)
{
	die ($exception->getMessage());
}
?>