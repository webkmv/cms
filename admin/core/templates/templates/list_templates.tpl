{extends file="main_templates.tpl"}
{block name=title}Шаблоны{/block}
{block name=bodyTemplate}
<a href="windowAddTemplate.php" class="addTemplate">Добавить</a>

  <table class="modul_table">
  <thead>
					<tr>
						<th class="large">Название</th>
						<th class="middle">Путь</th>
						<th class="min">Дата</th>
						<th class="min">Удалить</th>
					</tr>
					</thead>
					<tbody>
   {foreach $templates as $template}
   <tr>
      <td><a href="view_tpl.php?id={$template.id}">{$template.title}</a></td>
      <td>{$template.path}</td>
      <td>{$template.created}</td>
      <td class="del"><a href="delete_template.php?id={$template.id}">-</a></td>
    </tr>
    {/foreach}
    </tbody>
  </table>
{/block}