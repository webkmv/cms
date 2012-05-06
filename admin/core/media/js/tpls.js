$(document).ready(function(){
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
});