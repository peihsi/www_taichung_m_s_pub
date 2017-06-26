(function( $ ){
        $.fn.FlexFadeIn = function() {
            return this.each(function() {
            	$(this).css({
            		opacity: '0',
            		display: 'flex'
            	});
            	$(this).animate({
				  opacity: 1,
				}, 600, function() {
				    // Animation complete.
				    $(this).addClass('Flex_In')
				});
       		});
        }
        $.fn.FlexFadeOut = function() {
            return this.each(function() {
            	$(this).css({
            		opacity: '1'
            	});
            	$(this).animate({
				  opacity: 0,
				}, 600, function() {
				    // Animation complete.
				    $(this).css('display', 'none');
				    $(this).removeClass('Flex_In')
				});
       		});
        }
})(jQuery);