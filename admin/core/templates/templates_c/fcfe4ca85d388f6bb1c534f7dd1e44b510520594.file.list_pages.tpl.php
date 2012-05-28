<?php /* Smarty version Smarty-3.1.8, created on 2012-05-25 18:26:03
         compiled from "core/templates/templates/list_pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10649622144fbf5cbc27a625-46272913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcfe4ca85d388f6bb1c534f7dd1e44b510520594' => 
    array (
      0 => 'core/templates/templates/list_pages.tpl',
      1 => 1337955958,
      2 => 'file',
    ),
    '94cda4a6fae88d46fed317da1ccbd07ea9766df0' => 
    array (
      0 => 'core/templates/templates/main_templates.tpl',
      1 => 1336249720,
      2 => 'file',
    ),
    'e87d9a6c06ef593309a45181120117a8e676c5eb' => 
    array (
      0 => 'core/templates/templates/main.tpl',
      1 => 1337945193,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10649622144fbf5cbc27a625-46272913',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fbf5cbc2f2d46_52702555',
  'variables' => 
  array (
    'nameSection' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fbf5cbc2f2d46_52702555')) {function content_4fbf5cbc2f2d46_52702555($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
    <title>Страницы</title>	
    
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
				
		
<form method="post" id="formListPages">
<a href="windowAddPage.php" class="addPage">Создать</a>
<input type="submit" value="Сохранить">

  <table class="modul_table">
  <thead>
  	<tr>
  		<th>Название</th>
		<th>Публиковать</th>
		<th>Главная</th>
		<th>Удалить</th>
	</tr>
	</thead>
	<tbody>
   		<?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
   			<tr>
      			<td><a href="view_page.php?id=<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</a></td>
      			<td>
      				<?php if ($_smarty_tpl->tpl_vars['page']->value['published']==0){?>
      					<input type="checkbox" name="!isPublic" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
" />
      					<!--a href="public_page.php?id=<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
&state=0">Публиковать</a -->
      				<?php }else{ ?>
      					<input type="checkbox" name="isPublic" value="<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
" checked="yes" />
      					<!--a href="public_page.php?id=<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
&state=1" >Не публиковать</a -->
      				<?php }?>
      			</td>
      			<td>
      			<?php if ($_smarty_tpl->tpl_vars['page']->value['is_index']==1){?>
      				<input type="radio" name="isIndex" value="0" checked>
      				<!-- a href="set_main.php?id=<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
&state=0">Главная</a -->
      			<?php }else{ ?>
      				<input type="radio" name="notIndex" value="1">
      			<?php }?>
      			</td>
      			<td class="del"><a href="delete_page.php?id=<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
">-</a></td>
    		</tr>
    	<?php } ?>
    </tbody>
  </table>
 </form>

						
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