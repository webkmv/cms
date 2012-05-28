<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS."ModelPages.php";

$template = new ModelPages();
$template->DeletePage($_GET["id"]);
header('Location: pages.php');

?>