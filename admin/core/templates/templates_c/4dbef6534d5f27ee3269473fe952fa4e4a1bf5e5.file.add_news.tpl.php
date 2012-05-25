<?php /* Smarty version Smarty-3.1.8, created on 2012-05-25 11:21:36
         compiled from "core/templates/templates/add_news.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1207727014fbf2433d45a99-38558775%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4dbef6534d5f27ee3269473fe952fa4e4a1bf5e5' => 
    array (
      0 => 'core/templates/templates/add_news.tpl',
      1 => 1337930464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1207727014fbf2433d45a99-38558775',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fbf2433d9e613_90263277',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fbf2433d9e613_90263277')) {function content_4fbf2433d9e613_90263277($_smarty_tpl) {?><script type="text/javascript" src="core/media/js/news.js"></script>
<form method="post" enctype="multipart/form-data" id="formAddNews" action="add_news.php">
	Заголовок: <input type="text" name="title" id="titleAddNews" /><br />
	Ключевые слова: <input type="text" name="keywords" id="urlAddNews"><br />    
	Описание: <input type="text" name="description" id="keywordsAddNews" /><br />
	Текст новости: <input type="text" name="text" id="bodyAddNews" /><br >
	Опубликовать: <input type="text" name="published" id="publishedAddNews" /><br />
	Ссылка: <input type="text" name="alias" id="aliasAddNews" /><br />
	Автор: <input type="text" name="alias" id="author" /><br />
	Опубликовать: <input type="checkbox" name="published" value="0" />
		<input type="submit" value="Добавить" id="btnAddNews" />
</form>
<div id="addNewsErrors"></div><?php }} ?>