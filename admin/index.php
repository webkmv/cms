<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_VIEWS . "ViewIndex.php";

$indexPage = new ViewIndex();
$indexPage->display("main.tpl");
?>