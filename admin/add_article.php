<?php

    require_once 'core/configcore.php';
    require_once DIR_LIBS.'Forms.php';
    require_once DIR_ADMIN_MODELS.'ModelArticles.php';
    
    try
    {
        //данные формы
        $title = $_POST['title'];
        $description = $_POST['description'];
        $keywords = $_POST['keywords'];
        $text = $_POST['text'];
        $author = $_POST['author'];
        $dateNow = date("Y-m-j");
    
        //сохраняем статью в БД
        $model = new ModelArticles();
        $model->addArticle($title, $description, $keywords, $text, $author, $dateNow);
    }
    catch (Exception $exception)
    {
            die ($exception->getMessage());
    }

?>