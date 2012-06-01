{extends file="main.tpl"}
{block name=body}
<a href="windowReviewsSettings.php" class="addPage">Настроить</a>
<table class="modul_table">
    <thead>
	<tr>
            <th class="middle">Заголовок</th>
	    <th class="middle">Текст</th>
	    <th class="min">Автор</th>
	    <th class="min">E-mail</th>
            <th class="middle">Опубликовано</th>
            <th class="middle">Дата</th>
	    <th>Удалить</th>
	</tr>
    </thead>

    <tbody>
	{foreach $reviews as $review}        
        <tr>
            <td><a href="view_news.php?id='{$review.id}'">{$review.title}</a></td>
            <td>{$review.text}</td>
            <td>{$review.name}</td>
            <td>{$review.email}</td>
            <td><a href="reviews_published.php?id={$review.id}">{$review.published}</a></td>
            <td>{$review.date}</td>
            <td class="del"><a href="delete_news.php?id={$review.id}">-</a></td>
        </tr>
	{/foreach}
    </tbody>
</table>
{/block}