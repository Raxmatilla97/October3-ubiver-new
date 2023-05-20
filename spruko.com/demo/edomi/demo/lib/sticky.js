$(document).ready(function(){

 //sticky-header
		$(window).on("scroll", function(e){
		if ($(window).scrollTop() >= 70) {
			$('.sticky').addClass('fixed-header');
			$('.sticky').addClass('visible-title');
		}
		else {
			$('.sticky').removeClass('fixed-header');
			$('.sticky').removeClass('visible-title');
		}
    });
	
	// ______________LOADER
   $("#global-loader").fadeOut("slow");

});


// ______________ BACK TO TOP BUTTON
	$(window).on("scroll", function(e) {
		if ($(this).scrollTop() > 0) {
			$('#back-to-top').fadeIn('slow');
		} else {
			$('#back-to-top').fadeOut('slow');
		}
	});
	$(document).on("click", "#back-to-top", function(e) {
		$("html, body").animate({
			scrollTop: 0
		}, 600);
		return false;
	});
	