<?php /* Smarty version Smarty-3.1.8, created on 2012-06-01 15:25:54
         compiled from "core/templates/templates/settings_booking.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131556664fc86e61117c49-96719992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39741df11e32344656a68f90216e0214398831ab' => 
    array (
      0 => 'core/templates/templates/settings_booking.tpl',
      1 => 1338549013,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131556664fc86e61117c49-96719992',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc86e6118aa82_00463662',
  'variables' => 
  array (
    'booking' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc86e6118aa82_00463662')) {function content_4fc86e6118aa82_00463662($_smarty_tpl) {?><form action="add_booking_mail.php" method="post">
    Введите E-mail: <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['booking']->value['email'];?>
">
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['booking']->value['id'];?>
"><br />
        
    Отправлять на почту данные о бронировании:
    <select name="send_report">
        <?php if (($_smarty_tpl->tpl_vars['booking']->value['send_report']==0)){?>
            <option value=0>Нет</option>
            <option value=1>Да</option>
        <?php }elseif(($_smarty_tpl->tpl_vars['booking']->value['send_report']==1)){?>
            <option value=1>Да</option>
            <option value=0>Нет</option>
        <?php }?>
    </select><br />
    
    <input type="submit" value="Сохранить" />
</form><?php }} ?>