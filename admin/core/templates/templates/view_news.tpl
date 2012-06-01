{extends file="main_templates.tpl"}
{block name=title}Новость {$title}{/block}
{block name=bodyTemplate}

	<div>
	<form method="post" id="formNws" action="save_news.php">
		Заголовок: <input type="text" name="title" id="titlePage" value="{$title}" /><br />  
		Ключевые слова: <input type="text" name="keywords" id="keywordsPage" value="{$keywords}" /><br />
		Описание: <textarea rows="10" cols="45" name="description" id="descriptionPage">{$description}</textarea><br />
		Текст новости: <textarea rows="10" cols="45" name="text" id="bodyPage">{$text}</textarea><br />
		Ссылка: <input type="text" name="alias" id="alias" value="{$alias}" /><br />
		Автор: <input type="text" name="author" id="keywordsPage" value="{$author}" /><br />
		<input type="hidden" name="id" value="{$id}"/>
		<input type="submit" value="Сохранить" id="btnPage" />
		<input type="button" name="cancelSaveTpl" value="Назад" onClick="javascript: document.location.href = 'news.php'";/>
	</div>
	<div class='hint'></div>
	
{/block}
