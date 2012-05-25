<?php

    require_once 'core/configcore.php';
    require_once DIR_ADMIN_MODELS."ModelNews.php";
    
    $news = new ModelNews();
    $news -> DeleteNews($_GET["id"]);
    header('Location: news.php');
    
?>