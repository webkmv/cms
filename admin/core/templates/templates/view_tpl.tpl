{extends file="main_templates.tpl"}
{block name=title}View Templates{/block}
{block name=bodyTemplate}
<a href="windowAddTemplate.php" class="addTemplate">Добавить</a>
<div>
 <form action="save_tpl.php" method="post">
 	Название: <input type="text" name="title" value="{$template.title}"><br />
 	Количество блоков: <input type="text" name="sum_block" value="{$template.sum_block}"><br />
 	<textarea rows="10" cols="45" name="text">{$template.text}</textarea><be />
 </form>
</div>
{/block}
