<?php /* Smarty version Smarty-3.1.8, created on 2012-06-01 08:21:33
         compiled from "core/templates/templates/settings_reviews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6317071184fc85f6d218ee5-11741286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4747029784141a795e967493638b896b16ff21ca' => 
    array (
      0 => 'core/templates/templates/settings_reviews.tpl',
      1 => 1338462472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6317071184fc85f6d218ee5-11741286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reviews' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc85f6d24da00_79837169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc85f6d24da00_79837169')) {function content_4fc85f6d24da00_79837169($_smarty_tpl) {?><form action="add_reviews.php" method="post">
    Введите E-mail: <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['reviews']->value['email'];?>
">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['reviews']->value['id'];?>
">
    <input type="submit" value="Сохранить" id="btnSaveSettings" />
</form><?php }} ?>