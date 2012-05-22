$(document).ready(function(){
	/**
	 * Сохранение страницы
	 */
	$("#viewTplForm").submit(function(){
		if ($("#titleViewTemplate").val() == "")
			{
				$(".hint").html("<p>Укажите название шаблона.</p>");
				return false;
			}
		
		if ($("#blocksViewTemplate").val() == "")
		{
			$(".hint").html("<p>Укажите количество блоков.</p>");
			return false;
		}
		
		var str = $(this).serialize(); 
		$.ajax({ 
			type: "POST", 
			url: "save_tpl.php",
			data: str, 
			success: function(msg){ 
				$(".hint").html("<p>"+msg+"</p>");
			}
		});
		return false; 
	});
	
	/**
	 * Добавление страницы
	 */
	$("#formAddPage").submit(function(){
		if ($("#titleAddPage").val() == "")
			{
				$("#addPageErrors").html("<p>Укажите title страницы.</p>");
				return false;
			}				
		
		var str = $(this).serialize(); 
		$.ajax({ 
			type: "POST", 
			url: "add_page.php",
			data: str, 
			success: function(msg){ 
				$("#addPageErrors").html("<p>"+msg+"</p>");
			}
		});
		return false; 
	});
});