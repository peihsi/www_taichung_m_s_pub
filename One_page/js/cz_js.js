$(document).ready(function() {
	$("#scrollTarget > ul > li > a").on('click', function(event) {
		//event.preventDefault();
		$("#scrollTarget > ul > li.active").removeClass('active');
		$(this).parent().addClass('active');


		
		/* Act on the event */
	});





});