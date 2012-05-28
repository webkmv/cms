{extends file="main_templates.tpl"}
{block name=title}Новая страница{/block}
{block name=bodyTemplate}
<form method="post" id="formAddPage" action="add_page.php">
	Title: <input type="text" name="title" id="titleAddPage" /><br />
	URL: <input type="text" name="url" id="urlAddPage"><br />    
	Шаблон: <select name="template" id="listTemplates">
	  {foreach $templates as $template}
	  	<option value={$template.id}>{$template.title}</option>
	  {/foreach}
	</select>
	Keywords: <input type="text" name="keywords" id="keywordsAddPage"><br />
	Description: <textarea rows="10" cols="45" name="description" id="descriptionAddPage"></textarea><br />
	<textarea rows="10" cols="45" name="body" id="bodyPage"></textarea><br />
	<input type="submit" value="Добавить" id="btnAddPage" />
</form>
{/block}