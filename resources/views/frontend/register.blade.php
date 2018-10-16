@extends('frontend.index')
@section('css-register')

@endsection
@section('content')

<div class="container">
	<div class="content-wrap">
		<br><br>
		<div class="main" >
			<div class="row">
				<div class="col-md-3 fixtopevent">
					@include('frontend.event')
				</div>
				<div class="col-md-8 content-right">
					<div class="card mb-3 ">
						<div class="card-header">
							<div class=""><i class="fas fa-pencil-alt"></i> Sign Up Your User Account
							</div>

						</div>
						<div class="card-body">
							<!-- main content -->
							<div class="form-box">
								<div class="col-md-12">

									<!-- Form Wizard -->
									<div class="form-wizard form-header-stylist form-body-stylist">

										<form role="form" action="" method="post">
											<h5><strong style="color: #6753D8;">Fill all form field to go next step</strong></h5>
											<input type="hidden" name="_token" value="{{csrf_token()}}">
											<!-- Form progress -->
											<div class="form-wizard-steps form-wizard-tolal-steps-4">
												<div class="form-wizard-progress">
													<div class="form-wizard-progress-line" data-now-value="12.25" data-number-of-steps="4" style="width: 12.25%;"></div>
												</div>
												<!-- Step 1 -->
												<div class="form-wizard-step active">
													<div class="form-wizard-step-icon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></div>
													<p>Account</p>
												</div>
												<!-- Step 1 -->

												<!-- Step 2 -->
												<div class="form-wizard-step">
													<div class="form-wizard-step-icon"><i class="fa fa-user" aria-hidden="true"></i></div>
													<p>Info</p>
												</div>
												<!-- Step 2 -->

												<!-- Step 3 -->
												<div class="form-wizard-step">
													<div class="form-wizard-step-icon"><i class="fa fa-camera" aria-hidden="true"></i></div>
													<p>Image</p>
												</div>
												<!-- Step 3 -->

												<!-- Step 4 -->
												<div class="form-wizard-step">
													<div class="form-wizard-step-icon"><i class="fa fa-check" aria-hidden="true"></i></div>
													<p>Success</p>
												</div>
												<!-- Step 4 -->
											</div>
											<!-- Form progress -->


											<!-- Form Step 1 -->
											<fieldset id="step-1">
												<!-- Progress Bar -->
												<div class="progress">
													<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
													</div>
												</div>
												<!-- Progress Bar -->
												<h4>Account Information: <span>Step 1 - 4</span></h4>
												<div class="form-group">
													<label>Email: <span>*</span></label>
													<div class="input-group">
														<span class="input-group-addon"><i class="far fa-envelope"></i></span>
														<input type="text" name="emailsignup" placeholder="Email" class="form-control  email-fade" id="emailsignup">
													</div>
												</div>
												<div class="form-group">
													<label>Password: <span>*</span></label>
													<div class="input-group  has-feedback">
														<span class="input-group-addon"><i class="fa fa-key"></i></span>
														<input type="password" name="passwords" placeholder="Password" class="form-control  password-fade" id="passwords">
														<i class="glyphicon glyphicon-eye-open form-control-feedback" style="cursor: pointer; pointer-events: all;"></i>
													</div>
												</div>
												<div class="form-group">
													<label>Comfirm password: <span>* </span><span class="duplicate" style="display: none;"> Password: <i class="fas fa-check-double"></i> </span></label>
													<div class="input-group  has-feedback">
														<span class="input-group-addon"><i class="fa fa-key" id="keycf"></i></span>
														<input type="password" name="cfpassword" placeholder="Comfirm password" class="form-control  password-fade" id="cfpassword">
														<i class="glyphicon glyphicon-eye-open form-control-feedback" style="cursor: pointer; pointer-events: all;"></i>
													</div>
												</div>
												<div class="form-wizard-buttons pull-right">
													<button type="button" class="btn btn-next btn-next-2" disabled="disabled">Next</button>
												</div>
											</fieldset>
											<!-- Form Step 1 -->

											<!-- Form Step 2 -->
											<fieldset>
												<!-- Progress Bar -->
												<div class="progress">
													<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
													</div>
												</div>
												<!-- Progress Bar -->
												<h4>Personal Information : <span>Step 2 - 4</span></h4>
												<div class="form-group">
													<label>Full name: <span>*</span></label>
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-user"></i></span>
														<input type="text" name="name" placeholder="Full name" class="form-control name-fade" id="namesignup" onblur="javascript: this.value = NameStandard(this.value);">
													</div>
												</div>
												<div class="form-group">
													<label>Gender : </label>
													<label class="radio-inline">
														<input type="radio" name="gender" value="male" checked="checked"> Male
													</label>
													<label class="radio-inline">
														<input type="radio" name="gender" value="female"> Female
													</label>
												</div>
												<div class="form-group">
													<label for="">Date of birth: <span>*</span></label>
													<input type="date" class="form-control required" name="birthday" id="birthday" min="1970-01-01">
												</div>
												<div style="clear:both;"></div>
												<div class="form-wizard-buttons">
													<button type="button" class="btn btn-previous btn-previous-1">Previous</button>
													<button type="button" class="btn btn-next btn-next-3" disabled="disabled">Next</button>
												</div>
											</fieldset>
											<!-- Form Step 2 -->

											<!-- Form Step 3 -->
											<fieldset>
												<!-- Progress Bar -->
												<div class="progress">
													<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
													</div>
												</div>
												<!-- Progress Bar -->
												<h4>Profile Image: <span>Step 3 - 4</span></h4>
												<div style="clear:both;"></div>
												<div class="form-group image-upload">
													<div class="setting image_picker">
														<br/><h3 class="text-center">Upload Profile Image</h3>
														<div class="settings_wrap">
															<label class="drop_target">
																<div class="image_preview"></div>
																<input id="inputFile" type="file" name="avatarsignup" />
															</label>
															<div class="settings_actions vertical"><a class="disabled" data-action="remove_current_image"><i class="fa fa-trash" aria-hidden="true"></i> Remove Image</a></div>
														</div>
													</div>							  
												</div>	
												<div class="form-wizard-buttons">
													<button type="button" class="btn btn-previous btn-previous-2">Previous</button>
													<button type="button" class="btn btn-next">Next</button>
												</div>
											</fieldset>
											<!-- Form Step 3 -->

											<!-- Form Step 4 -->
											<fieldset>
												<!-- Progress Bar -->
												<div class="progress">
													<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
													</div>
												</div>
												<!-- Progress Bar -->
												<h4>Success Account: <span>Step 4 - 4</span></h4>
												<div style="clear:both;"></div>
												<div class="success" id="success" style="display: none;">
													<h3>Create new account success.</h3>
													<div class="success-icon"><i class="fa fa-check" aria-hidden="true"></i></div>					  
												</div>
												<div class="form-group">
													<input type="checkbox" id="agree"> <label for="agree" style="cursor: pointer;">I agree to the terms of the web.</label>
												</div>
												<div class="form-wizard-buttons">
													<button type="button" class="btn btn-previous btn-previous-3">Previous</button>
													<button type="button" class="btn btn-submit btn-register" disabled="disabled">Create</button>
												</div>
											</fieldset>
											<!-- Form Step 4 -->

										</form>

									</div>
									<!-- Form Wizard -->
								</div>
							</div>
						</div>
						<!-- main content -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/hideshowpassword/2.0.8/hideShowPassword.min.js"></script>
