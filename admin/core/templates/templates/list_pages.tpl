{extends file="main_templates.tpl"}
{block name=title}Страницы{/block}
{block name=bodyTemplate}
<form method="post" id="formListPages">
<a href="windowAddPage.php" class="addPage">Создать</a>
<input type="submit" value="Сохранить">

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
      					<input type="checkbox" name="!isPublic" value="{$page.id}" />
      					<!--a href="public_page.php?id={$page.id}&state=0">Публиковать</a -->
      				{else}
      					<input type="checkbox" name="isPublic" value="{$page.id}" checked="yes" />
      					<!--a href="public_page.php?id={$page.id}&state=1" >Не публиковать</a -->
      				{/if}
      			</td>
      			<td>
      			{if $page.is_index == 1}
      				<input type="radio" name="isIndex" value="0" checked>
      				<!-- a href="set_main.php?id={$page.id}&state=0">Главная</a -->
      			{else}
      				<input type="radio" name="notIndex" value="1">
      			{/if}
      			</td>
      			<td class="del"><a href="delete_page.php?id={$page.id}">-</a></td>
    		</tr>
    	{/foreach}
    </tbody>
  </table>
 </form>
{/block}