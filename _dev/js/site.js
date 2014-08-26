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


if (!Modernizr.svg) {
	jQuery('img[src$=".svg"]').each(function()
	{
		jQuery(this).attr('src', $(this).attr('src').replace('.svg', '.png'));
	});
}