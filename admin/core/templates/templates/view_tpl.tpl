{extends file="main_templates.tpl"}
{block name=title}View Templates{/block}
{block name=bodyTemplate}
<a href="windowAddTemplate.php" class="addTemplate">Добавить</a>
<div>
 <form method="post" id="viewTplForm">
 	Название: <input type="text" name="title" value="{$template.title}" id="titleViewTemplate"><br />
 	Количество блоков: <input type="text" name="sum_block" value="{$template.sum_block}"  id="blocksViewTemplate"/><br />
 	
 	<input type="hidden" name="idToFile" value="{$template.id}" />
 	<input type="hidden" name="pathToFile" value="{$template.path}" />
 	
 	<textarea rows="40" cols="150" name="text">{$template.text}</textarea><br />
 	
 	<input type="submit" name="saveTpl" value="Сохранить" />
 	<input type="button" name="cancelSaveTpl" value="Назад" onClick="javascript: document.location.href = 'tpls.php'";/>
 </form>
</div>
{/block}
