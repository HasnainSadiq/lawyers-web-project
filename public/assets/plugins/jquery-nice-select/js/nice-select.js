(function($) {
    "use strict";	
	
	// ______________Nice Select	
	$('select.nice-select').niceSelect();
		
	$('#licence-categories').change(function() {
		$('.licence-content').hide();
		$('#' + $(this).val()).show();
	});
	
})(jQuery);