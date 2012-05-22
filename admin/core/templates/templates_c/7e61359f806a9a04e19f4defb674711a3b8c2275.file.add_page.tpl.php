<?php /* Smarty version Smarty-3.1.8, created on 2012-05-22 23:31:10
         compiled from "core/templates/templates/add_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:640883754fbbe8f2901d45-99497916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e61359f806a9a04e19f4defb674711a3b8c2275' => 
    array (
      0 => 'core/templates/templates/add_page.tpl',
      1 => 1337715065,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '640883754fbbe8f2901d45-99497916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fbbe8f2943484_51629063',
  'variables' => 
  array (
    'templates' => 0,
    'template' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fbbe8f2943484_51629063')) {function content_4fbbe8f2943484_51629063($_smarty_tpl) {?><script type="text/javascript" src="core/media/js/pages.js"></script>
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
	<textarea rows="10" cols="45" name="body" id="bodyAddPage"></textarea><br />
	<input type="submit" value="Добавить" id="btnAddPage" />
</form>
<div id="addPageErrors"></div><?php }} ?>