function sendReviews()
{
    var regex = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    if($('#name').val() == '' || $('#email').val() == '' || $('#title').val() == '' || $('#text').val() == ''){    
        $('#error').text('Все поля обязательны для заполнения');
			return false;
    }
    else if (!regex.test($('#email').val()))
    {
	$('#error').text('Введеите правильный email');
		return false;
    }
    else
    {
	var str = $('#reviewsForm').serialize();
	$.ajax({
                type: "POST",
                url: "modules/mod_reviews/saveData.php",
                data: str,
                success: function(){
           	    $('#error').text('');
                    $('#complete').text("Спасибо. Отзыв успешно отправлен.");                  
                }
        })
    }
}