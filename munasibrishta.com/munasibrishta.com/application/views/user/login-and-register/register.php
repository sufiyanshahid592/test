<div class="login-and-register">
	<div class="container">
		<div class="col-lg-2"></div>
		<div class="col-lg-8 form-section">
			<h1>Register Account</h1>
			<form class="register-form" method="post" onsubmit="return false;">
				<div class="row">
					<div class="form-group">
						<div class="col-lg-12">
							<label>Profile Created By:</label>
						</div>
						<div class="col-lg-12 radion-button-style">
							<!-- <input type="radio" name="created_by" id="self" value="Self">
							<label for="self">Self</label>
							<input type="radio" name="created_by" id="parents" value="Parents">
							<label for="parents">Parents</label>
							<input type="radio" name="created_by" id="sibling" value="Sibling">
							<label for="sibling">Sibling</label>
							<input type="radio" name="created_by" id="relative" value="Relative">
							<label for="relative">Relative</label>
							<input type="radio" name="created_by" id="friend" value="Friend">
							<label for="friend">Friend</label> -->
							<select class="form-control dropdown-search" name="created_by">
								<option value="">-- Select Profile Created By --</option>
								<option value="Self">Self</option>
								<option value="Parents">Parents</option>
								<option value="Sibling">Sibling</option>
								<option value="Relative">Relative</option>
								<option value="Friend">Friend</option>
							</select>
							<label for="created_by" id="created_by" class="error"></label>
						</div>
						
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<label class="control-label">Gender:</label>
					</div>
					<div class="col-lg-12 radion-button-style">
						<!-- <input type="radio" name="gender" id="male" value="Male">
						<label for="male">Male</label>
						<input type="radio" name="gender" id="female" value="Female">
						<label for="female">Female</label> -->
						<select class="form-control dropdown-search" name="gender">
							<option value="">-- Select Gender --</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						<label for="gender" id="gender" class="error"></label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">Full Name:</label>
							</div>
							<div class="col-lg-12 radion-button-style">
								<input type="text" name="full_name" class="form-control">
								<label for="full_name" id="full_name" class="error"></label>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">Age:</label>
							</div>
							<div class="col-lg-12 radion-button-style">
								<input type="text" name="age" class="form-control">
								<label for="age" id="age" class="error"></label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<label class="control-label">Marital Status:</label>
					</div>
					<div class="col-lg-12 radion-button-style">
						<!-- <input type="radio" name="marital_status" id="Unmarried" value="Unmarried">
						<label for="Unmarried">Unmarried</label>
						<input type="radio" name="marital_status" id="Married" value="Married">
						<label for="Married">Married</label>
						<input type="radio" name="marital_status" id="Widow/Widower" value="Widow/Widower">
						<label for="Widow/Widower">Widow/Widower</label>
						<input type="radio" name="marital_status" id="Divorced" value="Divorced">
						<label for="Divorced">Divorced</label>
						<input type="radio" name="marital_status" id="Separated" value="Separated">
						<label for="Separated">Separated</label> -->
						<select class="form-control dropdown-search" name="marital_status">
							<option value="">-- Select marital Status --</option>
							<option value="Unmarried">Unmarried</option>
							<option value="Married">Married</option>
							<option value="Widow/Widower">Widow/Widower</option>
							<option value="Divorced">Divorced</option>
							<option value="Separated">Separated</option>
						</select>
						<label for="marital_status" id="marital_status" class="error"></label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">Total Brothers</label>
							</div>
							<div class="col-lg-12">
								<input type="number" name="total_brothers" class="form-control">
								<label for="total_brothers" id="total_brothers" class="error"></label>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">Married Brothers</label>
							</div>
							<div class="col-lg-12">
								<input type="number" name="married_brothers" class="form-control">
								<label for="married_brothers" id="married_brothers" class="error"></label>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">Total Sisters</label>
							</div>
							<div class="col-lg-12">
								<input type="number" name="total_sister" class="form-control">
								<label for="total_sister" id="total_sister" class="error"></label>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">Married Sisters</label>
							</div>
							<div class="col-lg-12">
								<input type="number" name="married_sister" class="form-control">
								<label for="married_sister" id="married_sister" class="error"></label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">Education:</label>
							</div>
							<div class="col-lg-12">
								<input type="text" name="highest_education" class="form-control">
								<label for="highest_education" id="highest_education" class="error"></label>
								<!-- <select class="form-control dropdown-search" name="highest_education">
									<option selected="selected" value="">--- Select ---</option>
									<option value="Middle">Middle</option>
									<option value="Matric">Matric</option>
									<option value="Intermediate/D.A.E">Intermediate/D.A.E</option>
									<option value="Graduation">Graduation</option>
									<option value="Masters">Masters</option>
									<option value="M.Phil">M.Phil</option>
									<option value="Ph.D.">Ph.D.</option>
								</select> -->
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">Height:</label>
							</div>
							<div class="col-lg-12">
								<select class="form-control dropdown-search" name="height">
									<option selected="selected" value="">--- Select ---</option>
									<option value="4 Feet">4 Feet</option>
									<option value="4 Feet 1 Inch">4 Feet 1 Inch</option>
									<option value="4 Feet 2 Inch">4 Feet 2 Inch</option>
									<option value="4 Feet 3 Inch">4 Feet 3 Inch</option>
									<option value="4 Feet 4 Inch">4 Feet 4 Inch</option>
									<option value="4 Feet 5 Inch">4 Feet 5 Inch</option>
									<option value="4 Feet 6 Inch">4 Feet 6 Inch</option>
									<option value="4 Feet 7 Inch">4 Feet 7 Inch</option>
									<option value="4 Feet 8 Inch">4 Feet 8 Inch</option>
									<option value="4 Feet 9 Inch">4 Feet 9 Inch</option>
									<option value="4 Feet 10 Inch">4 Feet 10 Inch</option>
									<option value="4 Feet 11 Inch">4 Feet 11 Inch</option>
									<option value="5 Feet">5 Feet</option>
									<option value="5 Feet 1 Inch">5 Feet 1 Inch</option>
									<option value="5 Feet 2 Inch">5 Feet 2 Inch</option>
									<option value="5 Feet 3 Inch">5 Feet 3 Inch</option>
									<option value="5 Feet 4 Inch">5 Feet 4 Inch</option>
									<option value="5 Feet 5 Inch">5 Feet 5 Inch</option>
									<option value="5 Feet 6 Inch">5 Feet 6 Inch</option>
									<option value="5 Feet 7 Inch">5 Feet 7 Inch</option>
									<option value="5 Feet 8 Inch">5 Feet 8 Inch</option>
									<option value="5 Feet 9 Inch">5 Feet 9 Inch</option>
									<option value="5 Feet 10 Inch">5 Feet 10 Inch</option>
									<option value="5 Feet 11 Inch">5 Feet 11 Inch</option>
									<option value="6 Feet">6 Feet</option>
									<option value="6 Feet 1 Inch">6 Feet 1 Inch</option>
									<option value="6 Feet 2 Inch">6 Feet 2 Inch</option>
									<option value="6 Feet 3 Inch">6 Feet 3 Inch</option>
									<option value="6 Feet 4 Inch">6 Feet 4 Inch</option>
									<option value="6 Feet 5 Inch">6 Feet 5 Inch</option>
									<option value="6 Feet 6 Inch">6 Feet 6 Inch</option>
									<option value="6 Feet 7 Inch">6 Feet 7 Inch</option>
									<option value="6 Feet 8 Inch">6 Feet 8 Inch</option>
									<option value="6 Feet 9 Inch">6 Feet 9 Inch</option>
									<option value="6 Feet 10 Inch">5 Feet 10 Inch</option>
									<option value="6 Feet 11 Inch">5 Feet 11 Inch</option>
									<option value="7 Feet">7 Feet</option>
								</select>
								<label for="height" id="height" class="error"></label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">Profession:</label>
							</div>
							<div class="col-lg-12">
								<input type="text" name="profession" class="form-control">
								<label for="profession" id="profession" class="error"></label>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">Income:</label>
							</div>
							<div class="col-lg-12">
								<input type="text" name="income" class="form-control">
								<label for="income" id="income" class="error"></label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<label class="control-label">Employed in:</label>
					</div>
					<div class="col-lg-12 radion-button-style">
						<select class="form-control dropdown-search" name="employed_in">
							<option value="">-- Select Employement --</option>
							<option value="Government">Government</option>
							<option value="Defence">Defence</option>
							<option value="Private">Private</option>
							<option value="Business">Business</option>
							<option value="Self Employed">Self Employed</option>
							<option value="Not Working">Not Working</option>
						</select>
						<label for="employed_in" id="employed_in" class="error"></label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">Religion:</label>
							</div>
							<div class="col-lg-12">
								<select class="form-control dropdown-search" name="religion">
									<option value="" selected="">Select Religion</option>
									<option value="Muslim - Syed">Muslim - Syed</option>
									<option value="Muslim - Shia">Muslim - Shia</option>
									<option value="Muslim - Sunnis">Muslim - Sunnis</option>
									<option value="Muslim - Brailvi">Muslim - Brailvi</option>
									<option value="Muslim - Deobandi">Muslim - Deobandi</option>
									<option value="Muslim - Wahabi">Muslim - Wahabi</option>
									<option value="Muslim - Abbasi">Muslim - Abbasi</option>
									<option value="Muslim - Others">Muslim - Others</option>			
								</select>
								<label for="religion" id="religion" class="error"></label>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">Cast:</label>
							</div>
							<div class="col-lg-12">
								<select class="form-control dropdown-search" name="cast">
									<option value="" selected>--- Select ---</option>
									<option value="Aheer">Aheer</option>
									<option value="Ansari">Ansari</option>
									<option value="Arain">Arain</option>
									<option value="Awan">Awan</option>
									<option value="Baloch">Baloch</option>
									<option value="Butt">Butt</option>
									<option value="Chaudary">Chaudary</option>
									<option value="Dogar">Dogar</option>
									<option value="Gakhars">Gakhars</option>
									<option value="Gondal">Gondal</option>
									<option value="Gujjars">Gujjars</option>
									<option value="Hashmi">Hashmi</option>
									<option value="Jat">Jat</option>
									<option value="Kamboh">Kamboh</option>
									<option value="Siddiqui">Siddiqui</option>
									<option value="Khan">Khan</option>
									<option value="Khateek">Khateek</option>
									<option value="Khattar">Khattar</option>
									<option value="Khokhar">Khokhar</option>
									<option value="Maliar">Maliar</option>
									<option value="Mughal">Mughal</option>
									<option value="Paracha">Paracha</option>
									<option value="Pashtuns">Pashtuns</option>
									<option value="Qureshi">Qureshi</option>
									<option value="Rajputs">Rajputs</option>
									<option value="Rawns">Rawns</option>
									<option value="Maliks">Maliks</option>
									<option value="Sheikh">Sheikh</option>
									<option value="Syeds">Syeds</option>
									<option value="Catholic">Catholic</option>
									<option value="Orthodox">Orthodox</option>
									<option value="Protestant">Protestant</option>
									<option value="Irani">Irani</option>
									<option value="Parsi">Parsi</option>
									<option value="Intercaste">Intercaste</option>			
								</select>
								<label for="cast" id="cast" class="error"></label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<label class="control-label">Mother Tongue:</label>
					</div>
					<div class="col-lg-12">
						<select class="form-control dropdown-search" name="mother_tongue">
							<option value="">Select mother tongue</option>
							<option value="Urdu">Urdu</option>
							<option value="Punjabi">Punjabi</option>
							<option value="Pashto">Pashto</option>
							<option value="Sindhi">Sindhi</option>
							<option value="Saraiki">Saraiki</option>
							<option value="Balochi">Balochi</option>
							<option value="Kashmiri">Kashmiri</option>
							<option value="English">English</option>
						</select>
						<label for="mother_tongue" id="mother_tongue" class="error"></label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">Country:</label>
							</div>
							<div class="col-lg-12">
								<select class="form-control dropdown-search" name="country" disabled>
									<option selected value="Pakistan">Pakistan</option>		
								</select>
								<input type="hidden" name="country" value="Pakistan">
								<label for="country" id="country" class="error"></label>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">City:</label>
							</div>
							<div class="col-lg-12">
								<select class="form-control dropdown-search" name="city">
									<option value="">-- Select City --</option>
									<?php foreach($get_city_by_id as $value){ ?>
										<option value="<?php echo $value['city_name']; ?>"><?php echo $value['city_name']; ?></option>
									<?php } ?>
								</select>
								<label for="city" id="city" class="error"></label>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<label class="control-label">Phone/Whatsapp Number:</label>
					</div>
					<div class="col-lg-12 radion-button-style">
						<input type="text" name="phone_number" class="form-control">
						<label for="phone_number" id="phone_number" class="error"></label>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<label class="control-label">Introduction:</label>
					</div>
					<div class="col-lg-12 radion-button-style">
						<textarea class="form-control" rows="7" name="about_me"></textarea>
						<!-- <p class="text-area-msg">You Can't Enter Phone Number in Description Otherwise we will not approve your profile.</p> -->
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<label class="control-label">Requirements:</label>
					</div>
					<div class="col-lg-12 radion-button-style">
						<textarea class="form-control" rows="7" name="requirements"></textarea>
						<!-- <p class="text-area-msg">You Can't Enter Phone Number in Description Otherwise we will not approve your profile.</p> -->
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">E-mail Address:</label>
							</div>
							<div class="col-lg-12 radion-button-style">
								<input type="email" class="form-control" name="e_mail">
								<label for="e_mail" id="e_mail" class="error"></label>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-12">
								<label class="control-label">Password:</label>
							</div>
							<div class="col-lg-12 radion-button-style">
								<input type="password" class="form-control" name="password">
								<label for="password" id="password" class="error"></label>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-container">
					<div class="container">
						<div class="row">
							<div class="col-lg-3"></div>
							<div class="col-lg-6 modal-content">
								<div class="modal-header">
			        				<button type="button" class="close close-modal-btn"><span>&times;</span></button>
			        				<h4 class="modal-title">Errors</h4>
			     				</div>
			     				<div class="modal-body">
			        				<!-- 
			        				
									
									
									<label for="marital_status" id="marital_status" class="error"></label>
									<label for="date_of_birth_day" id="date_of_birth_day" class="error"></label>
									<label for="date_of_birth_month" id="date_of_birth_month" class="error"></label>
									<label for="date_of_birth_year" id="date_of_birth_year" class="error"></label>
									<label for="highest_education" id="highest_education" class="error"></label>
									<label for="height" id="height" class="error"></label>
									<label for="employed_in" id="employed_in" class="error"></label>
									<label for="religion" id="religion" class="error"></label>
									<label for="cast" id="cast" class="error"></label>
									<label for="mother_tongue" id="mother_tongue" class="error"></label>
									<label for="city" id="city" class="error"></label>
									<label for="phone_number" id="phone_number" class="error"></label>
									<label for="e_mail" id="e_mail" class="error"></label>
									<label for="password" id="password" class="error"></label> -->
			      				</div>
			      				<div class="modal-footer">
						        	<button type="button" class="btn btn-default close-modal-btn">Close</button>
						      	</div>
							</div>
							<div class="col-lg-3"></div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<input type="submit" name="" class="btn login-btn" value="Register">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<p>If have Account. Go to <a href="<?php echo base_url('login'); ?>">Login</a></p>
					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-2"></div>
	</div>
</div>