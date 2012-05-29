{extends file="main_templates.tpl"}
{block name=title}Страница {$title}{/block}
{block name=bodyTemplate}
<a href="windowAddPage.php" class="addPage">Создать</a>
<div>
<form method="post" id="formPage">
	Title: <input type="text" name="title" id="titlePage" value="{$title}" /><br />
	URL: <input type="text" name="url" id="urlPage" value="{$url}"><br />    
	Шаблон: <select name="template" id="listTemplates">
	  {foreach $templates as $template}
	  	<option value={$template.id}>{$template.title}</option>
	  {/foreach}
	</select>
	Keywords: <input type="text" name="keywords" id="keywordsPage" value="{$keywords}" /><br />
	Description: <textarea rows="10" cols="45" name="description" id="descriptionPage">{$description}</textarea><br />
	<textarea rows="10" cols="45" name="body" id="bodyPage">{$body}</textarea><br />
	<input type="hidden" name="idPage" value="{$id}"/>
	<input type="submit" value="Сохранить" id="btnPage" />
	<input type="button" name="cancelSaveTpl" value="Назад" onClick="javascript: document.location.href = 'pages.php'";/>
</div>
{/block}
