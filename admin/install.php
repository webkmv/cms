<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS.'ModelInstallerCMS.php';
require_once DIR_LIBS.'Logs.php';
try
{
	$log = new Logs();
	$log->AddLog("Run install.");
	$log->AddLog("Creating tables...");
	$model = new ModelInstallerCMS();
	
	//$model->CreateTableTemplates();
	//$log->AddLog("Table 'Templates' created.");

	$model->CreateTablePages();
	$log->AddLog("Teble 'Pages' created");
}
catch (Exception $exception)
{
	$log->AddLog($exception->getMessage());
	die ($exception->getMessage());
}

?>