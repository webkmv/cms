// quick_access hover
$(document).ready(function() {
	$('.modul_table tr').live('mouseover', function(){
		$(this).css('background', '#e4eff9');
	}).live('mouseout', function(){
		$(this).css('background', '#fff')
	});
});

// hover menu
$(function(){
		$('.sub_menu').css('visibility', 'hidden');

		$(".nav_menu td").hover(function(){
    
        $(this).find('a:first').addClass("hover");
        $('ul:first',this).css('visibility', 'visible');
    
    }, function(){
    
       $(this).find('a:first').removeClass("hover");
       $('ul:first',this).css('visibility', 'hidden');
    
    });
    
});

// content_menu hover
$(document).ready(function(){
	$(".content_menu .menu_head").click(function(){
		$(this).next("div.content_hover").slideToggle(300).siblings("div.content_hover").slideUp("fast");
		$(this).siblings('.menu_head');
		return false;
	});
	
	$('.menu_head:last').next().css('margin-bottom', '0px');
	$('.menu_head:last').next().children('a:last').css('border-bottom', 'none')
});




