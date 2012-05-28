<?php /* Smarty version Smarty-3.1.8, created on 2012-05-25 15:52:02
         compiled from "core/templates/templates/add_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9137123654fbf7151342183-83396409%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e61359f806a9a04e19f4defb674711a3b8c2275' => 
    array (
      0 => 'core/templates/templates/add_page.tpl',
      1 => 1337946708,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9137123654fbf7151342183-83396409',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fbf71513953d6_66228502',
  'variables' => 
  array (
    'templates' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fbf71513953d6_66228502')) {function content_4fbf71513953d6_66228502($_smarty_tpl) {?><script type="text/javascript" src="core/media/js/pages.js"></script>
<script type="text/javascript" src="core/media/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="core/media/js/config_tiny.js"></script>
<form method="post" enctype="multipart/form-data" id="formAddPage" action="add_page.php">
	Title: <input type="text" name="title" id="titleAddPage" /><br />
	URL: <input type="text" name="url" id="urlAddPage"><br />    
	Шаблон: <select name="template" id="listTemplates">
	  <?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
	  	<option value=<?php echo $_smarty_tpl->tpl_vars['template']->value['id'];?>
><?php echo $_smarty_tpl->tpl_vars['template']->value['title'];?>
</option>
	  <?php } ?>
	</select>
	Keywords: <input type="text" name="keywords" id="keywordsAddPage"><br />
	Description: <textarea rows="10" cols="45" name="description" id="descriptionAddPage"></textarea><br />
	<textarea rows="10" cols="45" name="body" id="bodyPage"></textarea><br />
	<input type="submit" value="Добавить" id="btnAddPage" />
</form>
<div id="addPageErrors"></div><?php }} ?>