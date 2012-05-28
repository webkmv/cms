<script type="text/javascript" src="core/media/js/articles.js"></script>

    <form method="post" enctype="multipart/form-data" id="formAddArticle" action="add_article.php">
        Заголовок: <input type="text" name="title" id="titleAddArticle" value={$article.title} /><br />
        Описание: <textarea rows="10" cols="45" name="description" id="descriptionAddArticle">{$article.description}</textarea><br /> 
        Ключевые слова: <input type="text" name="keywords" id="keywordsAddArticle" value={$article.keywords} /><br />
        Содержание: <textarea rows="30" cols="80" name="text" id="textAddArticle" >{$article.text}</textarea><br /> 
        Автор: <input type="text" name="author" id="authorAddArticle" value={$article.author} /><br />
        <input type="hidden" name="delete" value={$article.id} />
        <input type="submit" value="Добавить" id="btnAddArticle" />
    </form>
    
<div id="addArticleErrors"></div>