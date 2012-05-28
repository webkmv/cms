<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_VIEWS."ViewIndex.php";
require_once DIR_ADMIN_MODELS."Templates.php";

$template = new ViewIndex();
$model = new ModelTemplates();
$template->assign("nameSection", "Новая страница");
$template->assign("templates", $model->GetTemplates());
$template->display("add_page.tpl");

?>