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
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f97e9c4789170_94747931',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f97e9c4789170_94747931')) {function content_4f97e9c4789170_94747931($_smarty_tpl) {?><form method="post" enctype="multipart/form-data" action="add_tpl.php">
Название: <input type="text" name="title" /><br />
Количество блоков: <input type="text" name="sum_blocks"><br />
Файл: <input type="file" name="filename"><br />
<input type="submit" value="Добавить">
</form><?php }} ?>