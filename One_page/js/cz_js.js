$(document).ready(function() {
	var MainMenuFading = 0;
	$("#scrollTarget > ul > li > a").on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		if(MainMenuFading == 1){
			return;
		}
		var href = $(this).attr('href');
		if("#"+$("#globalWrapper > section.Flex_In").attr("id") == href){
			return;
		}
		

		MainMenuFading = 1;
		$("#scrollTarget > ul > li.active").removeClass('active');
		$(this).parent().addClass('active');

		$("#globalWrapper > section.Flex_In").FlexFadeOut(function(){
			//console.log("移除");
			window.location = href;
			$(href).FlexFadeIn(function(){
				$("#globalWrapper > section.Flex_In").removeClass('Flex_In');
				MainMenuFading = 0;
				//console.log(href);
			})
		});
		




		/* Act on the event */
	});





});