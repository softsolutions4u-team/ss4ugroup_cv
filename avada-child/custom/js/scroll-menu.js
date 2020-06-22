jQuery(window).scroll(function () {
	var scrollTop = jQuery(window).scrollTop(),
			elementOffset1 = jQuery('.page-section-1').offset().top,
			elementOffset2 = jQuery('.page-section-2').offset().top,
			elementOffset3 = jQuery('.page-section-3').offset().top,
			elementOffset4 = jQuery('.page-section-4').offset().top,
			elementOffset5 = jQuery('.page-section-5').offset().top,
			elementOffset6 = jQuery('.page-section-6').offset().top,
			distance1 = (elementOffset1 - scrollTop),
			distance2 = (elementOffset2 - scrollTop),
			distance3 = (elementOffset3 - scrollTop),
			distance4 = (elementOffset4 - scrollTop),
			distance5 = (elementOffset5 - scrollTop),
			distance6 = (elementOffset6 - scrollTop);

	if (distance1 <= 0) {
		jQuery('.primary-menu li a').removeClass('active');
		jQuery('.primary-menu li:nth-child(1) a').addClass('active');
	}
	if (distance2 <= 5) {
		jQuery('.primary-menu li a').removeClass('active');
		jQuery('.primary-menu li:nth-child(2) a').addClass('active');
	}
	if (distance3 <= 5) {
		jQuery('.primary-menu li a').removeClass('active');
		jQuery('.primary-menu li:nth-child(3) a').addClass('active');
	}
	if (distance4 <= 5) {
		jQuery('.primary-menu li a').removeClass('active');
		jQuery('.primary-menu li:nth-child(4) a').addClass('active');
	}
	if (distance5 <= 5) {
		jQuery('.primary-menu li a').removeClass('active');
		jQuery('.primary-menu li:nth-child(5) a').addClass('active');
	}
	if (distance6 <= 5) {
		jQuery('.primary-menu li a').removeClass('active');
		jQuery('.primary-menu li:nth-child(6) a').addClass('active');
	}
}).scroll();