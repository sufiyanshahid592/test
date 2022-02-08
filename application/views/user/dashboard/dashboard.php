<div class="dashboard-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 dashboard-sidebar">
				<?php if($get_profile_details[0]['gender']=="Male"){ ?>
					<span class="dashboard-profile-img" style='background-image: url("<?php echo base_url("assets/user/img/male-avatar.jpg"); ?>");'>
				<?php }elseif($get_profile_details[0]['gender']=="female"){ ?>
					<span class="dashboard-profile-img" style='background-image: url("<?php echo base_url("assets/user/img/female-avatar.jpg"); ?>");'>
				<?php } ?>

					<!-- <img src="<?php //echo base_url("assets/user/img/user.jpg"); ?>"> -->
				</span>
				<ul>
					<li><a href="<?php echo base_url("dashboard"); ?>">Dashboard</a></li>
					<li><a href="<?php echo base_url("edit-profile"); ?>">Edit Profile</a></li>
				</ul>
			</div>
			<div class="col-lg-9 dashboard-content">
				<h1>Dashboard</h1>
				<div class="row approval-alert-box">
					<?php if(count($get_approval_request)==0 AND $get_profile_details[0]['status']==0){ ?>
					<div class="col-lg-12 alert alert-danger text-center">
						<!-- <p>Your Profile is not approve please wait After check your profile will be approve shortly. After long time your profile is not approve please contact our support on whatsapp: +92 334 4352013 </p> -->
						<p>Your Profile is not approved please send Rs.200 in (EasyPaisa/JazzCash: 03014065723) and enter TXID id below and submit.</p>
						<form class="non-approve-form">
							<div class="row">
								<div class="col-lg-3"></div>
								<div class="col-lg-6">
									<div class="row">
										<div class="col-lg-12">
											<select class="form-control" name="payment_method">
												<option value="">-- Select Payment Method --</option>
												<option>EasayPaisa</option>
												<option>JazzCash</option>
											</select>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<input type="text" class="form-control" name="txid" placeholder="Enter TXID">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-12">
											<input type="submit" name="submit" value="Submit" class="btn btn-default">
										</div>
									</div>
								</div>
								<div class="col-lg-3"></div>
							</div>
						</form>
					</div>
					<?php }elseif(count($get_approval_request)==1 AND $get_profile_details[0]['status']==0){ ?>
						<div class="alert alert-warning">Your approval is pending. After checking your profile will be approve shortly.</div>
					<?php }elseif($get_profile_details[0]['status']==2){ ?>
						<div class="alert alert-warning">Due to update profile your account is unactivate after checking your account will be activate shortly.</div>
					<?php }elseif($get_profile_details[0]['status']==1){ ?>
						<div class="alert alert-success">Approved Profile</div>
					<?php } ?>
				</div>
				<!-- <div class="row dashboard-tabs">
					<div class="col-lg-4 tab">
						<p>Visit on Profile</p>
						<span><?php //echo count($get_views); ?> People</span>
						<a href="#">Click To See</a>
					</div>
					<div class="col-lg-4 tab">
						<p>You Contact</p>
						<span><?php //echo count($you_contact); ?> People</span>
						<a href="#">Click To See</a>
					</div>
					<div class="col-lg-4 tab">
						<p>Contact you</p>
						<span><?php //echo count($contact_you); ?> People</span>
						<a href="#">Click To See</a>
					</div>
				</div> -->
				<div class="row dashboard-profile-details">
					<div class="col-lg-12">
						<h1>Your Profile Information</h1>
						<div class="row profile-details">
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Profile Created By</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_profile_details[0]['created_by']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Member ID</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_profile_details[0]['user_id']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Full Name:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_profile_details[0]['full_name']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Age:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_profile_details[0]['age']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Marital Status:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_profile_details[0]['marital_status']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Highest Education:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_profile_details[0]['highest_education']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Employment:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_profile_details[0]['employed_in']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Profession:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_profile_details[0]['profession']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Income:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_profile_details[0]['income']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Religion:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_profile_details[0]['religion']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Cast:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_profile_details[0]['cast']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Mother Tongue:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_profile_details[0]['mother_tongue']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Country:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_profile_details[0]['country']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">City:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_profile_details[0]['city']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Contact Number:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_profile_details[0]['phone_number']; ?></div>
						</div>
					</div>
					<div class="col-lg-12 text-center">
						<div class="row">
							<div class="col-lg-12 profile-details-label">Introduction:</div>
							<div class="col-lg-12 profile-details-value"><?php echo $get_profile_details[0]['about_me']; ?></div>
						</div>
					</div>
					<div class="col-lg-12 text-center">
						<div class="row">
							<div class="col-lg-12 profile-details-label">Requirements:</div>
							<div class="col-lg-12 profile-details-value"><?php echo $get_profile_details[0]['requirements']; ?></div>
						</div>
					</div>
				</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>