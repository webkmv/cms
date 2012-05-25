<?php
require_once DIR_LIBS.'DataBase.php';
require_once DIR_LIBS.'Logs.php';

$log = new Logs();
$db = new DataBase();
$db->Connect();

    if($_GET['action'] = 'install')
    {
        $sql = "CREATE table news
        (`id`          int(10)      NOT NULL AUTO_INCREMENT PRIMARY KEY,
         `title`       varchar(255) NOT NULL,
         `keywords`    varchar(255) NOT NULL,
         `description` text         NOT NULL,
         `text`        text         NOT NULL,
         `date`        varchar(100) NOT NULL,
         `author`      varchar(150) NOT NULL,
         `views`       int(10)      NOT NULL,
         `published`   tinyint(2)   NOT NULL,
         `alias`       varchar(255) NOT NULL)";
         
        $logs = new Logs();
        
        try
        {
            $res = mysql_query($sql);
        }
        catch (Exception $error)
        {
            $logs->AddLog($error->getMessage());
        }
    }
    else
    {
        die('Обращаться на прямую к файлу запрещено! Установите модуль через Администраторский раздел.');        
    }
?>