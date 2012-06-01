<?php
    
    require_once 'core/configcore.php';
    require_once DIR_ADMIN_VIEWS."ViewIndex.php";
    require_once DIR_ADMIN_MODELS.'ModelArticles.php';
    
    $template = new ViewIndex();
    $model = new ModelArticles();
    $template->assign("articles", $model->getAllArticles());
    $template->display("add_article.tpl");
?>