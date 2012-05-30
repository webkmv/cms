{extends file="index.tpl"}

	{block name=news}
	{/block}
	
	{block name=content}
		
		{if isset($content)}
			{$content}
		{else}
			{foreach $news as $new}
				<div class="aside-inner">
				<a href="index.php?page=news&id={$new.id}"><img src="core/media/images/news/{$new.image}" alt=""/></a>
				<p><b>{$new.date}</b></p>
				<p>{$new.title}<a href="index.php?page=news&id={$new.id}">подробнее &rarr;</a></p>
				</div><!--aside-inner-->
			{/foreach}
		{/if}	
		
	{/block}
