$(document).ready(function() {
	
	/**
	 * Добавление страницы
	 */
	$("#formAddPage").submit(function() {
		if ($("#titleAddPage").val() == "") {
			$(".hint").html("<p>Укажите title страницы.</p>");
			return false;
		}
	});

	/**
	 * Сохранение страницы
	 */
	$("#formPage").submit(function() {
		
		if ($("#titlePage").val() == "") {
			$(".hint").html("<p>Укажите title страницы.</p>");
			return false;
		}
		
		if ($("#titleAddPage").val() == "") {
			$(".hint").html("<p>Укажите title страницы.</p>");
			return false;
		}
		
		/*$(".hint").html("<p>Сохраняется...</p>");
		var str = $(this).serialize();
		$.ajax({
			type : "POST",
			url : "save_page.php",
			data : str,
			success : function(msg) {
				$(".hint").html("<p>" + msg + "</p>");
			}
		});

		return false;*/
	});

});
