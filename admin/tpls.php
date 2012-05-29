<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_VIEWS."ViewIndex.php";
require_once DIR_ADMIN_MODELS."Templates.php";

$model = new ModelTemplates();
$indexPage = new ViewIndex();
$indexPage->assign("nameSection", "Шаблоны");
$indexPage->assign("templates", $model->GetTemplates());
$indexPage->display("list_templates.tpl");

?>