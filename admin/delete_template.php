<?php

require_once '../config.php';
require_once DIR_ADMIN_MODELS."Templates.php";

$template = new ModelTemplates();
$template->DeleteTemplate($_GET["id"]);

