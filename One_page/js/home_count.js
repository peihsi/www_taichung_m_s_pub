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
			$("#home_result").html('貴戶可能符合申請，您可向役男戶籍地區公所提出線上登記。<br>注意!本試算僅作參考，實際審核結果將依財稅資料與相關法規依據為主!');
		}
		else{
			$("#home_result").html('貴戶似乎不符合申請條件，但您仍可向役男戶籍地區公所提出線上登記。<br>注意!本試算僅作參考，實際審核結果將依財稅資料與相關法規依據為主!');
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

	$("#town").on('change', function(event){
            $('#village').empty();
            // $("#MSG").text("連線中...");
            $.ajax({
                url: 'index.php/area/get_village_by_town',
                type: 'post',
                dataType: 'json',
                data: {
                    town: $("#town").val()
                }
            })
            .always(function() {
                console.log("complete");                  
            })
            .done(function(responsive_) {
                //var result = JSON.parse(responsive);
                var responsive = responsive_['village_list'];
                //console.log(responsive);
                var seloption = "";
                $.each(responsive, function(index, record){
                    seloption += '<option value="'+record.Village_id+'">'+record.Village_name+'</option>'; 
                });

                $('#village').append(seloption);
                console.log("success");
            })
            .fail(function() {
                console.log("error");
            }); //更新村里下拉選單		
	});
	


//home_income
//home_page2
	
});
	var CWait_interrupt = 0;
	function CWait_Start(wait_time, msg){
        //為了相容於舊版JS引擎，參數預設值改成在內部定義
        wait_time = typeof wait_time !== 'undefined' ? wait_time : 1000;
        msg = typeof msg !== 'undefined' ? msg : "與系統連線中...";
        //...........................................
        setTimeout(function(){
            if(!CWait_interrupt){
                $("#cortana_wait").fadeIn();
                $("#cortana_wait_msg").text(msg);
            }
            CWait_interrupt = 0;
        },wait_time);        
    }
    function CWait_End(wait_time){
        //為了相容於舊版JS引擎，參數預設值改成在內部定義
        wait_time = typeof wait_time !== 'undefined' ? wait_time : 0;
        //...........................................
        setTimeout(function(){
            CWait_interrupt = 1;
            $("#cortana_wait").stop().fadeOut();
        },wait_time);
        setTimeout(function(){
            CWait_interrupt = 0;
        },1050);
    }