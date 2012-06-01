<?php /* Smarty version Smarty-3.1.8, created on 2012-06-01 08:00:41
         compiled from "core/templates/templates/view_tpl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21129875754fc4ac7141fea0-47228526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13ffc7cfea86dce00573bb06f8354ff01afde76d' => 
    array (
      0 => 'core/templates/templates/view_tpl.tpl',
      1 => 1338470739,
      2 => 'file',
    ),
    '94cda4a6fae88d46fed317da1ccbd07ea9766df0' => 
    array (
      0 => 'core/templates/templates/main_templates.tpl',
      1 => 1338470739,
      2 => 'file',
    ),
    'e87d9a6c06ef593309a45181120117a8e676c5eb' => 
    array (
      0 => 'core/templates/templates/main.tpl',
      1 => 1338470739,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21129875754fc4ac7141fea0-47228526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc4ac714871f4_49772005',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc4ac714871f4_49772005')) {function content_4fc4ac714871f4_49772005($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
    <title>View Templates</title>	
    
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
				
    
        
<a href="windowAddTemplate.php" class="addTemplate">Добавить</a>
<div>
 <form method="post" id="viewTplForm">
 	Название: <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['template']->value['title'];?>
" id="titleViewTemplate"><br />
 	Количество блоков: <input type="text" name="sum_block" value="<?php echo $_smarty_tpl->tpl_vars['template']->value['sum_block'];?>
"  id="blocksViewTemplate"/><br />
 	
 	<input type="hidden" name="idToFile" value="<?php echo $_smarty_tpl->tpl_vars['template']->value['id'];?>
" />
 	<input type="hidden" name="pathToFile" value="<?php echo $_smarty_tpl->tpl_vars['template']->value['path'];?>
" />
 	
 	<textarea rows="40" cols="150" name="text"><?php echo $_smarty_tpl->tpl_vars['template']->value['text'];?>
</textarea><br />
 	
 	<input type="submit" name="saveTpl" value="Сохранить" />
 	<input type="button" name="cancelSaveTpl" value="Назад" onClick="javascript: document.location.href = 'tpls.php'";/>
 </form>
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