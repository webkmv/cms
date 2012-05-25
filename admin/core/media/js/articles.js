$(document).ready(function() {
   /**
    * Сохранение статьи
    */
   $("#formAddArticle").submit(function() {
		if ($("#titleAddArticle").val() == "") {
			$("#addArticleErrors").html("<p>Укажите название статьи.</p>");
			return false;
		}

		if ($("#textAddArticle").val() == "") {
			$("#addArticleErrors").html("<p>Поле содержание не заполнено</p>");
			return false;
		}
                
                if ($("#authorAddArticle").val() == "") {
			$("#addArticleErrors").html("<p>Поле автор не заполено</p>");
			return false;
		}
                
		var str = $(this).serialize();
		$.ajax({
			type : "POST",
			url : "add_article.php",
			data : str,
			success : function(msg) {
				if (msg == "") {
				    document.location.href = 'articles.php';
				}
				$("#addArticleErrors").html("<p>" + msg + "</p>");
			}
		});
		return false;
	});
});    
    