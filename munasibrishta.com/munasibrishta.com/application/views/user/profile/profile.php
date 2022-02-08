<div class="profile-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php //echo "<pre>"; echo print_r($get_proposal_details_by_id); ?>
				<div class="banner-img">
					<!-- <img src="<?php //echo base_url("assets/user/img/banner-ad.PNG"); ?>"> -->
					<!-- <script type="text/javascript">
						atOptions = {
							'key' : 'b1246e86367efece15cf953e7e90ee24',
							'format' : 'iframe',
							'height' : 90,
							'width' : 728,
							'params' : {}
						};
						document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.displaynetworkcontent.com/b1246e86367efece15cf953e7e90ee24/invoke.js"></scr' + 'ipt>');
					</script> -->
				</div>
				<h1>Profile Information</h1>
				<div class="row profile-details">
					<?php if(count($get_proposal_details_by_id)>0){ ?>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Profile Created By</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['created_by']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Registration Date</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['registration_date']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Member ID</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['user_id']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Gender</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['gender']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Full Name:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['full_name']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Age:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['age']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Marital Status:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['marital_status']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Total Brothers:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['total_brothers']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Married Brothers:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['married_brothers']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Total Sisters:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['total_sister']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Married Sisters:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['married_sister']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Religion:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['religion']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Highest Education:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['highest_education']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Employment:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['employed_in']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Profession:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['profession']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Income:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['income']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Cast:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['cast']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Mother Tongue:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['mother_tongue']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">Country:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['country']; ?></div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-label">City:</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 profile-details-value"><?php echo $get_proposal_details_by_id[0]['city']; ?></div>
						</div>
					</div>
					<div class="col-lg-12 text-center">
						<div class="row">
							<div class="col-lg-12 profile-details-label">Introduction:</div>
							<div class="col-lg-12 profile-details-value"><?php echo $get_proposal_details_by_id[0]['about_me']; ?></div>
						</div>
					</div>
					<div class="col-lg-12 text-center">
						<div class="row">
							<div class="col-lg-12 profile-details-label">Requirements:</div>
							<div class="col-lg-12 profile-details-value"><?php echo $get_proposal_details_by_id[0]['requirements']; ?></div>
						</div>
					</div>
					<div class="col-lg-12 text-center">
						<div class="row" style="border: none; box-shadow: none; border-right: 0;">
							<div class="col-lg-4"></div>
							<div class="col-lg-4 col-xs-12">
								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 profile-details-label">Contact Number:</div>
									<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 profile-details-value"><?php echo $get_proposal_details_by_id[0]['phone_number']; ?></div>
								</div>
							</div>
							<div class="col-lg-4"></div>
						</div>
					</div>
					<?php }elseif(count($get_proposal_details_by_id)==0){ ?>
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-12 profile-details-value text-center">Not Found Porposal ID: <?php echo $this->uri->segment(2); ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<!-- <div class="col-lg-12 text-center">
				<button class="btn btn-primary show-contact-details" data-id="<?php //echo $get_proposal_details_by_id[0]['user_id']; ?>">Show Contact Details</button>
			</div> -->
		</div>
	</div>
</div>