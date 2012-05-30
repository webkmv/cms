{extends file="index.tpl"}

	{block name=lechenie}
		<div class="s_block">
			<p class="title">Лечение</p>
			<ul>
				<li class="active_point"><a href="#">Перечень заболеваний</a></li>
				<li><a href="#">Лечебная база</a></li>
				<li><a href="#">Консультации врачей</a></li>
				<li><a href="#">Лечебные процедуры</a></li>
				<li><a href="#">Перечень и количество процедур, входящих в стоимость путевки</a></li>
				<li><a href="#">Перечень медицинских услуг, осуществляемых в санатории</a></li>
				<li><a href="#">Радоновая лечебница</a></li>
		
			</ul>
			
		</div>
	{/block}
	
	{block name=content}
		{$content}
	{/block}
	
	