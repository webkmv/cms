<?php /* Smarty version Smarty-3.1.8, created on 2012-05-29 00:40:51
         compiled from "core/templates/templates\list_pages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193964fc3e2d3209743-78439163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cad6ae372142a4c85c60e2f4e9de12db8d0de66d' => 
    array (
      0 => 'core/templates/templates\\list_pages.tpl',
      1 => 1338203606,
      2 => 'file',
    ),
    '003ce6510ead167a61d2ec216eb10cab402e967d' => 
    array (
      0 => 'core/templates/templates\\main_templates.tpl',
      1 => 1338222967,
      2 => 'file',
    ),
    'd0ef76e1138847bc4e35399103e1ac09105d3577' => 
    array (
      0 => 'core/templates/templates\\main.tpl',
      1 => 1338237647,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193964fc3e2d3209743-78439163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nameSection' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc3e2d3384a73_53764880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc3e2d3384a73_53764880')) {function content_4fc3e2d3384a73_53764880($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
				<div class="path"><?php echo $_smarty_tpl->tpl_vars['nameSection']->value;?>
</div>
				<br />
				
		
<a href="windowAddPage.php">Создать</a>

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
      					<a href="public_page.php?id=<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
&state=0">Публиковать</a>
      				<?php }else{ ?>
      					<a href="public_page.php?id=<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
&state=1" >Не публиковать</a>
      				<?php }?>
      			</td>
      			<td>
      			<?php if ($_smarty_tpl->tpl_vars['page']->value['is_index']==1){?>
      				<a href="set_main.php?id=<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
&state=0">Главная</a>
      			<?php }else{ ?>
      				<a></a>
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