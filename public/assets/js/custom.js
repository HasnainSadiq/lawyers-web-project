(function($) {
	"use strict";
	
	// ______________ Cover-image
	$(".cover-image").each(function(e) {
		var attr = $(this).attr('data-image-src');
		if (typeof attr !== typeof undefined && attr !== false) {
			$(this).css('background', 'url(' + attr + ') center center');
		}
	});
	
	// ______________ Global Loader
	$(window).on("load", function(e) {
		$("#global-loader").fadeOut("slow");
	})

	// ______________ Color-skin
	$(document).on("click", "a[data-theme]", function(e) {
        $("head link#theme").attr("href", $(this).data("theme"));
        $(this).toggleClass('active').siblings().removeClass('active');
    });
    $(document).on("click", "a[data-effect]", function(e) {
        $("head link#effect").attr("href", $(this).data("effect"));
        $(this).toggleClass('active').siblings().removeClass('active');
    });	
	
	// ______________ Modal
	$("#myModal").modal('show');	
	
	// ______________Rating Stars
	var ratingOptions = {
		selectors: {
			starsSelector: '.rating-stars',
			starSelector: '.rating-star',
			starActiveClass: 'is--active',
			starHoverClass: 'is--hover',
			starNoHoverClass: 'is--no-hover',
			targetFormElementSelector: '.rating-value'
		}
	};
	$(".rating-stars").ratingStars(ratingOptions);
	
	// ______________mCustomScrollbar
	$(".vscroll").mCustomScrollbar();
	$(".nav-sidebar").mCustomScrollbar({
		theme: "minimal",
		autoHideScrollbar: true,
		scrollbarPosition: "outside"
	});
	
	
	// ______________Active Class
	$(".horizontalMenu-list li a").each(function(e) {
		var pageUrl = window.location.href.split(/[?#]/)[0];
		if (this.href == pageUrl) {
			$(this).addClass("active");
			$(this).parent().addClass("active"); // add active to li of the current link
			$(this).parent().parent().prev().addClass("active"); // add active class to an anchor
			$(this).parent().parent().prev().click(); // click the item to make it drop
		}
	});
	
	
	// ______________ Back to Top
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
	
	
	
	// ______________Quantity-right-plus
	var quantitiy = 0;
	$(document).on('click','.quantity-right-plus', function(e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity').val()); 
		$('#quantity').val(quantity + 1); 
	});
	$(document).on('click', '.quantity-left-minus', function(e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity').val());
		if (quantity > 0) {
			$('#quantity').val(quantity - 1);
		}
	});
	
	// ______________Quantity-right-plus1
	var quantitiy = 0;
	$(document).on('click','.quantity-right-plus1', function(e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity1').val()); 
		$('#quantity1').val(quantity + 1); 
	});
	$(document).on('click', '.quantity-left-minus1', function(e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity1').val());
		if (quantity > 0) {
			$('#quantity1').val(quantity - 1);
		}
	});
	// ______________Quantity-right-plus2
	var quantitiy = 0;
	$(document).on('click','.quantity-right-plus2', function(e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity2').val()); 
		$('#quantity2').val(quantity + 1); 
	});
	$(document).on('click', '.quantity-left-minus2', function(e) {
		e.preventDefault();
		var quantity = parseInt($('#quantity2').val());
		if (quantity > 0) {
			$('#quantity2').val(quantity - 1);
		}
	});
	
	
	// ______________Chart-circle
	if ($('.chart-circle').length) {
		$('.chart-circle').each(function(e) {
			let $this = $(this);
			$this.circleProgress({
				fill: {
					color: $this.attr('data-color')
				},
				size: $this.height(),
				startAngle: -Math.PI / 4 * 2,
				emptyFill: '#f9faff',
				lineCap: ''
			});
		});
	}
	const DIV_CARD = 'div.card';
	
	
	
	// ______________Tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// ______________Popover
	$('[data-toggle="popover"]').popover({
		html: true
	});
	
	// ______________Card Remove
	$(document).on('click', '[data-toggle="card-remove"]', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.remove();
		e.preventDefault();
		return false;
	});
	
	// ______________Card Collapse
	$(document).on('click', '[data-toggle="card-collapse"]', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-collapsed');
		e.preventDefault();
		return false;
	});
	
	// ______________Card Full Screen
	$(document).on('click', '[data-toggle="card-fullscreen"]', function(e) {
		let $card = $(this).closest(DIV_CARD);
		$card.toggleClass('card-fullscreen').removeClass('card-collapsed');
		e.preventDefault();
		return false;
	});
	
	// ______________ Image-Tooltip
	$(".img-view").imgTooltip({previewimg: "templateview", imageWidth: "500px"});
	
	
	// ______________ drodownlist
	$(".header-dropdown-list").mCustomScrollbar({
		theme:"minimal",
		autoHideScrollbar: true,
		scrollbarPosition: "outside"
	});
	
	// ______________ Rated-Products1
	$(".rated-products1").mCustomScrollbar({
		theme:"minimal",
		autoHideScrollbar: true,
		scrollbarPosition: "outside"
	});
	
	
		// ______________ Switch-Demo
	
	/*Headerstyle Styles*/
	
			// ______________Headerstyle1
			//$('body').addClass('headerstyle1');//
			
			// ______________ Headerstyle2
			//$('body').addClass('headerstyle2');//
			
			// ______________ Headerstyle3
			//$('body').addClass('headerstyle3');//
			
			
			
			
	/*Horizontal-Main Styles*/
	
			// ______________ Default-menu
			//$('body').addClass('default-menu');//
			
			
			// ______________ Menu-style1
			//$('body').addClass('menu-style1');//
			
			
			// ______________ Menu-style2
			//$('body').addClass('menu-style2');//
	
})(jQuery);
