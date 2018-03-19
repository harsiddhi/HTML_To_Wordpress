jQuery(document).ready(function($) {
	$(window).scroll(function() {
	    var k = $(window).scrollTop();
	    if(k >= 81) {
	        $("#masthead").addClass("scrolled");
	    } else {
	        $("#masthead").removeClass("scrolled");
	    }
	});
});