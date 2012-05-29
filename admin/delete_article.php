<?php

    require_once 'core/configcore.php';
    require_once DIR_ADMIN_MODELS."ModelArticles.php";
    
    $article = new ModelArticles();
    $article->DeleteArticle($_GET["id"]);
    header('Location: articles.php');
    
?>