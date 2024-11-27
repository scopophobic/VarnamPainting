 jQuery(function($){
	
	var $window = $(window);

	// Show or hide the sticky footer button
	$window.scroll(function() {
		if ($(this).scrollTop() > 200) {
			$('.to_top').fadeIn(200);
		}else{
			$('.to_top').fadeOut(200);
			}
	});		
		
	// Animate the scroll to top
	$('.to_top').click(function(event) {
		event.preventDefault();
	
		$('html, body').animate({scrollTop: 0}, 300);
	});
	
	/*** Counter ***/
		
		jQuery('.counter-item').appear(function() {
			jQuery('.counter-number').countTo();
			jQuery(this).addClass('funcionando');
			console.log('funcionando');
		});
		
		/******/	
});
