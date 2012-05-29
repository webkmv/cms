<?php

    require_once 'core/configcore.php';
    require_once DIR_ADMIN_VIEWS."ViewIndex.php";
    require_once DIR_ADMIN_MODELS.'Templates.php';
    require_once DIR_ADMIN_MODELS.'ModelArticles.php';
    
    try
    {
        $id = $_GET['id'];
        $template = new ViewIndex();
        $mTemplates = new ModelTemplates();
        $model = new ModelArticles();
        
        $article = $model->getArticle($id);
        
        $template->assign("nameSection", $article["title"]);
        $template->assign('id', $article['id']);
        $template->assign('title', $article['title']);
        $template->assign('description', $article['description']);
        $template->assign('keywords', $article['keywords']);
        $template->assign('text', $article['text']);
        $template->assign('author', $article['author']);
        
        $template->display("view_article.tpl");
    }
    catch(Exception $exception)
    {
        die($exception->getMessage());
    }
    
?>