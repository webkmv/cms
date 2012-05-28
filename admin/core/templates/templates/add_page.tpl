<script type="text/javascript" src="core/media/js/pages.js"></script>
<script type="text/javascript" src="core/media/js/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript" src="core/media/js/config_tiny.js"></script>
<form method="post" enctype="multipart/form-data" id="formAddPage" action="add_page.php">
	Title: <input type="text" name="title" id="titleAddPage" /><br />
	URL: <input type="text" name="url" id="urlAddPage"><br />    
	Шаблон: <select name="template" id="listTemplates">
	  {foreach $templates as $template}
	  	<option value={$template.id}>{$template.title}</option>
	  {/foreach}
	</select>
	Keywords: <input type="text" name="keywords" id="keywordsAddPage"><br />
	Description: <textarea rows="10" cols="45" name="description" id="descriptionAddPage"></textarea><br />
	<textarea rows="10" cols="45" name="body" id="bodyPage"></textarea><br />
	<input type="submit" value="Добавить" id="btnAddPage" />
</form>
<div id="addPageErrors"></div>