<script src="js/lib/bootstrap-wizard/form-wizard.js"></script>
<script src="js/lib/standard.js"></script>
<script>
	$('#passwords + .glyphicon').on('click', function() {
  $(this).toggleClass('glyphicon-eye-close').toggleClass('glyphicon-eye-open'); // toggle our classes for the eye icon
  $('#passwords').togglePassword(); // activate the hideShowPassword plugin
});
	$('#cfpassword + .glyphicon').on('click', function() {
  $(this).toggleClass('glyphicon-eye-close').toggleClass('glyphicon-eye-open'); // toggle our classes for the eye icon
  $('#cfpassword').togglePassword(); // activate the hideShowPassword plugin
});
</script>
{{-- step 1 --}}
<script>
	var emailsignup;
	$("#emailsignup").keyup(function() {
		emailsignup = $("input[name=emailsignup]").val();
	});	
	$("#emailsignup").keydown(function() {
		emailsignup = $("input[name=emailsignup]").val();	
	});
	function check(password , cfpassword, email) {
		var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(password === cfpassword) {
			$("#keycf").removeClass('fa-key').removeClass('fa').addClass('fas').addClass(' fa-check-double');
			$(".password-fade").css({
				border: '1px solid #449d44',
			});
			$(".duplicate").show('fast');
			if(regex.test(email) === true) {
				$(".email-fade").css({
					border: '1px solid #449d44',
				});
				$(".btn-next-2").removeAttr('disabled');
			} else {
				$(".email-fade").css({
					border: '1px solid #ccc',
				});
				$(".btn-next-2").attr("disabled", "disabled");
			}
		} else if(password != cfpassword){
			$("#keycf").removeClass('fas').removeClass('fa-check-double').addClass('fa').addClass('fa-key');
			$(".password-fade").css({
				border: '1px solid #ccc',
			});	
			$(".duplicate").hide('fast');
			$(".btn-next-2").attr("disabled", "disabled");
		}
	}
	var cfpassword;	
	var password;
	$("#cfpassword").keyup(function() {
		password = $("input[name=passwords]").val();
		cfpassword = $("input[name=cfpassword]").val();
		if(password.length > 3) {
			check(password , cfpassword, emailsignup);
		}
	});	
	$("#cfpassword").keydown(function() {
		password = $("input[name=passwords]").val();
		cfpassword = $("input[name=cfpassword]").val();	
		if(password.length > 3) {
			check(password , cfpassword, emailsignup);
		}
	});
	$("#passwords").keyup(function() {
		password = $("input[name=passwords]").val();
		cfpassword = $("input[name=cfpassword]").val();	
		if(password.length > 3) {
			check(password , cfpassword, emailsignup);
		}
	});	
	$("#passwords").keydown(function() {
		password = $("input[name=passwords]").val();
		cfpassword = $("input[name=cfpassword]").val();	
		if(password.length > 3) {
			check(password , cfpassword, emailsignup);
		}
	});
