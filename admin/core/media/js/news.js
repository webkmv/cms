$(document).ready(function() {
	/**
	 * Сохранение страницы
	 
	$("#viewTplForm").submit(function() {
		if ($("#titleViewTemplate").val() == "") {
			$(".hint").html("<p>Укажите название шаблона.</p>");
			return false;
		}

		if ($("#blocksViewTemplate").val() == "") {
			$(".hint").html("<p>Укажите количество блоков.</p>");
			return false;
		}

		var str = $(this).serialize();
		$.ajax({
			type : "POST",
			url : "save_tpl.php",
			data : str,
			success : function(msg) {
				if (msg == "") {
					document.location.href = 'pages.php';
				}
				$(".hint").html("<p>" + msg + "</p>");
			}
		});
		return false;
	});
        */
	/**
	 * Добавление страницы
	 */
	$("#formAddNews").submit(function() {
		if ($("#titleAddNews").val() == "") {
			$("#addNewsErrors").html("<p>Укажите title страницы.</p>");
			return false;
		}

		var str = $(this).serialize();
		$.ajax({
			type : "POST",
			url : "add_news.php",
			data : str,
			success : function(msg) {
				$("#addNewsErrors").html("<p>" + msg + "</p>");
			}
		});
		return false;
	});
});