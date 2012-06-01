<?php /* Smarty version Smarty-3.1.8, created on 2012-06-01 11:16:55
         compiled from "core/templates/templates/settings_reviews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11700115194fc85b7c0b7963-33367595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4747029784141a795e967493638b896b16ff21ca' => 
    array (
      0 => 'core/templates/templates/settings_reviews.tpl',
      1 => 1338535011,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11700115194fc85b7c0b7963-33367595',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc85b7c0fbbd9_88584483',
  'variables' => 
  array (
    'reviews' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc85b7c0fbbd9_88584483')) {function content_4fc85b7c0fbbd9_88584483($_smarty_tpl) {?><form action="add_reviews.php" method="post">
    Введите E-mail: <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['reviews']->value['email'];?>
"><br />
    Отправлять уведомление о новом отзыве на почту: <select name="sendReport">
                                                    <?php if ($_smarty_tpl->tpl_vars['reviews']->value['send_report']=='Нет'){?>
                                                    <option value='Нет'>Нет</option>                                               
                                                    <option value='Да'>Да</option>
                                                    <?php }else{ ?>
                                                    <option value='Да'>Да</option>                                               
                                                    <option value='Нет'>Нет</option>
                                                    <?php }?>
                                                    </select><br/>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['reviews']->value['id'];?>
">
    <input type="submit" value="Сохранить" id="btnSaveSettings" />
</form><?php }} ?>