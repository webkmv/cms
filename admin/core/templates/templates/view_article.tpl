{extends file="main_templates.tpl"}
{block name=title}Статья {$title}{/block}
{block name=bodyTemplate}
    
    <div>
        <form method="post" enctype="multipart/form-data" id="formAddArticle" action="save_articles.php">
            Заголовок: <input type="text" name="title" id="titleAddArticle" value="{$title}" /><br />
            Описание: <textarea rows="10" cols="45" name="description" id="descriptionAddArticle">{$description}</textarea><br /> 
            Ключевые слова: <input type="text" name="keywords" id="keywordsAddArticle" value="{$keywords}" /><br />
            Содержание: <textarea rows="30" cols="80" name="text" id="textAddArticle" >{$text}</textarea><br /> 
            Автор: <input type="text" name="author" id="authorAddArticle" value="{$author}" /><br />
            <input type="hidden" name="id" value={$id} />
            <input type="submit" value="Сохранить" />
            <input type="button" name="cancelSaveTpl" value="Назад" onClick="javascript: document.location.href = 'articles.php'";/>
        </form> 
    <div id="addArticleErrors"></div>

{/block}