<?php /* Smarty version Smarty-3.1.8, created on 2012-04-24 19:58:57
         compiled from "core/templates/templates/add_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1695599024f96c02a88bb90-41131281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1931db45a29d51f8007d7c16459d3fd8179104c5' => 
    array (
      0 => 'core/templates/templates/add_template.tpl',
      1 => 1335283089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1695599024f96c02a88bb90-41131281',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f96c02a8b6551_95739823',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f96c02a8b6551_95739823')) {function content_4f96c02a8b6551_95739823($_smarty_tpl) {?><form method="post" enctype="multipart/form-data" action="add_tpl.php">
Название: <input type="text" name="title" /><br />
Количество блоков: <input type="text" name="sum_blocks"><br />
Файл: <input type="file" name="filename"><br />
<input type="submit" value="Добавить">
</form><?php }} ?>