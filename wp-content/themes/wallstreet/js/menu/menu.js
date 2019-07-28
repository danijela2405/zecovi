jQuery(document).ready(function() {
	   jQuery('.nav li.dropdown').hover(function() {
		   jQuery(this).addClass('open');
	   }, function() {
		   jQuery(this).removeClass('open');
	   }); 
	   
	});
	
/* ---------------------------------------------- /*
         * Scroll top
/* ---------------------------------------------- */


jQuery(document).ready(function($) {
	
/*-- Page Scroll To Top Section ---------------*/
	jQuery(document).ready(function () {
	
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('.page_scrollup').fadeIn();
			} else {
				jQuery('.page_scrollup').fadeOut();
			}
		});
	
		jQuery('.page_scrollup').click(function () {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});
	
	});	

		
});

jQuery(document).ready(function($) {
	var slideIndex = 0;
	showSlides();

	function showSlides() {
		var i;
		var slides = $(".mySlides");
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		slideIndex++;
		if (slideIndex > slides.length) {slideIndex = 1}
		slides[slideIndex-1].style.display = "block";
		setTimeout(showSlides, 5000); // Change image every 2 seconds
	}

});