<script type="text/javascript" src="../../core/media/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="core/media/js/config_tiny.js"></script>

<form method="post" enctype="multipart/form-data" id="formAddNews" action="add_news.php">
	Заголовок: <input type="text" name="title" id="titleAddNews" /><br />
	Ключевые слова: <input type="text" name="keywords" id="keywordsAddNews"><br />    
	Описание: <textarea rows="10" cols="45" name="description" id="descNews"></textarea><br /> 
	Текст новости: <textarea rows="10" cols="45" name="text" id="textNews"></textarea><br /> 
	Ссылка: <input type="text" name="alias" id="aliasAddNews" /><br />
	Автор: <input type="text" name="author" id="authorAddNews" /><br />
	Опубликовать: <input type="checkbox" name="published" value="0" />
		<input type="submit" value="Добавить" id="btnAddNews" />
</form>

<div id="addNewsErrors"></div>
