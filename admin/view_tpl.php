<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS.'Templates.php';
require_once DIR_ADMIN_VIEWS.'ViewIndex.php';
require_once DIR_LIBS.'Files.php';

$id = $_GET["id"];

$model = new ModelTemplates();
$view = new ViewIndex();
$templateData = $model->GetTemplateFromId($id);

$file = new Files($templateData["path"]);
$templateData["text"] = $file->ReadFile();

$view->assign("template", $templateData);
$view->display("view_tpl.tpl");
?>