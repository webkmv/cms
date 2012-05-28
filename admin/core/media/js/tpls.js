$(document).ready(function() {
	/**
	 * Сохранение шаблона
	 */
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
				$(".hint").html("<p>" + msg + "</p>");
			}
		});
		return false;
	});

	/**
	 * Добавление шаблона
	 */
	$("#formAddTemplate").submit(function() {
		if ($("#titleAddTemplate").val() == "") {
			$("#addTemplateErrors").html("<p>Укажите название шаблона.</p>");
			return false;
		}

		if ($("#sumBlocksAddTemplate").val() == "") {
			$("#addTemplateErrors").html("<p>Укажите количество блоков.</p>");
			return false;
		}

		if ($("#filenameAddTemplate").val() == "") {
			$("#addTemplateErrors").html("<p>Выберите файл.</p>");
			return false;
		}

		var str = $(this).serialize();
		$.ajax({
			type : "POST",
			url : "add_tpl.php",
			data : str,
			success : function(msg) {
				/*if ($("#addTemplateErrors").val() == "") {
					document.location.href = 'tpls.php';
				}*/

				$("#addTemplateErrors").html("<p>" + msg + "</p>");
			}
		});
		return false;
	});
});
