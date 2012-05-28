<?php /* Smarty version Smarty-3.1.8, created on 2012-05-25 13:16:25
         compiled from "add_news.php" */ ?>
<?php /*%%SmartyHeaderCode:9452032444fbf4de96d1307-53481629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04013b4f05f5f44dee9c8c5679480d0d45b5892b' => 
    array (
      0 => 'add_news.php',
      1 => 1337930490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9452032444fbf4de96d1307-53481629',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fbf4de9708b42_49649238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fbf4de9708b42_49649238')) {function content_4fbf4de9708b42_49649238($_smarty_tpl) {?><<?php ?>?php

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
	$published = $_POST['published'];
	$alias = $_POST['alias'];
        $dateNow = date("Y-m-j");
	$author = $_POST['author'];
        $views = 0;
        $published = (isset($_POST["published"]) && strlen($_POST["published"])>0) ? 1 : 0;
        
        
        //сохраняем данные о шаблоне в базе
	$model = new ModelNews();
        $model->InsertNews($title, $keywords, $description, $text, $dateNow,
                           $author, $views, $published,$alias);
	
	//header('Location: news.php');
}
catch (Exception $exception)
{
	die ($exception->getMessage());
}

?<?php ?>><?php }} ?>