<?php /* Smarty version Smarty-3.1.8, created on 2012-04-21 00:11:20
         compiled from "core/templates/templates/list_templates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11942713534f911f9674d614-67102081%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '097b827695ed5abbb01de3eacb32a2132b0962e2' => 
    array (
      0 => 'core/templates/templates/list_templates.tpl',
      1 => 1334952675,
      2 => 'file',
    ),
    'e87d9a6c06ef593309a45181120117a8e676c5eb' => 
    array (
      0 => 'core/templates/templates/main.tpl',
      1 => 1334862392,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11942713534f911f9674d614-67102081',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f911f968609d8_71327279',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f911f968609d8_71327279')) {function content_4f911f968609d8_71327279($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" xml:lang="ru">
<head>
   <title>Templates</title>	
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
    
<a href="">Добавить</a><a href="">На главную</a>

<div>
  <table>
    <tr>
      <td>Название</td><td>Путь</td><td>Дата добавления</td><td></td>
   </tr>
   <?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
   <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['template']->value['title'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['template']->value['path'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['template']->value['created'];?>
</td><td>Удалить</td>
    </tr>
    <?php } ?>
  </table>

</div>

</body>
</html><?php }} ?>