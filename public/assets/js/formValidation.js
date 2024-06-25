$(document).ready(function() {
	// Sign-up form validation
	$("#register_form").validate({
			rules: {
					first_name: {
							required: true,
							maxlength: 15
					},
					last_name: {
						required: true,
						maxlength: 15
					},
					email: {
							required: true,
							email: true,
							maxlength: 255
					},
					password: {
							required: true,
							minlength: 3
					},
					password_confirmation: {
						required: true,
						minlength: 3,
						equalTo: '#password'
				}
			},
			messages: {
					first_name: {
							required: "Please enter your firstname.",
							maxlength: "Your firstname must be less than 15 characters"
					},
					last_name: {
						required: "Please enter your lastname.",
						maxlength: "Your username must be less than 15 characters"
					},
					email: {
							required: "Please enter your email",
							email: "Please enter a valid email address",
							maxlength: "Your email must be less than 255 characters"
					},
					password: {
							required: "Please enter your password",
							minlength: "Your password must be at least 3 characters long"
					},
					password_confirmation: {
						required: "Please confirm your password",
						minlength: "Your password must be at least 3 characters long",
						equalTo: "Password did not match"
					}
			}
	});

	// Sign-in form validation
	$("#login_form").validate({
			rules: {
				email: {
					required: true,
					email: true,
					maxlength: 255
				},
				password: {
					required: true,
					minlength: 3
				}
			},
			messages: {
				email: {
					required: "Please enter your email",
					email: "Please enter a valid email address",
					maxlength: "Your email must be less than 255 characters"
				},
				password: {
					required: "Please enter your password",
					minlength: "Your password must be at least 3 characters long"
				},
			}
	});
});