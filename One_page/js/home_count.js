$(document).ready(function() {
	$("#home_members").on('change', function(event) {
		event.preventDefault();
		if($(this).val() != "" && $(this).val() > 0){
			$("#home_not_members").parents('div').eq(0).collapse('show');
			$("#home_income").parents('div').eq(0).find('label > span').text(13084*($("#home_members").val() - $("#home_not_members").val()));



		}
		else{
			// $("#home_not_members").parents('div').eq(0).collapse('hide');
			// $("#home_income").parents('div').eq(0).collapse('hide');

			
		}
	});

	$("#home_not_members").on('change', function(event) {
		event.preventDefault();
		if($(this).val() != "" && $(this).val() >= 0){
			$("#home_income").parents('div').eq(0).collapse('show');
			$("#home_income").parents('div').eq(0).find('label > span').text(13084*($("#home_members").val() - $("#home_not_members").val()));
			



		}
		else{
			$("#home_not_members").parents('div').eq(0).collapse('hide');
			$("#home_income").parents('div').eq(0).collapse('hide');

			
		}
	});

	$("#home_income").on('change', function(event) {
		event.preventDefault();
			$("#home_page1").removeClass('col-sm-offset-3');
			$("#home_property").parents('div').eq(0).find('label > span').text(250000*($("#home_members").val() - $("#home_not_members").val() - 1) + 2500000);
			setTimeout(function(){
  				$("#home_page2").collapse('show');
			}, 1000);
			
	});

	$("#home_property").on('change', function(event) {
		event.preventDefault();
		$("#home_immproperty").parents('div').eq(0).collapse('show');
		//$("#home_income").parents('div').eq(0).find('label > span').text(13084*($("#home_members").val() - $("#home_not_members").val()));
			
	});

	$("#home_immproperty").on('change', function(event) {
		event.preventDefault();
		$("#home_result").parents('div').eq(0).collapse('show');

		if($("#home_property").val() == "N" && $("#home_immproperty").val() == "N" && $("#home_income").val() == "N"){
			$("#home_result").text('貴戶可能符合申請，您可向役男戶籍地區公所提出線上登記。');
		}
		else{
			$("#home_result").text('貴戶似乎不符合申請條件，但您仍可向役男戶籍地區公所提出線上登記。');
		}
		
		//$("#home_income").parents('div').eq(0).find('label > span').text(13084*($("#home_members").val() - $("#home_not_members").val()));
			
	});

	$("#show_form_bt").on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$("#contactSlice").collapse('show');
		setTimeout(function(){
  			$("#homeform-nav-bt").trigger('click');
		}, 500);
		
		
		/* Act on the event */
	});

	


//home_income
//home_page2
	
});