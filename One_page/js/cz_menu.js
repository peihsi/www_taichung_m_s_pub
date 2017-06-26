(function( $ ){
        $.fn.FlexFadeIn = function(callback) {
            this.each(function() {
            	$(this).css({
            		opacity: '0',
            		display: 'flex'
            	});
            	$(this).animate({
				  opacity: 1,
				}, 400, function() {
				    // Animation complete.
				    $(this).addClass('Flex_In');
				});
       		});
       		if (typeof callback === "function") {
		        setTimeout(function(){ callback(); }, 400);

		    }
		    
        }

        $.fn.FlexFadeOut = function(callback) {
            this.each(function() {
            	$(this).css({
            		opacity: '1'
            	});
            	$(this).animate({
				  opacity: 0,
				}, 400, function() {
				    // Animation complete.
				    $(this).css('display', 'none');
				    $(this).removeClass('Flex_In');
				});
       		});
       		if (typeof callback === "function") {
		        setTimeout(function(){ callback(); }, 400);
		    }
        }
})(jQuery);