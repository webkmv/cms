<script type="text/javascript" src="core/media/js/pages.js"></script>
<form method="post" enctype="multipart/form-data" id="formAddPage" action="add_page.php">
Title: <input type="text" name="title" id="titleAddPage" /><br />
URL: <input type="text" name="url" id="urlAddPage"><br />
Keywords: <input type="text" name="keywords" id="keywordsAddPage"><br />
Description: <textarea rows="10" cols="45" name="description" id="descriptionAddPage"></textarea><br />
<textarea rows="10" cols="45" name="body" id="bodyAddPage"></textarea><br />
<input type="submit" value="Добавить" id="btnAddPage" />
</form>
<div id="addPageErrors"></div>