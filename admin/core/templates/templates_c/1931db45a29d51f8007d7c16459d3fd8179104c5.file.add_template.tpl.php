<?php /* Smarty version Smarty-3.1.8, created on 2012-05-28 09:33:19
         compiled from "core/templates/templates/add_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14916174244fc325d21b4f01-59934266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1931db45a29d51f8007d7c16459d3fd8179104c5' => 
    array (
      0 => 'core/templates/templates/add_template.tpl',
      1 => 1338150252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14916174244fc325d21b4f01-59934266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc325d2209178_93198604',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc325d2209178_93198604')) {function content_4fc325d2209178_93198604($_smarty_tpl) {?><script type="text/javascript" src="core/media/js/tpls.js"></script>
<form method="post" enctype="multipart/form-data" id="formAddTemplate" action="add_tpl.php">
Название: <input type="text" name="title" id="titleAddTemplate" /><br />
Количество блоков: <input type="text" name="sum_blocks" id="sumBlocksAddTemplate"><br />
Файл: <input type="file" name="filename" id="filenameAddTemplate"><br />
<input type="submit" value="Добавить" id="btnAddTpl" />
</form>
<div id="addTemplateErrors"></div><?php }} ?>