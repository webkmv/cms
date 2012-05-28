<?php /* Smarty version Smarty-3.1.8, created on 2012-05-28 13:31:40
         compiled from "core/templates/templates/view_article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11234170484fc3573b216263-47212902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd460527b2902aaa4868d534795b0935a91fb212' => 
    array (
      0 => 'core/templates/templates/view_article.tpl',
      1 => 1338204652,
      2 => 'file',
    ),
    '94cda4a6fae88d46fed317da1ccbd07ea9766df0' => 
    array (
      0 => 'core/templates/templates/main_templates.tpl',
      1 => 1338197676,
      2 => 'file',
    ),
    'e87d9a6c06ef593309a45181120117a8e676c5eb' => 
    array (
      0 => 'core/templates/templates/main.tpl',
      1 => 1338197676,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11234170484fc3573b216263-47212902',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc3573b284674_14223315',
  'variables' => 
  array (
    'nameSection' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc3573b284674_14223315')) {function content_4fc3573b284674_14223315($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
				<a href="pages" class="menu_head ico1">Страницы</a>
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
				<div class="path"><?php echo $_smarty_tpl->tpl_vars['nameSection']->value;?>
</div>
				<br />
				
		
<a href="windowAddArticles.php" class="addPage">Создать</a>
<div>

    <form method="post" enctype="multipart/form-data" id="formAddArticle" action="save_articles.php">
        Заголовок: <input type="text" name="title" id="titleAddArticle" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" /><br />
        Описание: <textarea rows="10" cols="45" name="description" id="descriptionAddArticle"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</textarea><br /> 
        Ключевые слова: <input type="text" name="keywords" id="keywordsAddArticle" value="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" /><br />
        Содержание: <textarea rows="30" cols="80" name="text" id="textAddArticle" ><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</textarea><br /> 
        Автор: <input type="text" name="author" id="authorAddArticle" value="<?php echo $_smarty_tpl->tpl_vars['author']->value;?>
" /><br />
        <input type="hidden" name="id" value=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 />
        <input type="submit" value="Добавить" id="btnAddArticle" />
    </form>
    
<div id="addArticleErrors"></div>


						
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