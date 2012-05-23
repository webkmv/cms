<?php
require_once DIR_LIBS."Logs.php";
$sql = "CREATE table news
(`id`         int(10)      NOT NULL AUTO_INCREMENT PRIMARY KEY,
 `title`      varchar(255) NOT NULL,
 `published`  int(2)       NOT NULL,
 `id_block`   int(2)       NOT NULL,
 `alias`      varchar(255) NOT NULL)";
$logs = new Logs();
try
{
    $res = mysql_query($sql);
}
catch (Exception $error)
{
    $logs->AddLog($error->getMessage());
}
?>