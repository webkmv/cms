{extends file="main_templates.tpl"}
{block name=title}Страница {$title}{/block}
{block name=bodyTemplate}
<a href="windowAddNews.php" class="addPage">Создать</a>
<div>
<form method="post" id="formPage">
	Заголовок: <input type="text" name="title" id="titlePage" value="{$title}" /><br />  
	Шаблон: <select name="template" id="listTemplates">
	  {foreach $templates as $template}
	  	<option value={$template.id}>{$template.title}</option>
	  {/foreach}
	</select><br>
	Ключевые слова: <input type="text" name="keywords" id="keywordsPage" value="{$keywords}" /><br />
	Описание: <textarea rows="10" cols="45" name="description" id="descriptionPage">{$description}</textarea><br />
	Текст новости: <textarea rows="10" cols="45" name="body" id="bodyPage">{$text}</textarea><br />
	Ссылка: <input type="text" name="alias" id="alias" value="{$alias}" /><br />
        Автор: <input type="text" name="author" id="keywordsPage" value="{$author}" /><br />
        <input type="hidden" name="idPage" value="{$id}"/>
	<input type="submit" value="Сохранить" id="btnPage" />
	<input type="button" name="cancelSaveTpl" value="Назад" onClick="javascript: document.location.href = 'pages.php'";/>
</div>
{/block}
