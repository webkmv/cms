<?php /* Smarty version Smarty-3.1.8, created on 2012-05-07 01:25:42
         compiled from "core/templates/templates/add_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3693585994fa6d520d49e82-19098673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1931db45a29d51f8007d7c16459d3fd8179104c5' => 
    array (
      0 => 'core/templates/templates/add_template.tpl',
      1 => 1336339538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3693585994fa6d520d49e82-19098673',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa6d520ddedf8_58949112',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa6d520ddedf8_58949112')) {function content_4fa6d520ddedf8_58949112($_smarty_tpl) {?><form method="post" enctype="multipart/form-data" id="formAddTemplate" action="add_tpl.php">
Название: <input type="text" name="title" id="titleAddTemplate" /><br />
Количество блоков: <input type="text" name="sum_blocks" id="sumBlocksAddTemplate"><br />
Файл: <input type="file" name="filename" id="filenameAddTemplate"><br />
<input type="submit" value="Добавить" id="btnAddTpl" />
</form>
<div id="addTemplateErrors"></div><?php }} ?>