</script>
{{-- step 2 ->4 --}}
<script>
	var date = new Date();
	var year = date.getFullYear();
	var month = date.getMonth();
	var day = date.getDate();
	date = year+"-"+ month + "-" + day;
	document.getElementById('birthday').max = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];
	var namesign;
	$("#namesignup").keyup(function() {
		namesign = $("input[name=name]").val();
		check_name(namesign);
	});	
	$("#namesignup").keydown(function() {
		namesign = $("input[name=name]").val();
		check_name(namesign);	
	});
	function check_name(name) {
		var regexstep2 = /^([a-zA-Z])/;
		if(regexstep2.test(name) == true) {
			$(".name-fade").css({
				border: '1px solid #449d44',
			});	
			$(".btn-next-3").removeAttr('disabled');
		} else {
			$(".name-fade").css({
				border: '1px solid #ccc',
			});	
			$(".btn-next-3").attr("disabled", "disabled");
		}
	}
	$("#agree").change(function() {
		if($(this).is(':checked')) {
			$("#success").show('fast');
			$(".btn-register").removeAttr('disabled');
		}
		else {
			$("#success").hide('fast');
			$(".btn-register").attr("disabled", "disabled");
		}
	});
	//script ajax sign up 
	$(document).ready(function() {
		$(".btn-register").click(function() {
			$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
			var emailsignup = $("input[name=emailsignup]").val();
			var password = $("input[name=passwords]").val();
			var namesign = $("input[name=name]").val();
			var birthday = $("input[name=birthday]").val();
			var gender = $("input[name=gender]:radio:checked").val();
			var avatarsignup = $("input[name=avatarsignup]").val();
			$.ajax({
				'url' : '/NDT/public/ajax/register',
				'type' : 'POST',
				'dataType' : 'json',
				'data' :  {
					'name' : namesign ,
					'email' : emailsignup ,
					'birthday' : birthday,
					'gender' : gender,
					'password' : password,
					'avatar' : avatarsignup,
				},
				success: function (data) {
					if(data.error == true) {
						if (data.message.email != undefined) {
							swal({ 
								title :"Oops!",
								text: data.message.email[0]+" You can back to step 1.",
								type: "error"
							});
						}
					}
					else if (data.error == false) {
						swal({ 
							title :"Yepp!",
							text: "Create new account!",
							type: "success"
						});
					}
				}
			});
		});
	});
</script>
@endsection