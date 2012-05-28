$(document).ready(function() {
	/**
	 * Добавление страницы
	 */
	$("#formAddNews").submit(function() {
		if ($("#titleAddNews").val() == "") {
			$("#addNewsErrors").html("<p>Укажите заголовок страницы.</p>");
			return false;
		}
		if ($("#keywordsAddNews").val() == "") {
			$("#addNewsErrors").html("<p>Укажите ключевые слова страницы.</p>");
			return false;
		}
		if ($("#descriptionAddNews").val() == "") {
			$("#addNewsErrors").html("<p>Укажите описание страницы.</p>");
			return false;
		}
		if ($("#textAddNews").val() == "") {
			$("#addNewsErrors").html("<p>Укажите текст страницы.</p>");
			return false;
		}
		if ($("#aliasAddNews").val() == "") {
			$("#addNewsErrors").html("<p>Укажите ссылку страницы.</p>");
			return false;
		}
		if ($("#authorAddNews").val() == "") {
			$("#addNewsErrors").html("<p>Укажите автора страницы.</p>");
			return false;
		}

		var str = $(this).serialize();
		$.ajax({
			type : "POST",
			url : "add_news.php",
			data : str,
			success : function(msg) {
				if (msg == "") {
				    document.location.href = 'articles.php';
				}
				$("#addNewsErrors").html("<p>" + msg + "</p>");
			}
		});
		return false;
	});
});