<?php /*%%SmartyHeaderCode:18826911854f97e99326db99-74876638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13ffc7cfea86dce00573bb06f8354ff01afde76d' => 
    array (
      0 => 'core/templates/templates/view_tpl.tpl',
      1 => 1335355822,
      2 => 'file',
    ),
    'e87d9a6c06ef593309a45181120117a8e676c5eb' => 
    array (
      0 => 'core/templates/templates/main.tpl',
      1 => 1335343785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18826911854f97e99326db99-74876638',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f97e9b03d71e0_76202527',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f97e9b03d71e0_76202527')) {function content_4f97e9b03d71e0_76202527($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" xml:lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>View Templates</title>	
    
    <link href="core/media/css/jquery.fancybox.css" rel="stylesheet" type="text/css" />
    
    <script type="text/javascript" src="core/media/js/jquery.js"></script>
    <script type="text/javascript" src="core/media/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="core/media/js/jquery.fancybox-1.2.1.pack.js"></script>
    <script type="text/javascript" src="core/media/js/configModals.js"></script>

</head>
<body>
    
<a href="windowAddTemplate.php" class="addTemplate">Добавить</a> <a href="">На главную</a>
<div>
 <form action="save_tpl.php" method="post">
 	Название: <input type="text" name="title" value="тестовый шаблон"><br />
 	Количество блоков: <input type="text" name="sum_block" value="25"><br />
 	<textarea rows="10" cols="45" name="text"><html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    
    <!-- Block head \\ -->
    <div id="BlockHead">
      <div id="MenuNews"><a href="#">Архив новостей</a></div>
      <div><a href="MenuFiles">Архив файлов</a></div>
      <div><a href="#">Календарь событий</a></div>
    </div>
    <!-- Block head // -->
    
    <!-- Block page \\ -->
    <div>
      
      <!-- Block state bar \\ -->
      <div>
      </div>
      <!-- Block state bar // -->

      <!-- Block content \\ -->
      <div>

	<!-- Block content_left \\ -->
	<div>
	  
	</div>
	<!-- Block content_left // -->

	<!-- Block content_right \\ -->
	<div>
	</div>
	<!-- Block content_right // -->
      
      </div>
      <!-- Block content // -->

    </div>
    <!-- Block page // -->
  </body>
</html>
</textarea>
 </form>
</div>

</body>
</html><?php }} ?>