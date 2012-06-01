<?php /* Smarty version Smarty-3.1.8, created on 2012-05-31 21:56:39
         compiled from "core/templates/templates\view_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57464fc7b0d7c83509-27515621%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a2190bb9f619ef892046b3d8463c73554d5b8aa' => 
    array (
      0 => 'core/templates/templates\\view_page.tpl',
      1 => 1338434004,
      2 => 'file',
    ),
    '003ce6510ead167a61d2ec216eb10cab402e967d' => 
    array (
      0 => 'core/templates/templates\\main_templates.tpl',
      1 => 1338434004,
      2 => 'file',
    ),
    'd0ef76e1138847bc4e35399103e1ac09105d3577' => 
    array (
      0 => 'core/templates/templates\\main.tpl',
      1 => 1338434004,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57464fc7b0d7c83509-27515621',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc7b0d7d42564_79080120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc7b0d7d42564_79080120')) {function content_4fc7b0d7d42564_79080120($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
    <title>Страница <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>	
    
    <link href="core/media/css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    <link href="core/media/css/style.css" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript" src="core/media/js/jquery.js"></script>
    <script type="text/javascript" src="core/media/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="core/media/js/jquery.fancybox-1.2.1.pack.js"></script>
    <script type="text/javascript" src="core/media/js/configModals.js"></script>
	<!--script type="text/javascript" src="core/media/js/interface.js"></script-->
	<script type="text/javascript" src="core/media/js/tpls.js"></script>
	<script type="text/javascript" src="core/media/js/pages.js"></script>
	<script type="text/javascript" src="core/media/js/articles.js"></script>
	<script type="text/javascript" src="core/media/js/tiny_mce/tiny_mce.js"></script>
	<script type="text/javascript" src="core/media/js/config_tiny.js"></script>

</head>
<body>
	<!-- // PAGE -->
	<div class="page">
		
	<!-- // CONTENT -->
	<div class="wrap">
		<div class="container">
			
			<!-- // HEADER -->
			<div class="header_container">
				<div class="header_inner">
				
				<div class="adm_button"><a href="#" >Изменить пароль</a> / <a href="#" >Выход</a></div>
				<div class="adm_icon">admin</div>
				
				<i>Версия 25.04</i>
				<a href="http://web-kmv.ru" class="logo">управление сайтом</a>
	
				</div>
				
			</div>
			<div class="clear"></div>
			<!-- HEADER // -->
			
			<div class="left_container">
			
			<!-- left menu -->
			<div class="content_menu">
				<a href="pages.php" class="menu_head ico1">Страницы</a>
				<a href="modules.php" class="menu_head ico2">Модули</a>			
				<a href="#" class="menu_head ico3">Пользователи</a>
				<a href="#" class="menu_head ico4">Настройки</a>
				<a href="tpls.php" class="menu_head ico5">Шаблоны</a>
			</div>
			
			<!-- help block -->
			<div class="helper">
				<h3>Справка</h3>
				<form name="" action="">
					<input class="search" type="text" name="" />
					<input class="search_button" type="submit" value=" " name="" title="найти" />
				</form>
				
				<p>¤  Создание интернет магазина является один из наиболее удачных и потенциально прибыльных способов ведения сетевого бизнеса.<br />  С помощью электронного минимаркета продавать товары можно непосредственно с веб-сайта.</p>	
			</div>
			<br />
			
			<!-- dop punkt -->
			<div class="content_hover" style="display:block;">
				<a href="#">Доп. пункт 1</a>
				<a href="#">Доп. пункт 2</a>
				<a href="#">Доп. пункт 3</a>
				<a href="#">Доп. пункт 4</a>
			</div>
	
			</div>
			
			<div class="main_content">
			<div class="hint">
			</div>
				<br />
				
    
        
<a href="windowAddPage.php" class="addPage">Создать</a>
<div>
<form method="post" id="formPage" action="save_page.php">
	Title: <input type="text" name="title" id="titlePage" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" /><br />
	URL: <input type="text" name="url" id="urlPage" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><br />    
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
	Keywords: <input type="text" name="keywords" id="keywordsPage" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /><br />
	Описание: <textarea rows="10" cols="45" name="description" id="descriptionPage"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea><br />
	Контент:<textarea rows="10" cols="45" name="body" id="bodyPage"><?php echo $_smarty_tpl->tpl_vars['body']->value;?>
</textarea><br />
	<input type="hidden" name="idPage" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
	<input type="submit" value="Сохранить" id="btnPage" />
	<input type="button" name="cancelSaveTpl" value="Назад" onClick="javascript: document.location.href = 'pages.php'";/>
</div>

        
    					
			</div>
     </div></div>
	<!-- CONTENT // -->
		<br />
	</div>
	<!-- PAGE // -->
	
	<div class="clear"></div>
	<!-- // FOOTER -->
	<div class="footer"><div class="footer-inner">
		<div class="copyright">
			<div class="averin">© 2012 Сделано в дизайн студии <a href="#">"Веб-мастер КМВ"</a></div>
		</div>
	</div></div>
	<!-- FOOTER // -->
</body>
</html>
<?php }} ?>