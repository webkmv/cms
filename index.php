<?php

require_once "libs/DataBase.php";

$file = new DataBase();
$file->Connect();
echo "Connect!\n";

?>