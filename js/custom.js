/*jslint plusplus: true, evil: true*/
/*global $, console */
$(document).ready(function () {
	'use strict';


	/*********** start form *********************/

// submit validate


	//user validate
	$(".name").blur(function () {
		if ($(this).val().length <= 3) {
			$(this).css("border", "1px solid #f00");
			$(this).parent().find(".custem-alert").fadeIn(200);
			userError = true;
		} else {
			$(this).css("border", "1px solid #080");
			$(this).parent().find(".custem-alert").fadeOut(200);
			userError = false;
		}

	});

	// email validate
	$(".email").blur(function () {
		if ($(this).val() === '') {
			$(this).css("border", "1px solid #f00");
			$(this).parent().find(".custem-alert").fadeIn(200);
			emailError = true;
		} else {
			$(this).css("border", "1px solid #080");
			$(this).parent().find(".custem-alert").fadeOut(200);
			emailError = false;
		}

	});

	//massege validate
	$(".massege").blur(function () {
		if ($(this).val().length <= 11) {
			$(this).css("border", "1px solid #f00");
			$(this).parent().find(".custem-alert").fadeIn(200);
			msgError = true;
		} else {
			$(this).css("border", "1px solid #080");
			$(this).parent().find(".custem-alert").fadeOut(200);
			msgError = false;
		}

	});

	//submit form
	$(".contact-form").submit(function (e) {

		if (userError === true || emailError === true || msgError === true) {

			e.preventDefault();

			$(".username , .email , .massege").blur();

		}
	});


	$("button").click(function () {
		$(this).parents(".alert-dismissible").hide();
	});

	/*********end form ************************/
});