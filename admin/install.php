<?php

require_once 'core/configcore.php';
require_once DIR_ADMIN_MODELS.'ModelInstallerCMS.php';

echo "Creating...";
$model = new ModelInstallerCMS();
$model->CreateTableTemplates();
echo "Table 'Templates' created.";

?>