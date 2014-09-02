jQuery('.modal').magnificPopup({type:'ajax'});

jQuery('.menuToggle').on('click', function(e){
	e.preventDefault();
	jQuery('.menuContainer').toggleClass('active');
	jQuery(this).toggleClass('active');
});

jQuery('#gallery').each(function() { // the containers for all your galleries
    jQuery(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled:true
        }
    });
}); 

var menuHeight = jQuery('aside.slideMenu').height();
var menuHeightPlus = jQuery('aside.slideMenu').height() + 50;

jQuery(window).bind('scroll', function() {
	var navHeight = $( window ).height() - menuHeight;
	if (jQuery(window).scrollTop() > navHeight) {
		jQuery('aside.slideMenu').addClass('fixed');
	} else {
		jQuery('aside.slideMenu').removeClass('fixed');
    }
});

$('a.scroll').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top - menuHeightPlus
    }, 500);
    return false;
});

if (!Modernizr.svg) {
	jQuery('img[src$=".svg"]').each(function()
	{
		jQuery(this).attr('src', $(this).attr('src').replace('.svg', '.png'));
	});
}