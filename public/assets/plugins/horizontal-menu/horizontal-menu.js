jQuery(function(e) {
	'use strict';
	document.addEventListener("touchstart", function(e) {}, false);
	jQuery(function() {
		jQuery('body').wrapInner('<div class="horizontalMenucontainer" />');
		jQuery('<div class="horizontal-overlapbg"></div>').prependTo('.horizontalMenu');
		jQuery('#horizontal-navtoggle').on("click", function(e) {
			jQuery('body').toggleClass('active');
		});
		jQuery('.horizontal-overlapbg').on("click", function(e) {
			jQuery("body").removeClass('active');
		});
		jQuery('.horizontalMenu > .horizontalMenu-list > li').has('.sub-menu').prepend('<span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>');
		jQuery('.horizontalMenu > .horizontalMenu-list > li').has('.horizontal-megamenu').prepend('<span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>');
		jQuery('.horizontalMenu-click').on("click", function(e) {
			jQuery(this).toggleClass('horizontal-activearrow').parent().siblings().children().removeClass('horizontal-activearrow');
			jQuery(".horizontalMenu > .horizontalMenu-list > li > .sub-menu, .horizontal-megamenu").not(jQuery(this).siblings('.horizontalMenu > .horizontalMenu-list > li > .sub-menu, .horizontal-megamenu')).slideUp('slow');
			jQuery(this).siblings('.sub-menu').slideToggle('slow');
			jQuery(this).siblings('.horizontal-megamenu').slideToggle('slow');
		});
		jQuery('.horizontalMenu > .horizontalMenu-list > li > ul > li').has('.sub-menu').prepend('<span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>');
		jQuery('.horizontalMenu > .horizontalMenu-list > li > ul > li > ul > li').has('.sub-menu').prepend('<span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>');
		jQuery('.horizontalMenu-click02').on("click", function(e){
			jQuery(this).children('.horizontalMenu-arrow').toggleClass('horizontalMenu-rotate');
			jQuery(this).siblings('li > .sub-menu').slideToggle('slow');
		});
		jQuery(window).on('resize', function(e) {
			if (jQuery(window).outerWidth() < 992) {
				jQuery('.horizontalMenu').css('height', jQuery(this).height() + "px");
				jQuery('.horizontalMenucontainer').css('min-width', jQuery(this).width() + "px");
			} else {
				jQuery('.horizontalMenu').removeAttr("style");
				jQuery('.horizontalMenucontainer').removeAttr("style");
				jQuery('body').removeClass("active");
				jQuery('.horizontalMenu > .horizontalMenu-list > li > .horizontal-megamenu, .horizontalMenu > .horizontalMenu-list > li > ul.sub-menu, .horizontalMenu > .horizontalMenu-list > li > ul.sub-menu > li > ul.sub-menu, .horizontalMenu > .horizontalMenu-list > li > ul.sub-menu > li > ul.sub-menu > li > ul.sub-menu').removeAttr("style");
				jQuery('.horizontalMenu-click').removeClass("horizontal-activearrow");
				jQuery('.horizontalMenu-click02 > i').removeClass("horizontalMenu-rotate");
			}
		});
		jQuery(window).trigger('resize');
	});
}());