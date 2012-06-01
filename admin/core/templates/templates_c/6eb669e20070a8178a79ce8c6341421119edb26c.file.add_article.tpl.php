<?php /* Smarty version Smarty-3.1.8, created on 2012-05-31 16:06:23
         compiled from "core/templates/templates/add_article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13691265394fc4986098d421-76969441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6eb669e20070a8178a79ce8c6341421119edb26c' => 
    array (
      0 => 'core/templates/templates/add_article.tpl',
      1 => 1338470740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13691265394fc4986098d421-76969441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc498609b77f3_93667801',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc498609b77f3_93667801')) {function content_4fc498609b77f3_93667801($_smarty_tpl) {?><script type="text/javascript" src="../../core/media/js/tiny_mce/tiny_mce.js"></script>
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