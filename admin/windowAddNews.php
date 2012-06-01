<?php

    require_once 'core/configcore.php';
    require_once DIR_ADMIN_VIEWS."ViewIndex.php";
    require_once DIR_ADMIN_MODELS."ModelNews.php";
    
    $template = new ViewIndex();
    $model = new ModelNews();
    $template->assign("news", $model->GetAllNews());
    $template->display("add_news.tpl");
    
?>
