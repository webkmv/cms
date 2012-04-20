<?php

require_once "core/views/ViewIndex.php";
require_once "core/models/Templates.php";

$model = new ModelTemplates();
$indexPage = new ViewIndex();
$indexPage->assign("templates", $model->GetTemplates());
$indexPage->display("list_templates.tpl");

?>