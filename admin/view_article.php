<?php

    require_once 'core/configcore.php';
    require_once DIR_ADMIN_VIEWS."ViewIndex.php";
    require_once DIR_ADMIN_MODELS.'ModelArticles.php';
    
    $template = new ViewIndex();
    $model = new ModelArticles();
    
    $article = $model->getArticle($_GET["id"]);
    
    $template->assign("article", $article);
    $template->display("view_article.tpl");

?>