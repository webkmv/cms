<?php /* Smarty version Smarty-3.1.8, created on 2012-05-30 10:51:20
         compiled from "templates/templates/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11656094504fc5db5658ecc1-02131296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59f6d888c8b766d460ffa7cff74a4a041528b301' => 
    array (
      0 => 'templates/templates/content.tpl',
      1 => 1338367135,
      2 => 'file',
    ),
    '6842dfbda97d20a0853300b448389c498ce0de0f' => 
    array (
      0 => 'templates/templates/index.tpl',
      1 => 1338367872,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11656094504fc5db5658ecc1-02131296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc5db566322c2_80705480',
  'variables' => 
  array (
    'title' => 0,
    'news' => 0,
    'new' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc5db566322c2_80705480')) {function content_4fc5db566322c2_80705480($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=7" />
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	
	<!-- css -->
	<link href="core/media/stylesheets/style.css" rel="stylesheet" type="text/css" />
	<link href="core/media/stylesheets/slider.css" rel="stylesheet" type="text/css" />
	<link href="core/media/stylesheets/skins/tango/skin.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="core/media/stylesheets/jquery.fancybox.css" media="screen" />
	
	<!-- js -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
	<script type="text/javascript" src="core/media/javascripts/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="core/media/javascripts/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="core/media/javascripts/jquery.mCustomScrollbar.js"></script>
	<script type="text/javascript" src="core/media/javascripts/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="core/media/javascripts/jquery.fancybox.js"></script>
	<script type="text/javascript" src="core/media/javascripts/interface.js"></script>

	<!--[if lte IE 7.0]>
		<link href="core/media/stylesheets/ie.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if lt IE 7.0]>
		<script src="javascripts/DD_belatedPNG_0.0.8a.js" type="text/javascript"></script>
		<script type="text/javascript">
			DD_belatedPNG.fix('img');
		</script>
	<![endif]-->
</head>

<body>
	<!-- // PAGE -->
	<div class="page">
	
	<!-- // HEADER -->
	<div class="header_container">
		<div class="header_inner">
			<a href="index.php" class="logo" title="Intourist"></a>
		
		<!-- tools -->
			<ul class="nav_tools">
			<!--	<li class="locate"><a href="#" class="ru ru_active" title="русская версия"></a><a href="#" class="en" title="английская версия"></a></li> -->
				<li class="booking"><a href="#bronir" class="bronir">Забронировать</a></li>
			</ul>
		
		<!-- menu -->
			<ul class="nav_menu">
				<li><a href="index.php">О санатории</a></li>
				<li><a href="index.php?page=lechenie">Лечение</a></li>
				<li><a href="index.php?page=photogallery">Фотогалерея</a></li>
				<li><a href="index.php?page=price">Цены на путёвки</a></li>
				<li><a href="index.php?page=contacts">Контакты</a></li>
			</ul>
		</div>
		
	</div>

	<!-- HEADER // -->

	<!-- // CONTENT -->
	<div class="wrap">
		<div class="main_container">

		<!--===========SHOWCASE================-->
       	<div class="layer catalogue-base">
       	<div class="catalogue-content">
    
		<div id="showcase">
		<div id="mcs_container">
		<div class="customScrollBox">
			<!-- horWrapper div is important for horizontal scrollers! -->
			<div class="horWrapper"> 
			<div class="container">
				<div class="content">
					<div class="slide-block blue">
			
						<div class="slide-title"> <a href="#" >РАЗМЕЩЕНИЕ</a></div>
						<p>Двухместные номера, люксы, апартаменты.</p>  
					
						<div class="slide-title"><a href="#" >ПИТАНИЕ</a></div>
						<p>Диетическое, сбалансированное, по заказному меню, ресторан, VIP-залы, банкетный зал.</p>
					
						<div class="slide-title"><a href="#" >ЛЕЧЕНИЕ</a></div>
						<p>Консультации специалистов, диагностика, медицинские услуги.</p>
					
					</div><!--slide-block-->
					
					<a href="core/media/images/slider/img1.jpg"  rel="group2"><img src="core/media/images/slider/img1_sm.jpg" alt=""/></a>
					<a href="core/media/images/slider/img2.jpg"  rel="group2"><img src="core/media/images/slider/img2_sm.jpg" alt=""/></a>
					
					<div class="slide-block blue ml0">
					<div>
					<div class="slide-title "> <a href="#" >Консультации врачей </a></div>
					</div>
					<p>Отоларинголога, уролога, гинеколога, хирурга, дерматовенеролога, эндокринолога, кардиолога, физиотерапевта, врача ЛФК, диетолога, невролога, рефлексотерапевта, аллерголога-иммунолога, педиатра, стоматолога-терапевта, офтальмолога.</p>  
					</div><!--slide-block-->
					
					<a href="core/media/images/slider/img3.jpg"  rel="group2"><img src="core/media/images/slider/img3_sm.jpg" alt=""/></a>
					
					<div class="slide-block blue ml0">
						<div class="slide-title"> <a href="#" >Новые методы оздоровления организма.</a></div>
						<p>Уникальное сочетание лечебных факторов - лечебной грязи знаменитого озера Тамбукан, радоновых и сероводородных ванн, лечебного массажа, SPA-капсулы укрепит Ваше здоровье, снимет синдром хронической усталости. повысит работоспособность.</p>  
					</div><!--slide-block-->
					
					<a href="core/media/images/slider/img4.jpg"  rel="group2"><img src="core/media/images/slider/img4_sm.jpg" alt=""/></a>
					<a href="core/media/images/slider/img5.jpg"  rel="group2"><img src="core/media/images/slider/img5_sm.jpg" alt=""/></a>
					
					<div class="slide-block blue ml0">
					<div>
					<div class="slide-title"> <a href="#" >Единовременный прием более 200 отдыхающих </a></div>
					</div>
					<p>В нашем санатории Вас ждут комфортные, стандартные двухместные, одноместные номера, номера- «Бизнес стандарт», номера класса «Люкс», номера – «Апартаменты».</p>  
					</div><!--slide-block-->
					
					<a href="core/media/images/slider/img6.jpg"  rel="group2"><img src="core/media/images/slider/img6_sm.jpg" alt=""/></a>
					
					<div class="slide-block blue ml0">
						<div class="slide-title"> <a href="#" >РЕСТОРАНЫ</a></div>
						<p>В санатории «Пятигорский Нарзан» осуществляет питание отдыхающих в ресторанах и VIP-залах, выполненные в разной цветовой гамме и изысканном стиле.  Повара высшей категории всегда смогут предложить интересные и незабываемо вкусные блюда, для самых взыскательных гостей!</p>  
					</div><!--slide-block-->
					
					<a href="core/media/images/slider/img7.jpg"  rel="group2"><img src="core/media/images/slider/img7_sm.jpg" alt=""/></a>
					<a href="core/media/images/slider/img8.jpg"  rel="group2"><img src="core/media/images/slider/img8_sm.jpg" alt=""/></a>

			</div><!--content-->
			</div><!--container-->
			<div class="dragger_container">
			<div class="line"></div>
			<div class="dragger"></div><!--dragger-->
			</div><!--dragger_container-->
			</div><!--horwrapper-->
		</div><!--scrollbox-->
		</div><!--mcs_container-->
		</div><!--showcase-->   
       
    </div><!-- catalogue-content ends here-->
    </div><!--catalogue-base ends here-->
	
	</div>
	<div class="clear"></div>
	
	<div class="shadow"></div>
	<div class="main_container-inner">
	<div class="sidebar_block">
		
		
		
		
		<!-- programs -->
		<div class="s_block">
			<p class="title">Программы лечения</p>
			<ul>
				<li><a href="#">Женское здоровье</a></li>
				<li><a href="#">Здоровый позвоночник</a></li>
				<li><a href="#">Легкая походка</a></li>
				<li><a href="#">Мужское здоровье</a></li>
				<li><a href="#">Худей на здоровье</a></li>
				<li><a href="#">Здоровый ребенок</a></li>
				<li><a href="#">Поддержи свой иммунитет<br />(дети от 4 до 14 лет)</a></li>
				<li><a href="#">Поддержи свой иммунитет<br />(дети от 14 до 18 лет)</a></li>
			</ul>
			
		</div>
		<!-- news -->
		
			<div class="s_block fading">
				<p class="title"><a href="index.php?page=news">все новости</a> Новости</p>
			
			
				<?php  $_smarty_tpl->tpl_vars['new'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['new']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['new']->key => $_smarty_tpl->tpl_vars['new']->value){
$_smarty_tpl->tpl_vars['new']->_loop = true;
?>
				
				<!--<div class="aside-inner">
				    <a href="#"><img src="core/media/uploads/news/img3.jpg" alt=""/></a>
					<p><b>15 января 2012</b></p>
				    <p>Цены на санаторно-курортное лечение на 1 полугодие 2012 года <a href="#">подробнее &rarr;</a></p>     
				</div><!--aside-inner-->
				
				
					<div class="aside-inner">
					<a href="index.php?page=news&id=<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
"><img src="core/media/images/news/<?php echo $_smarty_tpl->tpl_vars['new']->value['image'];?>
" alt=""/></a>
					<p><b><?php echo $_smarty_tpl->tpl_vars['new']->value['date'];?>
</b></p>
					<p><?php echo $_smarty_tpl->tpl_vars['new']->value['title'];?>
<a href="index.php?page=news&id=<?php echo $_smarty_tpl->tpl_vars['new']->value['id'];?>
">подробнее &rarr;</a></p>
					</div><!--aside-inner-->
				
				<?php } ?>
			</div>
		
		
		
		
		<!-- map -->
		<div class="s_block">
			<p class="title">Схема проезда</p>
			<a href="#"><img class="map" src="core/media/images/map.jpg" alt="" /></a>
		</div>
		
		
		<div class="phone">
			<p>8 (8793) <span>97-3164</span></p>
			<p>8 (8793) <span>39-12-81</span></p>
			<p>8 (8793) <span>97-31-60</span></p>
		</div>

		<div class="email">
			<p>narzan-kmv@mail.ru </p>
			<p>narzan-kmw@yandex.ru</p>
		</div>
		
		
		<!-- excursions -->
		<div class="s_block">
			<p class="title">Экскурсии</p>
			
			<!-- awards scroll -->	
			<div id="mycarousel1" class="jcarousel-skin-tango">
				<ul>
					<li><a rel="group" href="core/media/uploads/excursions/img1.jpg" ><img src="core/media/uploads/excursions/img1.jpg" alt="" /></a></li>
					<li><a rel="group" href="core/media/uploads/excursions/img1.jpg" ><img src="core/media/uploads/excursions/img1.jpg" alt="" /></a></li>
					<li><a rel="group" href="core/media/uploads/excursions/img1.jpg" ><img src="core/media/uploads/excursions/img1.jpg" alt="" /></a></li>
					<li><a rel="group" href="core/media/uploads/excursions/img1.jpg" ><img src="core/media/uploads/excursions/img1.jpg" alt="" /></a></li>
					<li><a rel="group" href="core/media/uploads/excursions/img1.jpg" ><img src="core/media/uploads/excursions/img1.jpg" alt="" /></a></li>
				</ul>	  		
			</div>
		</div>
		
	</div>
	
	<!-- // content_block -->
	<div class="content_block">
	
	<!-- основной контент -->
				
	
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	
		
	<!-- // основной контент -->
		
	<br /> <br /> <br />	
	<!-- 3 blocks -->

	
	
	
	<!-- 3 blocks -->
	
	<div class="items">
		<div class="items_title">Досуг</div>
		<div class="img_border">
	 		<a href="#" ><img src="core/media/uploads/main_previews/img4.jpg" alt="" /></a>
		</div>
		<div class="item_descr">Ежедневно для отдыхающих приглашенные артисты проводят развлекательные программы. <br /> <br /> </div>
		<div class="item_link"> <a href="#" >Подробнее</a> </div>
	</div>
	
	<div class="items">
		<div class="items_title">Фотогалерея</div>
		<div class="img_border">
	 		<a href="#" ><img src="core/media/uploads/main_previews/img5.jpg" alt="" /></a>
		</div>
		<div class="item_descr">Санаторий «Нарзан» по праву считается одним из самых современных и комфортабельных.</div>
		<div class="item_link"> <a href="#" >Подробнее</a> </div>
	</div>
	
	<div class="items">
		<div class="items_title">Видеогалерея</div>
		<div class="img_border">
	 		<a href="#" ><img src="core/media/uploads/main_previews/img6.jpg" alt="" /></a>
		</div>
		<div class="item_descr">Для Вас работает бильярдный зал, ресторан с отменной европейской и кавказской кухней, кафе «Летний дворик».</div>
		<div class="item_link"> <a href="#" >Подробнее</a> </div>
	</div>
		
		
	<br /> <br />
	
	<!-- 3 blocks -->
	
	<div class="items">
		<div class="items_title">Отзывы</div>
		<div class="img_border">
	 		<a href="#" ><img src="core/media/uploads/main_previews/img7.jpg" alt="" /></a>
		</div>
		<div class="item_descr">В июне прошлого года были с мужем в "Пятигорском нарзане" - запредельные чувства!!! Медицинский персонал, а какой массаж - высший пилотаж)))<br /> Куда там Европе. </div>
		<div class="item_link"> <a href="#" >Подробнее</a> </div>
	</div>
	
	<div class="items">
		<div class="items_title">Вопрос - ответ</div>
		<div class="img_border">
	 		<a href="#" ><img src="core/media/uploads/main_previews/img8.jpg" alt="" /></a>
		</div>
		<div class="item_descr">Здравствуйте! Нам с женой в июле выделили путевку в ваш санаторий. Можем ли мы взять с собой ребенка 10 лет в свою комнату без лечения, и какая стоимость проживания. Спасибо! </div>
		<div class="item_link"> <a href="#" >Подробнее</a> </div>
	</div>
	
	<div class="items">
		<div class="items_title">Туры для гостей</div>
		<div class="img_border">
	 		<a href="#" ><img src="core/media/uploads/main_previews/img9.jpg" alt="" /></a>
		</div>
		<div class="item_descr">Экскурсионные поездки по городам КМВ и в горы Кавказа, Визы, приглашения иностранных туристов в Россию. <br /> <br /> <br />  </div>
		<div class="item_link"> <a href="#" >Подробнее</a> </div>
	</div>
	
	
	</div><!-- content_block // -->
	
	
	
		
		
	

	</div></div><!-- CONTENT // -->
	
		<br />
	</div><!-- PAGE // -->
	
	
	
	<!-- // FOOTER -->
	<div class="footer"><div class="footer-inner">
			<div class="right">
				<p>© OOO «Машук». 2008 - 2012</p>
				<p>Санаторий «Пятигорский Нарзан»</p>
				<div class="webmaster"> <a href="http://web-kmv.ru" target="_blank" title="Создание и разработка сайтов 'Веб-мастер КМВ'" >Создание и разработка сайтов “Веб-мастер КМВ”</a></div>
			</div>
			
			
			
			<div class="left">
				<p>357500, Россия, Ставропольский край</p>
				<p>г. Пятигорск, гора Казачка, 2, корп. 2.</p>
				<p>Телефон: (8793) 39-12-81</p>
				<p>Справка: (8793) 97-31-62, 97-31-64, 97-31-60</p>
			</div>
			
			
			
			
	</div></div>
	<!-- FOOTER // -->
	
	<div id="bronir" style="display:none;">

	<div class="first_dialog">
		<h2>Бронирование</h2>
		<div class="message_container">
		<p class="user_mess">Уважаемые клиенты. Просим вас указывать точную информацию в форме, иначе мы не сможем связаться с вами и подтвердить заказ номера.<br />Обязательно заполните поля со звездочкой ( <span class="red">*</span> ).</p>
				<br />
		<!-- error_explanation -->			
		<div class="error_explanation">
			<ul>
				<li>— Не заполнено поле «Контактный телефон»</li>
				<li>— Неправильно указаны цифры на картинке</li>
				<li>— Какие-либо данные неверны</li>
			</ul>
		</div>
		
		
		<div class="general_form">
		<form method="post" action="#">
			<p class="bron_title">Персональные данные</p>

			<dl>
				<dt><label for="user">Фамилия, имя, отчество <span>*</span></label></dt>
				<dd><input id="user" type="text" /></dd>
			</dl>
				
			<dl>
				<dt><label for="data">Дата рождения <span>*</span></label></dt>
				<dd>
					<select id="data" class="first_select">
            		  	<option>28</option>
            		  	<option>01</option>
            		  	<option>02</option>
            		  	<option>03</option>
            		</select>
            	
            		<select class="second_select">
            		  	<option>сентябрь</option>
            		  	<option>октябрь</option>
            		  	<option>ноябрь</option>
            		</select>
            	
            		<select class="third_select">
            		  	<option>1980</option>
            		  	<option>2009</option>
            		  	<option>2010</option>
            		  	<option>2011</option>
            		</select>
          		</dd>
			</dl>
			
			<dl>
				<dt><div class="two_label"><label for="phone">Контактный телефон <span>*</span></label> <label for="email">Элекстронная почта <span>*</span></label></div></dt>
				<dd>
					<div class="two_input"><input id="phone" type="text" /> <input id="email" type="text" /></div>
				</dd>
			</dl>
			
			
			<dl>
				<dt><label for="city">Населенный пункт</label></dt>
				<dd><input id="city" type="text" /></dd>
			</dl>
			
			
			<p class="bron_title">Выберите номер и условия</p>
			
			
			<dl>
				<dt><div class="second_label"><label for="data_in">Дата заезда <span>*</span></label> <label for="score_day">Количество дней <span>*</span></label></div></dt>
				<dd>
					<div class="second_input">
					
					<select id="data_in" class="first_select">
            		  	<option>28</option>
            		  	<option>01</option>
            		  	<option>02</option>
            		  	<option>03</option>
            		</select>
            	
            		<select class="second_select">
            		  	<option>сентябрь</option>
            		  	<option>октябрь</option>
            		  	<option>ноябрь</option>
            		</select>
            	
            		<select class="third_select">
            		  	<option>1980</option>
            		  	<option>2009</option>
            		  	<option>2010</option>
            		  	<option>2011</option>
            		</select>
					
					<select id="score_day" class="first_select">
            		  	<option>28</option>
            		  	<option>01</option>
            		  	<option>02</option>
            		  	<option>03</option>
            		</select></div>
				</dd>
			</dl>
			
			
			<dl>
				<dt class="mt20"><label for="category">Категория номера <span>*</span></label></dt>
				<dd><select class="four_select" id="category">
            		  	<option>Cтандартный номер (2770 руб. 1 чел/сутки) </option>
            		  	<option>Номера класса «Люкс» (4200 руб. 1 чел/сутки)</option>
            		  	<option>«Апартаменты» (8900 руб. 1 чел/сутки)</option>
            		  	<option>«Апартаменты Люкс» (11000 руб. 1 чел/место сутки)</option>
            		</select></dd>
			</dl>
			
			
			<dl>
				<dt class="mt20"><label for="score_user">Количество проживающих <span>*</span></label></dt>
				<dd class="passport">
					<span>взрослые</span>
					<select id="score_user" class="first_select">
            		  	<option>28</option>
            		  	<option>01</option>
            		  	<option>02</option>
            		  	<option>03</option>
            		</select>
					
					<span>дети 4—14 лет</span>
					<select class="first_select">
            		  	<option>28</option>
            		  	<option>01</option>
            		  	<option>02</option>
            		  	<option>03</option>
            		</select>
				</dd>
			</dl>
			
			<dl>
				<dt class="mt20"><label for="wishes">Пожелания</label></dt>
				<dd><textarea id="wishes"></textarea></dd>
			</dl>
			
			<dl>
				<dt class="mt20"><label>Введите цифры на картинке</label></dt>
				<dd> <img src="core/media/uploads/captcha.png" alt="" /></dd>
			</dl>
			
			<input type="submit"  class="send_message_btn" value="Отправить информацию" name="" />
			


		</form>
		</div> <!-- end general form -->
		</div> <!-- end message container -->
		
	
	</div> <!-- end first dialog -->
	
	<div class="second_dialog"  style="display:none;">
		<h2>Спасибо! Ваша заявка принята.</h2>
		<div class="message_container">
		<p class="user_mess">Наши специалисты свяжутся с вами в ближайшее время для подтверждения и уточнения деталей.</p>
		</div>
	</div> 
	
	
	</div> <!-- end second dialog -->
	
	
	
	
	
	
</body>
</html><?php }} ?>