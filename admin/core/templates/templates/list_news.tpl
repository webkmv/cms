{extends file="main.tpl"}
{block name=body}
<a href="windowAddNews.php" class="addPage">Создать</a>
<table class="modul_table">
    <thead>
	<tr>
            <th class="middle">Заголовок</th>
	    <th class="middle">Дата</th>
	    <th class="min">Автор</th>
	    <th class="min">Просмотров</th>
            <th class="middle">Опубиковать</th>
            <th class="middle">Ссылка</th>
	</tr>
    </thead>

    <tbody>
        {foreach $news as $new}
        <tr>
            <td><a href="view_news.php?id={$new.id}">{$new.title}</a></td>
            <td>{$new.date}</td>
            <td>{$new.author}</td>
            <td>{$new.views}</td>
            <td>{$new.published}</td>
            <td>{$new.alias}</td>
            <!--<td class="del"><a href="delete_template.php?id={$new.id}">-</a></td>-->
        </tr>
        {/foreach}
    </tbody>
</table>
{/block}