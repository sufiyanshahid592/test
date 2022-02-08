$(document).on('click', '.close-modal-btn', function(){
	$(".alert-modal-container").fadeOut();
	$(".modal-container").fadeOut();
	$("body").css("overflow", "");
});
$(document).ready(function() {
    $('.dropdown-search').select2();
});
$(document).on("click", ".show-contact-details", function(){
	var proposal_id = $(this).attr("data-id");
	var getUrl = window.location;
	var baseUrl = getUrl .protocol + "//" + getUrl.host;
	$.ajax({
		url: "https://munasibrishta.com/Profile_Controller/show_contact_details",
		method: "post",
		data: {proposal_id:proposal_id},
		success: function(success){
			$(".alert-modal-container").html(success);
			$(".alert-modal-container").fadeIn();
			$("body").css("overflow", "hidden");
		}
	})
});
$(document).ready(function($) {
	var getUrl = window.location;
	var baseUrl = getUrl .protocol + "//" + getUrl.host;
	$(".non-approve-form").validate({
		rules:{
			payment_method:{
				required: true
			},
			txid:{
				required: true,
				digits: true
			}
		},
		messages:{
			payment_method:{
				required: "Please Select Payment Method"
			},
			txid:{
				required: "Please Enter TXID",
				digits: "Please enter just Numbers"
			}
		},
		submitHandler: function(success){
			$.ajax({
				url: "https://munasibrishta.com/Dashboard_Controller/send_approval_request",
				method: "post",
				data: $(".non-approve-form").serialize(),
				success: function(success){
					$(".approval-alert-box").html(success);
				}
			});
		}
	});
});
$(document).ready(function($) {
	$(".quick-search-form").submit(function(data){
		var form_data = $(".quick-search-form").serialize();
		var getUrl = window.location;
		var total_data_loaded = $(".load-more-btn").attr("total-data-loaded");
		var load_more = $(".load-more-btn").attr("load-more");
		var baseUrl = getUrl .protocol + "//" + getUrl.host;
		var cal = parseInt(total_data_loaded)+parseInt(load_more);
		$.ajax({
			url: "https://munasibrishta.com/Search_Controller/filter_data",
			method: "post",
			data: {form_data:form_data},
			success: function(success){
				// $(".search-page-content-section").html(success);
				$(".single-proposal-container").html(success);
				$(".load-more-btn").attr("total-data-loaded", 12);
				$.ajax({
					url: "https://munasibrishta.com/Search_Controller/count_data",
					method: "post",
					data: {form_data:form_data},
					success: function(success){
						if(success=="0"){
							$(".load-more-btn").fadeOut();
						}else if(success==1){
							$(".load-more-btn").fadeIn();
						}
					}
				});
			}
		});
	});
});
$(document).on('click', '.load-more-btn', function(event){
	var form_data = $(".quick-search-form").serialize();
	var total_data_loaded = $(this).attr("total-data-loaded");
	var load_more = $(this).attr("load-more");
	var getUrl = window.location;
	var baseUrl = getUrl .protocol + "//" + getUrl.host;
	var cal = parseInt(total_data_loaded)+parseInt(load_more);
	$.ajax({
		url: "https://munasibrishta.com/Search_Controller/filter_data",
		method: "post",
		data: {form_data:form_data, total_data_loaded:total_data_loaded},
		success: function(success){
			$(".single-proposal-container").append(success);
			$(".load-more-btn").attr("total-data-loaded", cal);
			$.ajax({
				url: "https://munasibrishta.com/Search_Controller/count_data",
				method: "post",
				data: {form_data:form_data, total_data_loaded:total_data_loaded},
				success: function(success){
					if(success=="0"){
						$(".load-more-btn").fadeOut();
					}else if(success==1){
						$(".load-more-btn").fadeIn();
					}
				}
			});
		}
	});
});
$(document).ready(function($) {
	var container = $('.modal-container');
	$(".register-form").validate({
		rules:{
			created_by:{
				required: true
			},
			full_name:{
				required: true
			},
			age:{
				required: true
			},
			gender:{
				required: true
			},
			date_of_birth_day:{
				required: true
			},
			date_of_birth_month:{
				required: true
			},
			date_of_birth_year:{
				required: true
			},
			marital_status:{
				required: true
			},
			highest_education:{
				required: true
			},
			employed_in:{
				required: true
			},
			religion:{
				required: true
			},
			height:{
				
				required: true
			},
			cast:{
				required: true
			},
			mother_tongue:{
				required: true
			},
			city:{
				required: true
			},
			phone_number:{
				required: true
			},
			e_mail:{
				required: true,
				remote:{
					url: "https://munasibrishta.com/User_Controller/check_email_exist",
					method: "post"
				}
			},
			password:{
				required: true
			},
		},
		messages:{
			created_by:{
				required: "Select Profile Created By"
			},
			full_name:{
				required: "Enter Full Name"
			},
			age:{
				required: "Enter Age"
			},
			gender:{
				required: "Select Gender"
			},
			date_of_birth_day:{
				required: "Select Day"
			},
			date_of_birth_month:{
				required: "Select Month"
			},
			date_of_birth_year:{
				required: "Select Year"
			},
			marital_status:{
				required: "Select Marital Status"
			},
			height:{
				required: "Select Height"
				
			},
			highest_education:{
				required: "Select Highest Education"
			},
			employed_in:{
				required: "Select Employement"
			},
			religion:{
				required: "Select Religion"
			},
			cast:{
				required: "Select Cast"
			},
			mother_tongue:{
				required: "Select Mother Tongue"
			},
			city:{
				required: "Select City"
			},
			phone_number:{
				required: "Enter Phone Number"
			},
			e_mail:{
				required: "Eenter Email",
				remote: "Email Already Exist"
			},
			password:{
				required: "Enter Password"
			},
		},
		// errorContainer: container,
		// errorLabelContainer: $(".modal-container", container),
		wrapper: 'label',
		submitHandler: function(form){
			var formData = $(form).serializeArray().map(function(obj) {
		        var o = {};
		        o[obj.name] = obj.value;
		        return o;
		    });
		    var getUrl = window.location;
			var baseUrl = getUrl .protocol + "//" + getUrl.host;
			$.ajax({
				url: "https://munasibrishta.com/User_Controller/register_process",
				method: "post",
				data: $('form').serialize(),
				success: function(success){
					console.log(success);
					if(success==1){
						$.ajax({
							url: "https://munasibrishta.com/User_Controller/account_created_succcessfully",
							success: function(success){
								$(".alert-modal-container").html(success);
								$(".alert-modal-container").fadeIn();
								$("body").css("overflow", "hidden");
							}
						});
					}else if(success==2){
						$.ajax({
							url: "https://munasibrishta.com/User_Controller/edit_success_message",
							success: function(success){
								$(".alert-modal-container").html(success);
								$(".alert-modal-container").fadeIn();
								$("body").css("overflow", "hidden");
							}
						});
					}else if(success==0){

					}
				}
			});
		}
	});
});
/*$(document).ready(function($) {
	setTimeout(function(){
		 $(".home-image").fadeIn();
		 $("body").css("overflow", "hidden");
	}, 2000);
});
$(document).on("click", ".home-image-btn", function(){
	$(".home-image").fadeOut();
	$("body").css("overflow", "");
});*/