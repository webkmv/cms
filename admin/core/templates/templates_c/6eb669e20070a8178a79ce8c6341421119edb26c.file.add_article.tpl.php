<?php /* Smarty version Smarty-3.1.8, created on 2012-05-28 12:43:50
         compiled from "core/templates/templates/add_article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:539374544fc356e6e8db97-41150356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eb669e20070a8178a79ce8c6341421119edb26c' => 
    array (
      0 => 'core/templates/templates/add_article.tpl',
      1 => 1338199954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '539374544fc356e6e8db97-41150356',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc356e6eb6843_39650307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc356e6eb6843_39650307')) {function content_4fc356e6eb6843_39650307($_smarty_tpl) {?><script type="text/javascript" src="core/media/js/articles.js"></script>
<script type="text/javascript" src="../../core/media/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="core/media/js/config_tiny.js"></script>

    <form method="post" enctype="multipart/form-data" id="formAddArticle" action="add_article.php">
        Заголовок: <input type="text" name="title" id="titleAddArticle" /><br />
        Описание: <textarea rows="10" cols="45" name="description" id="descriptionAddArticle"></textarea><br /> 
        Ключевые слова: <input type="text" name="keywords" id="keywordsAddArticle" /><br />
        Содержание: <textarea rows="30" cols="80" name="text" id="textAddArticle" ></textarea><br /> 
        Автор: <input type="text" name="author" id="authorAddArticle" /><br />
        
        <input type="submit" value="Добавить" id="btnAddArticle" />
    </form>
    
<div id="addArticleErrors"></div><?php }} ?>