<?php

require_once 'core/configcore.php';
require_once DIR_LIBS.'Forms.php';
require_once DIR_LIBS.'Files.php';
require_once DIR_LIBS.'Logs.php';
require_once DIR_ADMIN_MODELS.'ModelNews.php';

try
{
	//данные формы
	$title = $_POST["title"];
	$keywords = $_POST['keywords'];
	$description = $_POST['description'];
	$text = $_POST['text'];
	//$published = $_POST['published'];
	$alias = $_POST['alias'];
        $dateNow = date("Y-m-j");
	$author = $_POST['author'];
        $views = 0;
        $published = (isset($_POST["published"]) && strlen($_POST["published"])>0) ? 1 : 0;
        
        
        //сохраняем данные о шаблоне в базе
	$model = new ModelNews();
        $model->InsertNews($title, $keywords, $description, $text, $dateNow,
                           $author, $views, $published,$alias);
	
	header('Location: news.php');
}
catch (Exception $exception)
{
	die ($exception->getMessage());
}

?>