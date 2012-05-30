<?php

    require_once "config.php";
    require_once DIR_SITE_MODELS . 'ModelPages.php';
    require_once DIR_SITE_MODELS . 'ModelTemplates.php';
    require_once DIR_SITE_MODELS . 'ModelNews.php';
    require_once DIR_SITE_VIEWS . 'ViewIndex.php';

    try
    {
        $modelPage = new ModelPages();
        $modelNews = new ModelNews();
        $modelTemplate = new ModelTemplates();
        $view = new ViewIndex();
        
        
        // Вывод главной страницы
        
        if (empty($_GET))
        {
            $page = $modelPage->GetPage("index");
            if ($page["published"] == 1)
            {
                // Вывод статического контента
                $view->assign("title", $page['title']);
                $view->assign('content', $page['text']);
                
                // Вывод данных всех модулей
                $view->assign('news', $modelNews->getAllNews());
                
                // Отображение базового шаблона
                $view->display($modelTemplate->GetTemplateName($page["id_template"]));
            }
            else
            {
                $view->assign('content', 'Страница не опубликована');
                $view->display($modelTemplate->GetTemplateName($page["id_template"]));
            }
        }
        
        
        // Вывод остальных страниц
        
        else if (!empty($_GET["page"]))
        {
            $url = $_GET['page'];
            $page = $modelPage->GetPage($url);
            
            switch($url)
            {
                case 'news':
                    
                    if(isset($_GET['id']))
                    {
                        $news = $modelNews->getNewsFromId($_GET['id']);
                        $view->assign("title", $news['title']);
                        $view->assign('content', $news['text']);
                    }
                    else
                    {
                        $news = $modelNews->getAllNews();
                        $view->assign("title", 'Новости');
                        $view->assign('news', $news);
                    }
                    break;
                
                default:
                    if ($page["published"] == 1)
                    {
                        $view->assign("title", $page['title']);
                        $view->assign('content', $page['text']);
                        
                        // Вывод данных всех модулей
                        $view->assign('news', $modelNews->getAllNews());
                    }
                    
                    else
                    {
                        $view->assign('article', 'Страница не опубликована');
                        $view->display($modelTemplate->GetTemplateName($page["id_template"]));
                    }
            }
            
            // Отображение базового шаблона
            $view->display($modelTemplate->GetTemplateName($page["id_template"]));
            
        }
        
    }
    
    
    
    catch (Exception $exc)
    {
            die($exc->getMessage());
    }

?>