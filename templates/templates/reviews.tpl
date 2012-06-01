{extends file="index.tpl"}

	{block name=reviews}
	{/block}
	
	{block name=content}
		
	<form id="reviewsForm" name="form1">
            <p>Введите имя: <input id="name" type="text" name="name" /></p>
            <p>Введите E-mail: <input id="email" type="text" name="email" /></p>
            <p>Введите заголовок: <input id="title" type="text" name="title" /></p>
            <p>Введите текст: <input id="text" type="text" name="text" /></p>
            <p><input onclick="sendReviews();" type="button" name="btnSend" value="Оставить отзыв" /></p>
        </form>
<div id="error">&nbsp;</div>
<div id="complete">&nbsp;</div>



		{foreach $reviews as $review}
				<div class="aside-inner">
				<p>{$review.name}({$review.email}) {$review.date}</p>
				<p><b>{$review.title}</b></p>
				<p>{$review.text}</p>
				</div><!--aside-inner-->
		{/foreach}
			
		
	{/block}
