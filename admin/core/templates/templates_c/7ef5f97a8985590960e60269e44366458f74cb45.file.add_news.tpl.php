<?php /* Smarty version Smarty-3.1.8, created on 2012-05-29 00:50:10
         compiled from "core/templates/templates\add_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:49254fc3e502ecd323-74691429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ef5f97a8985590960e60269e44366458f74cb45' => 
    array (
      0 => 'core/templates/templates\\add_news.tpl',
      1 => 1338197676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '49254fc3e502ecd323-74691429',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc3e502f22e44_73724741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc3e502f22e44_73724741')) {function content_4fc3e502f22e44_73724741($_smarty_tpl) {?><script type="text/javascript" src="../../core/media/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="core/media/js/config_tiny.js"></script>

<form method="post" enctype="multipart/form-data" id="formAddNews" action="add_news.php">
	Заголовок: <input type="text" name="title" id="titleAddNews" /><br />
	Ключевые слова: <input type="text" name="keywords" id="keywordsAddNews"><br />    
	Описание: <textarea rows="10" cols="45" name="description" id="descNews"></textarea><br /> 
	Текст новости: <textarea rows="10" cols="45" name="text" id="textNews"></textarea><br /> 
	Ссылка: <input type="text" name="alias" id="aliasAddNews" /><br />
	Автор: <input type="text" name="author" id="authorAddNews" /><br />
	Опубликовать: <input type="checkbox" name="published" value="0" />
		<input type="submit" value="Добавить" id="btnAddNews" />
</form>

<div id="addNewsErrors"></div>
<?php }} ?>