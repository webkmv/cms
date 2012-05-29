<?php

require_once "config.php";
require_once DIR_SITE_MODELS.'ModelPages.php';
require_once DIR_SITE_MODELS.'ModelTemplates.php';
require_once DIR_SITE_MODELS.'ModelArticles.php';
require_once DIR_SITE_VIEWS.'ViewIndex.php';


    try
    {
        $modelPage = new ModelPages();
        $view = new ViewIndex();
        $modelTemplate = new ModelTemplates();
        $modelArticles = new ModelArticles();
    
        if (empty($_GET))
        {
            $page = $modelPage->GetPage("index");
            if ($page["published"] == 1)
            {
                $article = $modelArticles->getArticle('index');
                $view->assign('article', $article['text']);
                $view->assign("title", $page["title"]);
                //$view->assign("content", $page["text"]);
                //$view->assign("articles", $modelArticles->getArticle($_GET['id']));
                $view->display($modelTemplate->GetTemplateName($page["id_template"]));
            }
            else
            {
                die ("Страница не опубликована.");
            }
        }

        else if (!empty($_GET["page"]))
        {
            $url = $_GET["page"];
            $page = $modelPage->GetPage($url);
            if ($page["published"] == 1)
            {
                $article = $modelArticles->getArticle($url);
                $view->assign('title', $page['title']);
                $view->assign('article', $article['text']);
                $view->display($modelTemplate->GetTemplateName($page["id_template"]));
            }
            else
            {
                die ("Страница не опубликована.");
            }
        }
    }
    
    catch (Exception $exc)
    {
            die($exc->getMessage());
    }

?>