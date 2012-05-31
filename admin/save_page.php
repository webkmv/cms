<?php

	require_once 'core/configcore.php';
	require_once DIR_ADMIN_MODELS."ModelPages.php";
	
	try
	{
		$model = new ModelPages();
		$model->SavePage($_POST);
		
		header("Location: pages.php");
	}
	catch (Exception $exc)
	{
		die ($exc->getMessage());
	}

?>