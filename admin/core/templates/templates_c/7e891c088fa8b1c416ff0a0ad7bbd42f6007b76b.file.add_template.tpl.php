<?php /* Smarty version Smarty-3.1.8, created on 2012-05-29 00:56:22
         compiled from "core/templates/templates\add_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93124fc3e6764e3941-52973662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e891c088fa8b1c416ff0a0ad7bbd42f6007b76b' => 
    array (
      0 => 'core/templates/templates\\add_template.tpl',
      1 => 1338203606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93124fc3e6764e3941-52973662',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc3e676537764_02782108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc3e676537764_02782108')) {function content_4fc3e676537764_02782108($_smarty_tpl) {?><script type="text/javascript" src="core/media/js/tpls.js"></script>
<form method="post" enctype="multipart/form-data" id="formAddTemplate" action="add_tpl.php">
Название: <input type="text" name="title" id="titleAddTemplate" /><br />
Количество блоков: <input type="text" name="sum_blocks" id="sumBlocksAddTemplate"><br />
Файл: <input type="file" name="filename" id="filenameAddTemplate"><br />
<input type="submit" value="Добавить" id="btnAddTpl" />
</form>
<div id="addTemplateErrors"></div><?php }} ?>