jQuery(function($){
	
	$(document).ready(function() {
		
		jQuery('.counter-item').appear(function() {
			jQuery('.counter-number').countTo();
			jQuery(this).addClass('funcionando');
			console.log('funcionando');
		});
		
			/* start typed element */
			var subElementArray = $.map($('.sub-element'), function(el) { return $(el).text(); });    
			$(".element").typed({
				strings: subElementArray,
				typeSpeed: 30,
				contentType: 'html',
				showCursor: false,
				loop: true,
				loopCount: true,
			}); 
			/* end typed element */
	}); 
		 	
});
