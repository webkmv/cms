<?php /* Smarty version Smarty-3.1.8, created on 2012-05-06 23:46:40
         compiled from "core/templates/templates/add_template.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3693585994fa6d520d49e82-19098673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '3693585994fa6d520d49e82-19098673',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fa6d520ddedf8_58949112',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa6d520ddedf8_58949112')) {function content_4fa6d520ddedf8_58949112($_smarty_tpl) {?><form method="post" enctype="multipart/form-data" action="add_tpl.php">
Название: <input type="text" name="title" /><br />
Количество блоков: <input type="text" name="sum_blocks"><br />
Файл: <input type="file" name="filename"><br />
<input type="submit" value="Добавить">
</form><?php }} ?>