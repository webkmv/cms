{extends file="main_templates.tpl"}
{block name=title}Страницы{/block}
{block name=bodyTemplate}
<a href="windowAddPage.php" class="addPage">Создать</a>

  <table class="modul_table">
  <thead>
  	<tr>
  		<th>Название</th>
		<th>Публиковать</th>
		<th>Главная</th>
		<th>Удалить</th>
	</tr>
	</thead>
	<tbody>
   		{foreach $pages as $page}
   			<tr>
      			<td><a href="view_page.php?id={$page.id}">{$page.title}</a></td>
      			<td>{$page.published}</td>
      			<td>{$page.is_index}</td>
      			<td class="del"><a href="delete_page.php?id={$page.id}">-</a></td>
    		</tr>
    	{/foreach}
    </tbody>
  </table>
{/block}