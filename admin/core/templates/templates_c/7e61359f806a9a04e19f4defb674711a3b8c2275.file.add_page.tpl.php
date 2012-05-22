<?php /* Smarty version Smarty-3.1.8, created on 2012-05-22 23:07:39
         compiled from "core/templates/templates/add_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18567559944fbbd1b4295b69-27433183%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e61359f806a9a04e19f4defb674711a3b8c2275' => 
    array (
      0 => 'core/templates/templates/add_page.tpl',
      1 => 1337713654,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18567559944fbbd1b4295b69-27433183',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fbbd1b42b9b10_77187238',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fbbd1b42b9b10_77187238')) {function content_4fbbd1b42b9b10_77187238($_smarty_tpl) {?>
<script type="text/javascript" src="core/media/js/pages.js"></script>
<form method="post" enctype="multipart/form-data" id="formAddPage" action="add_page.php">
Title: <input type="text" name="title" id="titleAddPage" /><br />
URL: <input type="text" name="url" id="urlAddPage"><br />
Keywords: <input type="text" name="keywords" id="keywordsAddPage"><br />
Description: <textarea rows="10" cols="45" name="description" id="descriptionAddPage"></textarea><br />
<textarea rows="10" cols="45" name="body" id="bodyAddPage"></textarea><br />
<input type="submit" value="Добавить" id="btnAddPage" />
</form>
<div id="addPageErrors"></div><?php }} ?>