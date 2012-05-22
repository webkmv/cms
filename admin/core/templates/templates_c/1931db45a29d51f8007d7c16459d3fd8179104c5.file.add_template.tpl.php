<?php /* Smarty version Smarty-3.1.8, created on 2012-05-22 23:33:35
         compiled from "core/templates/templates/add_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4390671024fbbea0f619c13-29281303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1931db45a29d51f8007d7c16459d3fd8179104c5' => 
    array (
      0 => 'core/templates/templates/add_template.tpl',
      1 => 1337713709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4390671024fbbea0f619c13-29281303',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fbbea0f639c55_95088533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fbbea0f639c55_95088533')) {function content_4fbbea0f639c55_95088533($_smarty_tpl) {?><script type="text/javascript" src="core/media/js/tpls.js"></script>
<form method="post" enctype="multipart/form-data" id="formAddTemplate" action="add_tpl.php">
Название: <input type="text" name="title" id="titleAddTemplate" /><br />
Количество блоков: <input type="text" name="sum_blocks" id="sumBlocksAddTemplate"><br />
Файл: <input type="file" name="filename" id="filenameAddTemplate"><br />
<input type="submit" value="Добавить" id="btnAddTpl" />
</form>
<div id="addTemplateErrors"></div><?php }} ?>