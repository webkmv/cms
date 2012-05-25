<script type="text/javascript" src="core/media/js/news.js"></script>

<form method="post" enctype="multipart/form-data" id="formAddNews" action="add_news.php">
	Заголовок: <input type="text" name="title" id="titleAddNews" /><br />
	Ключевые слова: <input type="text" name="keywords" id="keywordsAddNews"><br />    
	Описание: <input type="text" name="description" id="descriptionAddNews" /><br />
	Текст новости: <input type="text" name="text" id="textAddNews" /><br >
	Ссылка: <input type="text" name="alias" id="aliasAddNews" /><br />
	Автор: <input type="text" name="alias" id="authorAddNews" /><br />
	Опубликовать: <input type="checkbox" name="published" value="0" />
		<input type="submit" value="Добавить" id="btnAddNews" />
</form>

<div id="addNewsErrors"></div>
