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
      			<td>
      				{if $page.published == 0}
      					<a href="public_page.php?id={$page.id}&state=0">Публиковать</a>
      				{else}
      					<a href="public_page.php?id={$page.id}&state=1">Не публиковать</a>
      				{/if}
      			</td>
      			<td>
      			{if $page.is_index == 1}
      				<a href="set_main.php?id={$page.id}&state=0">Главная</a>
      			{else}
      				<a href="set_main.php?id={$page.id}&state=1">Не главная</a>
      			{/if}
      			</td>
      			<td class="del"><a href="delete_page.php?id={$page.id}">-</a></td>
    		</tr>
    	{/foreach}
    </tbody>
  </table>
{/block}