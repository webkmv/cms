<?php /* Smarty version Smarty-3.1.8, created on 2012-05-25 11:27:33
         compiled from "core/templates/templates/add_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20989980514fbf346555f139-66027927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1931db45a29d51f8007d7c16459d3fd8179104c5' => 
    array (
      0 => 'core/templates/templates/add_template.tpl',
      1 => 1337757961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20989980514fbf346555f139-66027927',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fbf3465590729_30784025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fbf3465590729_30784025')) {function content_4fbf3465590729_30784025($_smarty_tpl) {?><script type="text/javascript" src="core/media/js/tpls.js"></script>
<form method="post" enctype="multipart/form-data" id="formAddTemplate" action="add_tpl.php">
Название: <input type="text" name="title" id="titleAddTemplate" /><br />
Количество блоков: <input type="text" name="sum_blocks" id="sumBlocksAddTemplate"><br />
Файл: <input type="file" name="filename" id="filenameAddTemplate"><br />
<input type="submit" value="Добавить" id="btnAddTpl" />
</form>
<div id="addTemplateErrors"></div><?php }} ?>