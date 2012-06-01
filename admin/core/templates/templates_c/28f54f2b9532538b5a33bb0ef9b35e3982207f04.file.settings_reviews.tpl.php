<?php /* Smarty version Smarty-3.1.8, created on 2012-05-31 21:00:41
         compiled from "core/templates/templates\settings_reviews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265294fc7a3b9cb9352-07714924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28f54f2b9532538b5a33bb0ef9b35e3982207f04' => 
    array (
      0 => 'core/templates/templates\\settings_reviews.tpl',
      1 => 1338434004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265294fc7a3b9cb9352-07714924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reviews' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc7a3b9cfdfd0_34817930',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc7a3b9cfdfd0_34817930')) {function content_4fc7a3b9cfdfd0_34817930($_smarty_tpl) {?><form action="add_reviews.php" method="post">
    Введите E-mail: <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['reviews']->value['email'];?>
">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['reviews']->value['id'];?>
">
    <input type="submit" value="Сохранить" id="btnSaveSettings" />
</form><?php }} ?>