{extends file="main_templates.tpl"}
{block name=title}Страницы{/block}
{block name=bodyTemplate}
<a href="windowAddPage.php">Создать</a>

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
			      <a href="public_page.php?id={$page.id}&state=1">Не публиковать</a>
			{else}
			      <a href="public_page.php?id={$page.id}&state=0" >Публиковать</a>
			{/if}
		  </td>
		  <td>
			{if $page.is_index == 1}
			      <a href="../index.php">Главная</a>
			{else}
			      <a></a>
			{/if}
		  </td>
		  
		  <td class="del"><a href="delete_page.php?id={$page.id}">-</a></td>
    		</tr>
	    {/foreach}
    </tbody>
  </table>
 </form>
{/block}