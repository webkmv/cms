<?php /* Smarty version Smarty-3.1.8, created on 2012-06-01 11:03:19
         compiled from "core/templates/templates/add_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11597687174fc476284685a3-58886519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1931db45a29d51f8007d7c16459d3fd8179104c5' => 
    array (
      0 => 'core/templates/templates/add_template.tpl',
      1 => 1338470740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11597687174fc476284685a3-58886519',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc47628490305_50215919',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc47628490305_50215919')) {function content_4fc47628490305_50215919($_smarty_tpl) {?><script type="text/javascript" src="core/media/js/tpls.js"></script>
<form method="post" enctype="multipart/form-data" id="formAddTemplate" action="add_tpl.php">
Название: <input type="text" name="title" id="titleAddTemplate" /><br />
Количество блоков: <input type="text" name="sum_blocks" id="sumBlocksAddTemplate"><br />
Файл: <input type="file" name="filename" id="filenameAddTemplate"><br />
<input type="submit" value="Добавить" id="btnAddTpl" />
</form>
<div id="addTemplateErrors"></div><?php }} ?>