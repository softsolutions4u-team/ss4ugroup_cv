jQuery(document).ready(function () {

	//	ADD THEME ID TO BODY FOR VERIFICATION
	var themeId = jQuery("#site-content").attr("themeId");
	jQuery("body").addClass(themeId);

	//MOBILE NAV TOGGLE
	jQuery('body .mobile-toggle').click(function () {
		if (jQuery('body .menu-modal').hasClass('active')) {
			jQuery('body .menu-modal').removeClass('active');
		} else {
			jQuery('body .menu-modal').addClass('active');
		}
	});

	//	HIDE NAV ON MOBILE CLICK
	jQuery('.menu-modal a').one('click', function () {
		setTimeout(function () {
			if (jQuery('body .menu-modal').hasClass('active')) {
				jQuery('body .menu-modal').removeClass('active');
			}
		}, 1500);
	});

	//	NOTIFICATION DETAIL BOX
	jQuery('.user-note-detail .note-user').click(function () {
		jQuery(this).toggleClass('active');
	});

	//	HIDE SECTION DYNAMICALLY BASED ON TOGGLE SECTION

	//	HIDE LOGO
	var logoHide = document.getElementById("logoHide");
	document.getElementById("logoHide").addEventListener("change", function (element) {
		document.getElementById("logoHide").value = logoHide.checked;
	});

	var a = jQuery('#logoHide').prop("value");
	if ( a === '1' ) {
		document.getElementById("logoHide").checked = true;
	} else if ( a === '0' ) {
		document.getElementById("logoHide").checked = false;
	}
	
	//	PERSONAL PROFILE HIDE
	
	var personalProfile = document.getElementById("personalProfile");
	document.getElementById("personalProfile").addEventListener("change", function (element) {
		document.getElementById("personalProfile").value = personalProfile.checked;
	});

	var a = jQuery('#personalProfile').prop("value");
	if ( a === '1' ) {
		document.getElementById("personalProfile").checked = true;
	} else if ( a === '0' ) {
		document.getElementById("personalProfile").checked = false;
	}

	//	SMOOTH SCROLL
	jQuery('.menu-modal a[href*="#"],header a[href*="#"], a.cv-btn').on('click', function (e) {
		e.preventDefault()
		jQuery('html, body').animate(
				{
					scrollTop: jQuery(jQuery(this).attr('href')).offset().top,
				}, 800, 'linear')
	});

	// 	LOADING BAR ACTIVE
	jQuery('.layout-form .sumbit-btn').click(function () {
		jQuery('.loader-image').addClass('active');
	});

	//	COLOR PALLET SELECTION
	if (jQuery('body').hasClass('video1')) {
		jQuery('body .color-code.black').addClass('active');
	}
	if (jQuery('body').hasClass('video2')) {
		jQuery('body .color-code.eastern-blue').addClass('active');
	}
	if (jQuery('body').hasClass('standard1')) {
		jQuery('body .color-code.odrich').addClass('active');
	}
	if (jQuery('body').hasClass('standard2')) {
		jQuery('body .color-code.chilean').addClass('active');
	}
	jQuery('body .color-code').click(function () {
		if (jQuery('body .color-code').removeClass('active')) {
			jQuery(this).addClass('active');
		}
	});

// 	jQuery("#fname, #lname").bind("keyup", function(event) {
	//  var regex = /^[a-zA-Z\-\.\_\,\s]+$/;
//             jQuery(this).attr('maxlength',jQuery(this).attr('data-length') );
//             jQuery(this).parent().find('span.error-display').text("");
//             if (regex.test(jQuery(this).val()) || jQuery(this).val()=="") {
//                 var textlen = jQuery(this).attr('data-length') - jQuery(this).val().length;
//                 if(textlen == 0) {
//                     jQuery(this).parent().find('span.error-display').text("Entered Maximum Character");
//                     }
//             } 
	//else {
	//      jQuery(this).parent().find('span.error-display').text("Only Alphabet and - and .");
	//}
//         });
// 	jQuery('#fname, #lname').bind("cut copy paste", function(e) {
// 		e.preventDefault();
// 		jQuery('#textbox_id').bind("contextmenu", function(e) {
// 			e.preventDefault();
// 		});
// 	});
	jQuery("#fname, #lname, .mobile-number, .dateWork, .dateEducation").bind("keyup", function (event) {
		jQuery(this).attr('maxlength', jQuery(this).attr('data-length'));
	});
	jQuery('#fname, #lname').on('keypress', function (event) {
		var regex = new RegExp("^[a-zA-Z\-\_\.\,\s]+$");
		var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
		if (!regex.test(key)) {
			event.preventDefault();
			return false;
		}
	});
	jQuery(".mobile-number").keypress(function (e) {
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
			return false;
		}
	});
	jQuery(".dateWork, .dateEducation").on('keydown', function (e) {
		IsNumeric(this, e.keyCode);
	});
	var isShift = false;
	var seperator = "/";
	function IsNumeric(input, keyCode) {
		if (keyCode == 16) {
			isShift = true;
		}
		//Allow only Numeric Keys.
		if (((keyCode >= 48 && keyCode <= 57) || keyCode == 8 || keyCode <= 37 || keyCode <= 39 || (keyCode >= 96 && keyCode <= 105)) && isShift == false) {
			if ((input.value.length == 2 || input.value.length == 5) && keyCode != 8) {
				input.value += seperator;
			}
			return true;
		} else {
			return false;
		}
	}
	;

	var equalHeight = jQuery('.login-form .width-40').height() - 75;
	jQuery('.login-form .width-60').css('height', equalHeight);

	jQuery(".current-password").click(function () {
		var temp = document.getElementById("password");
		if (temp.type === "password") {
			temp.type = "text";
		} else {
			temp.type = "password";
		}
	});


});
jQuery(window).resize(function () {
	var equalHeight = jQuery('.login-form  .width-40').height() - 75;
	jQuery('.login-form .width-60').css('height', equalHeight);
});
jQuery(window).scroll(function () {
	var equalHeight = jQuery('.login-form .width-40').height();
	jQuery('.login-form .width-60').css('height', equalHeight);
});


//THEME LAYOUT SCROLL NAV CHANGE
jQuery(document).ready(function () {
	if ($('header').hasClass('theme2') | $('header').hasClass('theme3')) {
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
	} else if ($('header').hasClass('theme1') | $('header').hasClass('theme4')) {
		jQuery(window).scroll(function () {
			var scrollTop = jQuery(window).scrollTop(),
					elementOffset1 = jQuery('.page-section-1').offset().top,
					elementOffset2 = jQuery('.page-section-2').offset().top,
					elementOffset3 = jQuery('.page-section-3').offset().top,
					elementOffset4 = jQuery('.page-section-4').offset().top,
					elementOffset5 = jQuery('.page-section-5').offset().top,
					elementOffset6 = jQuery('.page-section-6').offset().top,
					elementOffset7 = jQuery('.page-section-7').offset().top,
					distance1 = (elementOffset1 - scrollTop),
					distance2 = (elementOffset2 - scrollTop),
					distance3 = (elementOffset3 - scrollTop),
					distance4 = (elementOffset4 - scrollTop),
					distance5 = (elementOffset5 - scrollTop),
					distance6 = (elementOffset6 - scrollTop),
					distance7 = (elementOffset7 - scrollTop);

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
			if (distance7 <= 5) {
				jQuery('.primary-menu li a').removeClass('active');
				jQuery('.primary-menu li:nth-child(7) a').addClass('active');
			}
		}).scroll();
	}
});
