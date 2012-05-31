$(document).ready(function(){
    
    $('.error_explanation ul li').hide();
    /**
     *
     * Обработка данных формы
     */   
    $('#booking').submit(function(event){
        
        if($('#user').val() == ''){
            $('.user_field').show();
        }
        else{
            $('.user_field').hide();
        }
        
        
        if($('#phone').val() == ''){
            $('.phone_field').show();
        }
        else{
            $('.phone_field').hide();
        }
        
        
        if($('#email').val() == ''){
            $('.mail_field').show();
        }
        else{
            $('.mail_field').hide();
        }
        
        var str = $(this).serialize();
        
        $.ajax({
                type: "POST",
                url: "modules/mod_booking/saveData.php",
                data: str,
                success: function(){
                    $('.first_dialog').slideUp(1000);
                    $('.second_dialog').slideDown(3000);
                    
                }
            })
        
        event.preventDefault();
        })
    
})