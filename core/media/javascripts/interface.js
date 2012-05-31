// 3 blocks delete margin
$(document).ready(function() {
	$('.items').eq(2).css('margin-right', '0px');
	$('.items').eq(5).css('margin-right', '0px');
	$('.items').eq(8).css('margin-right', '0px');
	$('.two_input input:last-child').css('margin-right', '0px');
	$('.two_label label:last-child').css('margin-left', '86px');
	$('.second_label label:last-child').css('margin-left', '234px');
	$('.second_input select:last-child').css('width', '100px');
	$('.two_label').css('margin-top', '10px');
});


// fancy box
$(document).ready(function() {
	//fancybox in scroll gallery
	$("a[rel=group2]").fancybox({
		'titlePosition'	: 'inside',
		'padding'		: 0,
		'cyclic' : true,
		'autoSize' : true
	});
	
	//fancybox gallery medal
	$("a[rel=group]").fancybox({
		'titlePosition'	: 'inside',
		'padding'		: 0,
		'cyclic' : true,
		'autoSize' : true
	});
	
	// fancybox bronirovanie modal
	$('.bronir').fancybox({
		'fixed': true,
		'fitToView': false,
		'margin': 100
	});

	
});


// scroll horizonatlly
$(window).load(function() {
		    mCustomScrollbars();
		});
		function mCustomScrollbars(){
		    $("#mcs_container").mCustomScrollbar("horizontal",0,"easeOutCirc",1.05,"auto","yes","yes",0);
		}
		/* function to fix the -10000 pixel limit of jquery.animate */
		$.fx.prototype.cur = function(){
		    if ( this.elem[this.prop] != null && (!this.elem.style || this.elem.style[this.prop] == null) ) {
		      return this.elem[ this.prop ];
	    }
		    var r = parseFloat( jQuery.css( this.elem, this.prop ) );
		    return typeof r == 'undefined' ? 0 : r;
		}
		/* function to load new content dynamically */
		function LoadNewContent(id,file){
		    $("#"+id+" .customScrollBox .content").load(file,function(){
		        mCustomScrollbars();
		    });
		}





// main carousel
jQuery(document).ready(function() {
    jQuery('#mycarousel1').jcarousel({
    	wrap: 'circular',
    	scroll: 1,
		start: 1,
    	visible: 1
	});
});


// jcarouselindex scrolling to number rooms
jQuery(document).ready(function() {

function mycarousel_initCallback(carousel) {
    jQuery('.jcarousel-control a').bind('click', function() {
        carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
        return false;
    });

    jQuery('#mycarousel-next').bind('click', function() {
        carousel.next();
        
//       $('.select_' + itemIndex).hide();
        return false;
    });

    jQuery('#mycarousel-prev').bind('click', function() {
        carousel.prev();
        return false;
    });
};

    jQuery("#foto_carousel").jcarousel({
      wrap: 'circular',
    	scroll: 1,
    	start: 1, // Индекс элемента с которого начинается показ
    	visible: 4,
      initCallback: mycarousel_initCallback,
      // This tells jCarousel NOT to autobuild prev/next buttons
      buttonNextHTML: null,
      buttonPrevHTML: null
    });



});



