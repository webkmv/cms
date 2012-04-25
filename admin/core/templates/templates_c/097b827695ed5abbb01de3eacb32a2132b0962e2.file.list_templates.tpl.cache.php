<?php /* Smarty version Smarty-3.1.8, created on 2012-04-25 14:55:37
         compiled from "core/templates/templates/list_templates.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5002076314f91cef8999a63-85380934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '097b827695ed5abbb01de3eacb32a2132b0962e2' => 
    array (
      0 => 'core/templates/templates/list_templates.tpl',
      1 => 1335351333,
      2 => 'file',
    ),
    'e87d9a6c06ef593309a45181120117a8e676c5eb' => 
    array (
      0 => 'core/templates/templates/main.tpl',
      1 => 1335343785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5002076314f91cef8999a63-85380934',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f91cef8c077e3_55474771',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f91cef8c077e3_55474771')) {function content_4f91cef8c077e3_55474771($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" xml:lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Templates</title>	
    
    <link href="core/media/css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript" src="core/media/js/jquery.js"></script>
    <script type="text/javascript" src="core/media/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="core/media/js/jquery.fancybox-1.2.1.pack.js"></script>
    <script type="text/javascript" src="core/media/js/configModals.js"></script>

</head>
<body>
    
<a href="windowAddTemplate.php" class="addTemplate">Добавить</a> <a href="">На главную</a>

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
      <td><a href="view_tpl.php?id=<?php echo $_smarty_tpl->tpl_vars['template']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['template']->value['title'];?>
</a></td><td><?php echo $_smarty_tpl->tpl_vars['template']->value['path'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['template']->value['created'];?>
</td><td><a href="delete_template.php?id=<?php echo $_smarty_tpl->tpl_vars['template']->value['id'];?>
">Удалить</a></td>
    </tr>
    <?php } ?>
  </table>
</div>

</body>
</html><?php }} ?>