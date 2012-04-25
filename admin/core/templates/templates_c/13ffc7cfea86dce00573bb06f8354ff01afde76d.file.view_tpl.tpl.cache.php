<?php /* Smarty version Smarty-3.1.8, created on 2012-04-25 16:10:24
         compiled from "core/templates/templates/view_tpl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18826911854f97e99326db99-74876638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13ffc7cfea86dce00573bb06f8354ff01afde76d' => 
    array (
      0 => 'core/templates/templates/view_tpl.tpl',
      1 => 1335355822,
      2 => 'file',
    ),
    'e87d9a6c06ef593309a45181120117a8e676c5eb' => 
    array (
      0 => 'core/templates/templates/main.tpl',
      1 => 1335343785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18826911854f97e99326db99-74876638',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f97e99333a9d8_64476475',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f97e99333a9d8_64476475')) {function content_4f97e99333a9d8_64476475($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" xml:lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>View Templates</title>	
    
    <link href="core/media/css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript" src="core/media/js/jquery.js"></script>
    <script type="text/javascript" src="core/media/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="core/media/js/jquery.fancybox-1.2.1.pack.js"></script>
    <script type="text/javascript" src="core/media/js/configModals.js"></script>

</head>
<body>
    
<a href="windowAddTemplate.php" class="addTemplate">Добавить</a> <a href="">На главную</a>
<div>
 <form action="save_tpl.php" method="post">
 	Название: <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['template']->value['title'];?>
"><br />
 	Количество блоков: <input type="text" name="sum_block" value="<?php echo $_smarty_tpl->tpl_vars['template']->value['sum_block'];?>
"><br />
 	<textarea rows="10" cols="45" name="text"><?php echo $_smarty_tpl->tpl_vars['template']->value['text'];?>
</textarea>
 </form>
</div>

</body>
</html><?php }} ?>