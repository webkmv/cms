{extends file="main_templates.tpl"}
{block name=title}Статьи{/block}
{block name=bodyTemplate}
<a href="windowAddArticle.php" class="addPage">Создать</a>

  <table class="modul_table">
  <thead>
  	<tr>
  		<th class="middle">Название</th>
                <th class="middle">Автор</th>
		<th class="min">Публиковать</th>
		<th class="min">Удалить</th>
	</tr>
	</thead>
	<tbody>
            {foreach $articles as $article}
                <tr>
                    <td><a href="view_article.php?id={$article.id}" class="addPage">{$article.title}</a></td>
                    <td>{$article.author}</td>
                    <td>{$article.published}</td>
                    <td class="del"><a href="delete_article.php?id={$article.id}">-</a></td>
                </tr>
            {/foreach}
        </tbody>
  </table>
{/block}