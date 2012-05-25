<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_VIEWS."ViewIndex.php";

$template = new ViewIndex();
$template->display("add_news.tpl");
?>
