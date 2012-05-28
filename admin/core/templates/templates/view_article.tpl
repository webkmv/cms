{extends file="main_templates.tpl"}
{block name=title}Страница {$title}{/block}
{block name=bodyTemplate}
<a href="windowAddArticles.php" class="addPage">Создать</a>
<div>

    <form method="post" enctype="multipart/form-data" id="formAddArticle" action="add_article.php">
        Заголовок: <input type="text" name="title" id="titleAddArticle" value="{$title}" /><br />
        Описание: <textarea rows="10" cols="45" name="description" id="descriptionAddArticle">{$description}</textarea><br /> 
        Ключевые слова: <input type="text" name="keywords" id="keywordsAddArticle" value="{$keywords}" /><br />
        Содержание: <textarea rows="30" cols="80" name="text" id="textAddArticle" >{$text}</textarea><br /> 
        Автор: <input type="text" name="author" id="authorAddArticle" value="{$author}" /><br />
        <input type="hidden" name="delete" value={$id} />
        <input type="submit" value="Добавить" id="btnAddArticle" />
    </form>
    
<div id="addArticleErrors"></div>

{/block}