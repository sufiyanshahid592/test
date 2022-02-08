<div class="dashboard-page edit-profile-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 dashboard-sidebar">
				<span class="dashboard-profile-img" style='background-image: url("<?php echo base_url("assets/user/img/user.jpg"); ?>");'>
					<!-- <img src="<?php //echo base_url("assets/user/img/user.jpg"); ?>"> -->
				</span>
				<ul>
					<li><a href="<?php echo base_url("dashboard"); ?>">Dashboard</a></li>
					<li><a href="#">Edit Profile</a></li>
				</ul>
			</div>
			<div class="col-lg-9 dashboard-content form-section">
				<h1>Edit Profile</h1>
				<form class="register-form" method="post" onsubmit="return false;">
					<div class="row">
						<div class="col-lg-6">
							<div class="row">
								<div class="form-group">
									<div class="col-lg-12">
										<label>Profile Created By:</label>
									</div>
									<div class="col-lg-12 radion-button-style">
										<select class="form-control dropdown-search" name="created_by">
											<option <?php if($get_profile_details[0]['created_by']=="Self"){echo "selected";} ?> value="Self">Self</option>
											<option <?php if($get_profile_details[0]['created_by']=="Parents"){echo "selected";} ?> value="Parents">Parents</option>
											<option <?php if($get_profile_details[0]['created_by']=="Sibling"){echo "selected";} ?> value="Sibling">Sibling</option>
											<option <?php if($get_profile_details[0]['created_by']=="Relative"){echo "selected";} ?> value="Relative">Relative</option>
											<option <?php if($get_profile_details[0]['created_by']=="Friend"){echo "selected";} ?> value="Friend">Friend</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-12">
									<label class="control-label">Gender:</label>
								</div>
								<div class="col-lg-12 radion-button-style">
									<select class="form-control dropdown-search" name="gender">
										<option <?php if($get_profile_details[0]['gender']=="Male"){echo "selected";} ?> value="Male">Male</option>
										<option <?php if($get_profile_details[0]['gender']=="Female"){echo "selected";} ?> value="Female">Female</option>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-12">
									<label class="control-label">Full Name:</label>
								</div>
								<div class="col-lg-12 radion-button-style">
									<input type="text" name="full_name" class="form-control" value="<?php echo $get_profile_details[0]['full_name']; ?>">
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-12">
									<label class="control-label">Age:</label>
								</div>
								<div class="col-lg-12 radion-button-style">
									<input type="text" name="age" class="form-control" value="<?php echo $get_profile_details[0]['age']; ?>">
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<label class="control-label">Marital Status:</label>
						</div>
						<div class="col-lg-12 radion-button-style">
							<select class="form-control dropdown-search" name="marital_status">
								<option <?php if($get_profile_details[0]['marital_status']=="Unmarried"){echo "checked";} ?> value="Unmarried">Unmarried</option>
								<option <?php if($get_profile_details[0]['marital_status']=="Married"){echo "checked";} ?> value="Married">Married</option>
								<option <?php if($get_profile_details[0]['marital_status']=="Widow/Widower"){echo "checked";} ?> value="Widow/Widower">Widow/Widower</option>
								<option <?php if($get_profile_details[0]['marital_status']=="Divorced"){echo "checked";} ?> value="Divorced">Divorced</option>
								<option <?php if($get_profile_details[0]['marital_status']=="Separated"){echo "checked";} ?> value="Separated">Separated</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-12">
									<label class="control-label">Total Brothers</label>
								</div>
								<div class="col-lg-12">
									<input type="number" name="total_brothers" class="form-control" value="<?php echo $get_profile_details[0]['total_brothers']; ?>">
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-12">
									<label class="control-label">Married Brothers</label>
								</div>
								<div class="col-lg-12">
									<input type="number" name="married_brothers" class="form-control" value="<?php echo $get_profile_details[0]['married_brothers']; ?>">
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-12">
									<label class="control-label">Total Sisters</label>
								</div>
								<div class="col-lg-12">
									<input type="number" name="total_sister" class="form-control" value="<?php echo $get_profile_details[0]['total_sister']; ?>">
								</div>
							</div>
						</div>
						<div class="col-lg-3">
							<div class="row">
								<div class="col-lg-12">
									<label class="control-label">Married Sisters</label>
								</div>
								<div class="col-lg-12">
									<input type="number" name="married_sister" class="form-control" value="<?php echo $get_profile_details[0]['married_sister']; ?>">
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
									<input type="text" name="highest_education" class="form-control" value="<?php echo $get_profile_details[0]['highest_education']; ?>">
									<?php /* ?>
									<select class="form-control dropdown-search" name="highest_education">
										<option selected="selected" value="">--- Select ---</option>
										<option <?php if($get_profile_details[0]['highest_education']=="Middle"){echo "selected";} ?> value="Middle">Middle</option>
										<option <?php if($get_profile_details[0]['highest_education']=="Matric"){echo "selected";} ?> value="Matric">Matric</option>
										<option <?php if($get_profile_details[0]['highest_education']=="Intermediate/D.A.E"){echo "selected";} ?> value="Intermediate/D.A.E">Intermediate/D.A.E</option>
										<option <?php if($get_profile_details[0]['highest_education']=="Graduation"){echo "selected";} ?> value="Graduation">Graduation</option>
										<option <?php if($get_profile_details[0]['highest_education']=="Masters"){echo "selected";} ?> value="Masters">Masters</option>
										<option <?php if($get_profile_details[0]['highest_education']=="M.Phil"){echo "selected";} ?> value="M.Phil">M.Phil</option>
										<option <?php if($get_profile_details[0]['highest_education']=="Ph.D"){echo "selected";} ?> value="Ph.D">Ph.D</option>
									</select>
									<?php */ ?>
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
										<option <?php if($get_profile_details[0]['height']=="4 Feet"){echo "selected";} ?> value="4 Feet">4 Feet</option>
										<option <?php if($get_profile_details[0]['height']=="4 Feet 1 Inch"){echo "selected";} ?> value="4 Feet 1 Inch">4 Feet 1 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="4 Feet 2 Inch"){echo "selected";} ?> value="4 Feet 2 Inch">4 Feet 2 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="4 Feet 3 Inch"){echo "selected";} ?> value="4 Feet 3 Inch">4 Feet 3 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="4 Feet 4 Inch"){echo "selected";} ?> value="4 Feet 4 Inch">4 Feet 4 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="4 Feet 5 Inch"){echo "selected";} ?> value="4 Feet 5 Inch">4 Feet 5 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="4 Feet 6 Inch"){echo "selected";} ?> value="4 Feet 6 Inch">4 Feet 6 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="4 Feet 7 Inch"){echo "selected";} ?> value="4 Feet 7 Inch">4 Feet 7 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="4 Feet 8 Inch"){echo "selected";} ?> value="4 Feet 8 Inch">4 Feet 8 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="4 Feet 9 Inch"){echo "selected";} ?> value="4 Feet 9 Inch">4 Feet 9 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="4 Feet 10 Inch"){echo "selected";} ?> value="4 Feet 10 Inch">4 Feet 10 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="4 Feet 11 Inch"){echo "selected";} ?> value="4 Feet 11 Inch">4 Feet 11 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="5 Feet"){echo "selected";} ?> value="5 Feet">5 Feet</option>
										<option <?php if($get_profile_details[0]['height']=="5 Feet 1 Inch"){echo "selected";} ?> value="5 Feet 1 Inch">5 Feet 1 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="5 Feet 2 Inch"){echo "selected";} ?> value="5 Feet 2 Inch">5 Feet 2 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="5 Feet 3 Inch"){echo "selected";} ?> value="5 Feet 3 Inch">5 Feet 3 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="5 Feet 4 Inch"){echo "selected";} ?> value="5 Feet 4 Inch">5 Feet 4 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="5 Feet 5 Inch"){echo "selected";} ?> value="5 Feet 5 Inch">5 Feet 5 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="5 Feet 6 Inch"){echo "selected";} ?> value="5 Feet 6 Inch">5 Feet 6 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="5 Feet 7 Inch"){echo "selected";} ?> value="5 Feet 7 Inch">5 Feet 7 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="5 Feet 8 Inch"){echo "selected";} ?> value="5 Feet 8 Inch">5 Feet 8 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="5 Feet 9 Inch"){echo "selected";} ?> value="5 Feet 9 Inch">5 Feet 9 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="5 Feet 10 Inch"){echo "selected";} ?> value="5 Feet 10 Inch">5 Feet 10 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="5 Feet 11 Inch"){echo "selected";} ?> value="5 Feet 11 Inch">5 Feet 11 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="6 Feet"){echo "selected";} ?> value="6 Feet">6 Feet</option>
										<option <?php if($get_profile_details[0]['height']=="6 Feet 1 Inch"){echo "selected";} ?> value="6 Feet 1 Inch">6 Feet 1 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="6 Feet 2 Inch"){echo "selected";} ?> value="6 Feet 2 Inch">6 Feet 2 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="6 Feet 3 Inch"){echo "selected";} ?> value="6 Feet 3 Inch">6 Feet 3 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="6 Feet 4 Inch"){echo "selected";} ?> value="6 Feet 4 Inch">6 Feet 4 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="6 Feet 5 Inch"){echo "selected";} ?> value="6 Feet 5 Inch">6 Feet 5 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="6 Feet 6 Inch"){echo "selected";} ?> value="6 Feet 6 Inch">6 Feet 6 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="6 Feet 7 Inch"){echo "selected";} ?> value="6 Feet 7 Inch">6 Feet 7 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="6 Feet 8 Inch"){echo "selected";} ?> value="6 Feet 8 Inch">6 Feet 8 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="6 Feet 9 Inch"){echo "selected";} ?> value="6 Feet 9 Inch">6 Feet 9 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="6 Feet 10 Inch"){echo "selected";} ?> value="6 Feet 10 Inch">5 Feet 10 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="6 Feet 11 Inch"){echo "selected";} ?> value="6 Feet 11 Inch">5 Feet 11 Inch</option>
										<option <?php if($get_profile_details[0]['height']=="7 Feet"){echo "selected";} ?> value="7 Feet">7 Feet</option>
									</select>
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
									<input type="text" name="profession" class="form-control" value="<?php echo $get_profile_details[0]['profession']; ?>">
									<?php /* ?>
									<select class="form-control dropdown-search" name="profession">
										<option>-- Select Profession --</option>
										<option <?php if($get_profile_details[0]['profession']=="Able Seamen"){echo "selected";} ?> value="Able Seamen">Able Seamen</option>
										<option <?php if($get_profile_details[0]['profession']=="Accountants"){echo "selected";} ?> value="Accountants">Accountants</option>
										<option <?php if($get_profile_details[0]['profession']=="Accountants and Auditors"){echo "selected";} ?> value="Accountants and Auditors">Accountants and Auditors</option>
										<option <?php if($get_profile_details[0]['profession']=="Actors"){echo "selected";} ?> value="Actors">Actors</option>
										<option <?php if($get_profile_details[0]['profession']=="Actuaries"){echo "selected";} ?> value="Actuaries">Actuaries</option>
										<option <?php if($get_profile_details[0]['profession']=="Acupuncturists"){echo "selected";} ?> value="Acupuncturists">Acupuncturists</option>
										<option <?php if($get_profile_details[0]['profession']=="Acute Care Nurses"){echo "selected";} ?> value="Acute Care Nurses">Acute Care Nurses</option>
										<option <?php if($get_profile_details[0]['profession']=="Adapted Physical Education Specialists"){echo "selected";} ?> value="Adapted Physical Education Specialists">Adapted Physical Education Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Adjustment Clerks"){echo "selected";} ?> value="Adjustment Clerks">Adjustment Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Administrative Law Judges, Adjudicators, and Hearing Officers"){echo "selected";} ?> value="Administrative Law Judges, Adjudicators, and Hearing Officers">Administrative Law Judges, Adjudicators, and Hearing Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="Administrative Services Managers"){echo "selected";} ?> value="Administrative Services Managers">Administrative Services Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Adult Literacy, Remedial Education, and GED Teachers and Instructors"){echo "selected";} ?> value="Adult Literacy, Remedial Education, and GED Teachers and Instructors">Adult Literacy, Remedial Education, and GED Teachers and Instructors</option>
										<option <?php if($get_profile_details[0]['profession']=="Advanced Practice Psychiatric Nurses"){echo "selected";} ?> value="Advanced Practice Psychiatric Nurses">Advanced Practice Psychiatric Nurses</option>
										<option <?php if($get_profile_details[0]['profession']=="Advertising and Promotions Managers"){echo "selected";} ?> value="Advertising and Promotions Managers">Advertising and Promotions Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Advertising Sales Agents"){echo "selected";} ?> value="Advertising Sales Agents">Advertising Sales Agents</option>
										<option <?php if($get_profile_details[0]['profession']=="Aerospace Engineering and Operations Technicians"){echo "selected";} ?> value="Aerospace Engineering and Operations Technicians">Aerospace Engineering and Operations Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Aerospace Engineers"){echo "selected";} ?> value="Aerospace Engineers">Aerospace Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Agents and Business Managers of Artists, Performers, and Athletes"){echo "selected";} ?> value="Agents and Business Managers of Artists, Performers, and Athletes">Agents and Business Managers of Artists, Performers, and Athletes</option>
										<option <?php if($get_profile_details[0]['profession']=="Agricultural and Food Science Technicians"){echo "selected";} ?> value="Agricultural and Food Science Technicians">Agricultural and Food Science Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Agricultural Crop Farm Managers"){echo "selected";} ?> value="Agricultural Crop Farm Managers">Agricultural Crop Farm Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Agricultural Engineers"){echo "selected";} ?> value="Agricultural Engineers">Agricultural Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Agricultural Equipment Operators"){echo "selected";} ?> value="Agricultural Equipment Operators">Agricultural Equipment Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Agricultural Inspectors"){echo "selected";} ?> value="Agricultural Inspectors">Agricultural Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Agricultural Sciences Teachers, Postsecondary"){echo "selected";} ?> value="Agricultural Sciences Teachers, Postsecondary">Agricultural Sciences Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Agricultural Technicians"){echo "selected";} ?> value="Agricultural Technicians">Agricultural Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Agricultural Workers, All Other"){echo "selected";} ?> value="Agricultural Workers, All Other">Agricultural Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Air Crew Members"){echo "selected";} ?> value="Air Crew Members">Air Crew Members</option>
										<option <?php if($get_profile_details[0]['profession']=="Air Crew Officers"){echo "selected";} ?> value="Air Crew Officers">Air Crew Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="Air Traffic Controllers"){echo "selected";} ?> value="Air Traffic Controllers">Air Traffic Controllers</option>
										<option <?php if($get_profile_details[0]['profession']=="Aircraft Body and Bonded Structure Repairers"){echo "selected";} ?> value="Aircraft Body and Bonded Structure Repairers">Aircraft Body and Bonded Structure Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Aircraft Cargo Handling Supervisors"){echo "selected";} ?> value="Aircraft Cargo Handling Supervisors">Aircraft Cargo Handling Supervisors</option>
										<option <?php if($get_profile_details[0]['profession']=="Aircraft Engine Specialists"){echo "selected";} ?> value="Aircraft Engine Specialists">Aircraft Engine Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Aircraft Launch and Recovery Officers"){echo "selected";} ?> value="Aircraft Launch and Recovery Officers">Aircraft Launch and Recovery Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="Aircraft Launch and Recovery Specialists"){echo "selected";} ?> value="Aircraft Launch and Recovery Specialists">Aircraft Launch and Recovery Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Aircraft Mechanics and Service Technicians"){echo "selected";} ?> value="Aircraft Mechanics and Service Technicians">Aircraft Mechanics and Service Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Aircraft Rigging Assemblers"){echo "selected";} ?> value="Aircraft Rigging Assemblers">Aircraft Rigging Assemblers</option>
										<option <?php if($get_profile_details[0]['profession']=="Aircraft Structure Assemblers, Precision"){echo "selected";} ?> value="Aircraft Structure Assemblers, Precision">Aircraft Structure Assemblers, Precision</option>
										<option <?php if($get_profile_details[0]['profession']=="Aircraft Structure, Surfaces, Rigging, and Systems Assemblers"){echo "selected";} ?> value="Aircraft Structure, Surfaces, Rigging, and Systems Assemblers">Aircraft Structure, Surfaces, Rigging, and Systems Assemblers</option>
										<option <?php if($get_profile_details[0]['profession']=="Aircraft Systems Assemblers, Precision"){echo "selected";} ?> value="Aircraft Systems Assemblers, Precision">Aircraft Systems Assemblers, Precision</option>
										<option <?php if($get_profile_details[0]['profession']=="Airfield Operations Specialists"){echo "selected";} ?> value="Airfield Operations Specialists">Airfield Operations Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Airframe-and-Power-Plant Mechanics"){echo "selected";} ?> value="Airframe-and-Power-Plant Mechanics">Airframe-and-Power-Plant Mechanics</option>
										<option <?php if($get_profile_details[0]['profession']=="Airline Pilots, Copilots, and Flight Engineers"){echo "selected";} ?> value="Airline Pilots, Copilots, and Flight Engineers">Airline Pilots, Copilots, and Flight Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Allergists and Immunologists"){echo "selected";} ?> value="Allergists and Immunologists">Allergists and Immunologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Ambulance Drivers and Attendants, Except Emergency Medical Technicians"){echo "selected";} ?> value="Ambulance Drivers and Attendants, Except Emergency Medical Technicians">Ambulance Drivers and Attendants, Except Emergency Medical Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Amusement and Recreation Attendants"){echo "selected";} ?> value="Amusement and Recreation Attendants">Amusement and Recreation Attendants</option>
										<option <?php if($get_profile_details[0]['profession']=="Anesthesiologist Assistants"){echo "selected";} ?> value="Anesthesiologist Assistants">Anesthesiologist Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Anesthesiologists"){echo "selected";} ?> value="Anesthesiologists">Anesthesiologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Animal Breeders"){echo "selected";} ?> value="Animal Breeders">Animal Breeders</option>
										<option <?php if($get_profile_details[0]['profession']=="Animal Control Workers"){echo "selected";} ?> value="Animal Control Workers">Animal Control Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Animal Scientists"){echo "selected";} ?> value="Animal Scientists">Animal Scientists</option>
										<option <?php if($get_profile_details[0]['profession']=="Animal Trainers"){echo "selected";} ?> value="Animal Trainers">Animal Trainers</option>
										<option <?php if($get_profile_details[0]['profession']=="Anthropologists"){echo "selected";} ?> value="Anthropologists">Anthropologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Anthropologists and Archeologists"){echo "selected";} ?> value="Anthropologists and Archeologists">Anthropologists and Archeologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Anthropology and Archeology Teachers, Postsecondary"){echo "selected";} ?> value="Anthropology and Archeology Teachers, Postsecondary">Anthropology and Archeology Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Appraisers and Assessors of Real Estate"){echo "selected";} ?> value="Appraisers and Assessors of Real Estate">Appraisers and Assessors of Real Estate</option>
										<option <?php if($get_profile_details[0]['profession']=="Appraisers, Real Estate"){echo "selected";} ?> value="Appraisers, Real Estate">Appraisers, Real Estate</option>
										<option <?php if($get_profile_details[0]['profession']=="Aquacultural Managers"){echo "selected";} ?> value="Aquacultural Managers">Aquacultural Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Arbitrators, Mediators, and Conciliators"){echo "selected";} ?> value="Arbitrators, Mediators, and Conciliators">Arbitrators, Mediators, and Conciliators</option>
										<option <?php if($get_profile_details[0]['profession']=="Archeologists"){echo "selected";} ?> value="Archeologists">Archeologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Architects, Except Landscape and Naval"){echo "selected";} ?> value="Architects, Except Landscape and Naval">Architects, Except Landscape and Naval</option>
										<option <?php if($get_profile_details[0]['profession']=="Architectural and Civil Drafters"){echo "selected";} ?> value="Architectural and Civil Drafters">Architectural and Civil Drafters</option>
										<option <?php if($get_profile_details[0]['profession']=="Architectural Drafters"){echo "selected";} ?> value="Architectural Drafters">Architectural Drafters</option>
										<option <?php if($get_profile_details[0]['profession']=="Architecture Teachers, Postsecondary"){echo "selected";} ?> value="Architecture Teachers, Postsecondary">Architecture Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Archivists"){echo "selected";} ?> value="Archivists">Archivists</option>
										<option <?php if($get_profile_details[0]['profession']=="Area, Ethnic, and Cultural Studies Teachers, Postsecondary"){echo "selected";} ?> value="Area, Ethnic, and Cultural Studies Teachers, Postsecondary">Area, Ethnic, and Cultural Studies Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Armored Assault Vehicle Crew Members"){echo "selected";} ?> value="Armored Assault Vehicle Crew Members">Armored Assault Vehicle Crew Members</option>
										<option <?php if($get_profile_details[0]['profession']=="Armored Assault Vehicle Officers"){echo "selected";} ?> value="Armored Assault Vehicle Officers">Armored Assault Vehicle Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="Art Directors"){echo "selected";} ?> value="Art Directors">Art Directors</option>
										<option <?php if($get_profile_details[0]['profession']=="Art Therapists"){echo "selected";} ?> value="Art Therapists">Art Therapists</option>
										<option <?php if($get_profile_details[0]['profession']=="Art, Drama, and Music Teachers, Postsecondary"){echo "selected";} ?> value="Art, Drama, and Music Teachers, Postsecondary">Art, Drama, and Music Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Artillery and Missile Crew Members"){echo "selected";} ?> value="Artillery and Missile Crew Members">Artillery and Missile Crew Members</option>
										<option <?php if($get_profile_details[0]['profession']=="Artillery and Missile Officers"){echo "selected";} ?> value="Artillery and Missile Officers">Artillery and Missile Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="Artists and Related Workers, All Other"){echo "selected";} ?> value="Artists and Related Workers, All Other">Artists and Related Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Assemblers and Fabricators, All Other"){echo "selected";} ?> value="Assemblers and Fabricators, All Other">Assemblers and Fabricators, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Assessors"){echo "selected";} ?> value="Assessors">Assessors</option>
										<option <?php if($get_profile_details[0]['profession']=="Astronomers"){echo "selected";} ?> value="Astronomers">Astronomers</option>
										<option <?php if($get_profile_details[0]['profession']=="Athletes and Sports Competitors"){echo "selected";} ?> value="Athletes and Sports Competitors">Athletes and Sports Competitors</option>
										<option <?php if($get_profile_details[0]['profession']=="Athletic Trainers"){echo "selected";} ?> value="Athletic Trainers">Athletic Trainers</option>
										<option <?php if($get_profile_details[0]['profession']=="Atmospheric and Space Scientists"){echo "selected";} ?> value="Atmospheric and Space Scientists">Atmospheric and Space Scientists</option>
										<option <?php if($get_profile_details[0]['profession']=="Atmospheric, Earth, Marine, and Space Sciences Teachers, Postsecondary"){echo "selected";} ?> value="Atmospheric, Earth, Marine, and Space Sciences Teachers, Postsecondary">Atmospheric, Earth, Marine, and Space Sciences Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Audio and Video Equipment Technicians"){echo "selected";} ?> value="Audio and Video Equipment Technicians">Audio and Video Equipment Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Audiologist"){echo "selected";} ?> value="Audiologist">Audiologist</option>
										<option <?php if($get_profile_details[0]['profession']=="Audiologists"){echo "selected";} ?> value="Audiologists">Audiologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Audio-Visual Collections Specialists"){echo "selected";} ?> value="Audio-Visual Collections Specialists">Audio-Visual Collections Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Auditors"){echo "selected";} ?> value="Auditors">Auditors</option>
										<option <?php if($get_profile_details[0]['profession']=="Automatic Teller Machine Servicers"){echo "selected";} ?> value="Automatic Teller Machine Servicers">Automatic Teller Machine Servicers</option>
										<option <?php if($get_profile_details[0]['profession']=="Automotive Body and Related Repairers"){echo "selected";} ?> value="Automotive Body and Related Repairers">Automotive Body and Related Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Automotive Engineering Technicians"){echo "selected";} ?> value="Automotive Engineering Technicians">Automotive Engineering Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Automotive Engineers"){echo "selected";} ?> value="Automotive Engineers">Automotive Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Automotive Glass Installers and Repairers"){echo "selected";} ?> value="Automotive Glass Installers and Repairers">Automotive Glass Installers and Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Automotive Master Mechanics"){echo "selected";} ?> value="Automotive Master Mechanics">Automotive Master Mechanics</option>
										<option <?php if($get_profile_details[0]['profession']=="Automotive Service Technicians and Mechanics"){echo "selected";} ?> value="Automotive Service Technicians and Mechanics">Automotive Service Technicians and Mechanics</option>
										<option <?php if($get_profile_details[0]['profession']=="Automotive Specialty Technicians"){echo "selected";} ?> value="Automotive Specialty Technicians">Automotive Specialty Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Auxiliary Equipment Operators, Power"){echo "selected";} ?> value="Auxiliary Equipment Operators, Power">Auxiliary Equipment Operators, Power</option>
										<option <?php if($get_profile_details[0]['profession']=="Aviation Inspectors"){echo "selected";} ?> value="Aviation Inspectors">Aviation Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Avionics Technicians"){echo "selected";} ?> value="Avionics Technicians">Avionics Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Baggage Porters and Bellhops"){echo "selected";} ?> value="Baggage Porters and Bellhops">Baggage Porters and Bellhops</option>
										<option <?php if($get_profile_details[0]['profession']=="Bailiffs"){echo "selected";} ?> value="Bailiffs">Bailiffs</option>
										<option <?php if($get_profile_details[0]['profession']=="Bakers"){echo "selected";} ?> value="Bakers">Bakers</option>
										<option <?php if($get_profile_details[0]['profession']=="Bakers, Bread and Pastry"){echo "selected";} ?> value="Bakers, Bread and Pastry">Bakers, Bread and Pastry</option>
										<option <?php if($get_profile_details[0]['profession']=="Bakers, Manufacturing"){echo "selected";} ?> value="Bakers, Manufacturing">Bakers, Manufacturing</option>
										<option <?php if($get_profile_details[0]['profession']=="Barbers"){echo "selected";} ?> value="Barbers">Barbers</option>
										<option <?php if($get_profile_details[0]['profession']=="Baristas"){echo "selected";} ?> value="Baristas">Baristas</option>
										<option <?php if($get_profile_details[0]['profession']=="Bartenders"){echo "selected";} ?> value="Bartenders">Bartenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Battery Repairers"){echo "selected";} ?> value="Battery Repairers">Battery Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Bench Workers, Jewelry"){echo "selected";} ?> value="Bench Workers, Jewelry">Bench Workers, Jewelry</option>
										<option <?php if($get_profile_details[0]['profession']=="Bicycle Repairers"){echo "selected";} ?> value="Bicycle Repairers">Bicycle Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Bill and Account Collectors"){echo "selected";} ?> value="Bill and Account Collectors">Bill and Account Collectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Billing and Posting Clerks and Machine Operators"){echo "selected";} ?> value="Billing and Posting Clerks and Machine Operators">Billing and Posting Clerks and Machine Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Billing, Cost, and Rate Clerks"){echo "selected";} ?> value="Billing, Cost, and Rate Clerks">Billing, Cost, and Rate Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Billing, Posting, and Calculating Machine Operators"){echo "selected";} ?> value="Billing, Posting, and Calculating Machine Operators">Billing, Posting, and Calculating Machine Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Bindery Machine Operators and Tenders"){echo "selected";} ?> value="Bindery Machine Operators and Tenders">Bindery Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Bindery Machine Setters and Set-Up Operators"){echo "selected";} ?> value="Bindery Machine Setters and Set-Up Operators">Bindery Machine Setters and Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Bindery Workers"){echo "selected";} ?> value="Bindery Workers">Bindery Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Biochemical Engineers"){echo "selected";} ?> value="Biochemical Engineers">Biochemical Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Biochemists"){echo "selected";} ?> value="Biochemists">Biochemists</option>
										<option <?php if($get_profile_details[0]['profession']=="Biochemists and Biophysicists"){echo "selected";} ?> value="Biochemists and Biophysicists">Biochemists and Biophysicists</option>
										<option <?php if($get_profile_details[0]['profession']=="Biofuels Processing Technicians"){echo "selected";} ?> value="Biofuels Processing Technicians">Biofuels Processing Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Biofuels Production Managers"){echo "selected";} ?> value="Biofuels Production Managers">Biofuels Production Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Biofuels/Biodiesel Technology and Product Development Managers"){echo "selected";} ?> value="Biofuels/Biodiesel Technology and Product Development Managers">Biofuels/Biodiesel Technology and Product Development Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Bioinformatics Scientists"){echo "selected";} ?> value="Bioinformatics Scientists">Bioinformatics Scientists</option>
										<option <?php if($get_profile_details[0]['profession']=="Bioinformatics Technicians"){echo "selected";} ?> value="Bioinformatics Technicians">Bioinformatics Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Biological Science Teachers, Postsecondary"){echo "selected";} ?> value="Biological Science Teachers, Postsecondary">Biological Science Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Biological Scientists, All Other"){echo "selected";} ?> value="Biological Scientists, All Other">Biological Scientists, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Biological Technicians"){echo "selected";} ?> value="Biological Technicians">Biological Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Biologists"){echo "selected";} ?> value="Biologists">Biologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Biomass Plant Technicians"){echo "selected";} ?> value="Biomass Plant Technicians">Biomass Plant Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Biomass Power Plant Managers"){echo "selected";} ?> value="Biomass Power Plant Managers">Biomass Power Plant Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Biomedical Engineers"){echo "selected";} ?> value="Biomedical Engineers">Biomedical Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Biophysicists"){echo "selected";} ?> value="Biophysicists">Biophysicists</option>
										<option <?php if($get_profile_details[0]['profession']=="Biostatisticians"){echo "selected";} ?> value="Biostatisticians">Biostatisticians</option>
										<option <?php if($get_profile_details[0]['profession']=="Boat Builders and Shipwrights"){echo "selected";} ?> value="Boat Builders and Shipwrights">Boat Builders and Shipwrights</option>
										<option <?php if($get_profile_details[0]['profession']=="Boiler Operators and Tenders, Low Pressure"){echo "selected";} ?> value="Boiler Operators and Tenders, Low Pressure">Boiler Operators and Tenders, Low Pressure</option>
										<option <?php if($get_profile_details[0]['profession']=="Boilermakers"){echo "selected";} ?> value="Boilermakers">Boilermakers</option>
										<option <?php if($get_profile_details[0]['profession']=="Bookbinders"){echo "selected";} ?> value="Bookbinders">Bookbinders</option>
										<option <?php if($get_profile_details[0]['profession']=="Bookkeeping, Accounting, and Auditing Clerks"){echo "selected";} ?> value="Bookkeeping, Accounting, and Auditing Clerks">Bookkeeping, Accounting, and Auditing Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Brattice Builders"){echo "selected";} ?> value="Brattice Builders">Brattice Builders</option>
										<option <?php if($get_profile_details[0]['profession']=="Brazers"){echo "selected";} ?> value="Brazers">Brazers</option>
										<option <?php if($get_profile_details[0]['profession']=="Brickmasons and Blockmasons"){echo "selected";} ?> value="Brickmasons and Blockmasons">Brickmasons and Blockmasons</option>
										<option <?php if($get_profile_details[0]['profession']=="Bridge and Lock Tenders"){echo "selected";} ?> value="Bridge and Lock Tenders">Bridge and Lock Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Broadcast News Analysts"){echo "selected";} ?> value="Broadcast News Analysts">Broadcast News Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Broadcast Technicians"){echo "selected";} ?> value="Broadcast Technicians">Broadcast Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Brokerage Clerks"){echo "selected";} ?> value="Brokerage Clerks">Brokerage Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Brownfield Redevelopment Specialists and Site Managers"){echo "selected";} ?> value="Brownfield Redevelopment Specialists and Site Managers">Brownfield Redevelopment Specialists and Site Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Budget Analysts"){echo "selected";} ?> value="Budget Analysts">Budget Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Buffing and Polishing Set-Up Operators"){echo "selected";} ?> value="Buffing and Polishing Set-Up Operators">Buffing and Polishing Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Building Cleaning Workers, All Other"){echo "selected";} ?> value="Building Cleaning Workers, All Other">Building Cleaning Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Bus and Truck Mechanics and Diesel Engine Specialists"){echo "selected";} ?> value="Bus and Truck Mechanics and Diesel Engine Specialists">Bus and Truck Mechanics and Diesel Engine Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Bus Drivers, School"){echo "selected";} ?> value="Bus Drivers, School">Bus Drivers, School</option>
										<option <?php if($get_profile_details[0]['profession']=="Bus Drivers, Transit and Intercity"){echo "selected";} ?> value="Bus Drivers, Transit and Intercity">Bus Drivers, Transit and Intercity</option>
										<option <?php if($get_profile_details[0]['profession']=="Business Continuity Planners"){echo "selected";} ?> value="Business Continuity Planners">Business Continuity Planners</option>
										<option <?php if($get_profile_details[0]['profession']=="Business Intelligence Analysts"){echo "selected";} ?> value="Business Intelligence Analysts">Business Intelligence Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Business Operations Specialists, All Other"){echo "selected";} ?> value="Business Operations Specialists, All Other">Business Operations Specialists, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Business Teachers, Postsecondary"){echo "selected";} ?> value="Business Teachers, Postsecondary">Business Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Butchers and Meat Cutters"){echo "selected";} ?> value="Butchers and Meat Cutters">Butchers and Meat Cutters</option>
										<option <?php if($get_profile_details[0]['profession']=="Cabinetmakers and Bench Carpenters"){echo "selected";} ?> value="Cabinetmakers and Bench Carpenters">Cabinetmakers and Bench Carpenters</option>
										<option <?php if($get_profile_details[0]['profession']=="Calibration and Instrumentation Technicians"){echo "selected";} ?> value="Calibration and Instrumentation Technicians">Calibration and Instrumentation Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Camera and Photographic Equipment Repairers"){echo "selected";} ?> value="Camera and Photographic Equipment Repairers">Camera and Photographic Equipment Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Camera Operators"){echo "selected";} ?> value="Camera Operators">Camera Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Camera Operators, Television, Video, and Motion Picture"){echo "selected";} ?> value="Camera Operators, Television, Video, and Motion Picture">Camera Operators, Television, Video, and Motion Picture</option>
										<option <?php if($get_profile_details[0]['profession']=="Captains, Mates, and Pilots of Water Vessels"){echo "selected";} ?> value="Captains, Mates, and Pilots of Water Vessels">Captains, Mates, and Pilots of Water Vessels</option>
										<option <?php if($get_profile_details[0]['profession']=="Caption Writers"){echo "selected";} ?> value="Caption Writers">Caption Writers</option>
										<option <?php if($get_profile_details[0]['profession']=="Cardiovascular Technologists and Technicians"){echo "selected";} ?> value="Cardiovascular Technologists and Technicians">Cardiovascular Technologists and Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Cargo and Freight Agents"){echo "selected";} ?> value="Cargo and Freight Agents">Cargo and Freight Agents</option>
										<option <?php if($get_profile_details[0]['profession']=="Carpenter Assemblers and Repairers"){echo "selected";} ?> value="Carpenter Assemblers and Repairers">Carpenter Assemblers and Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Carpenters"){echo "selected";} ?> value="Carpenters">Carpenters</option>
										<option <?php if($get_profile_details[0]['profession']=="Carpet Installers"){echo "selected";} ?> value="Carpet Installers">Carpet Installers</option>
										<option <?php if($get_profile_details[0]['profession']=="Cartographers and Photogrammetrists"){echo "selected";} ?> value="Cartographers and Photogrammetrists">Cartographers and Photogrammetrists</option>
										<option <?php if($get_profile_details[0]['profession']=="Cartoonists"){echo "selected";} ?> value="Cartoonists">Cartoonists</option>
										<option <?php if($get_profile_details[0]['profession']=="Cashiers"){echo "selected";} ?> value="Cashiers">Cashiers</option>
										<option <?php if($get_profile_details[0]['profession']=="Casting Machine Set-Up Operators"){echo "selected";} ?> value="Casting Machine Set-Up Operators">Casting Machine Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Ceiling Tile Installers"){echo "selected";} ?> value="Ceiling Tile Installers">Ceiling Tile Installers</option>
										<option <?php if($get_profile_details[0]['profession']=="Cement Masons and Concrete Finishers"){echo "selected";} ?> value="Cement Masons and Concrete Finishers">Cement Masons and Concrete Finishers</option>
										<option <?php if($get_profile_details[0]['profession']=="Cementing and Gluing Machine Operators and Tenders"){echo "selected";} ?> value="Cementing and Gluing Machine Operators and Tenders">Cementing and Gluing Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Central Office and PBX Installers and Repairers"){echo "selected";} ?> value="Central Office and PBX Installers and Repairers">Central Office and PBX Installers and Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Central Office Operators"){echo "selected";} ?> value="Central Office Operators">Central Office Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Chefs and Head Cooks"){echo "selected";} ?> value="Chefs and Head Cooks">Chefs and Head Cooks</option>
										<option <?php if($get_profile_details[0]['profession']=="Chemical Engineers"){echo "selected";} ?> value="Chemical Engineers">Chemical Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Chemical Equipment Controllers and Operators"){echo "selected";} ?> value="Chemical Equipment Controllers and Operators">Chemical Equipment Controllers and Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Chemical Equipment Operators and Tenders"){echo "selected";} ?> value="Chemical Equipment Operators and Tenders">Chemical Equipment Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Chemical Equipment Tenders"){echo "selected";} ?> value="Chemical Equipment Tenders">Chemical Equipment Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Chemical Plant and System Operators"){echo "selected";} ?> value="Chemical Plant and System Operators">Chemical Plant and System Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Chemical Technicians"){echo "selected";} ?> value="Chemical Technicians">Chemical Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Chemistry Teachers, Postsecondary"){echo "selected";} ?> value="Chemistry Teachers, Postsecondary">Chemistry Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Chemists"){echo "selected";} ?> value="Chemists">Chemists</option>
										<option <?php if($get_profile_details[0]['profession']=="Chief Executives"){echo "selected";} ?> value="Chief Executives">Chief Executives</option>
										<option <?php if($get_profile_details[0]['profession']=="Chief Sustainability Officers"){echo "selected";} ?> value="Chief Sustainability Officers">Chief Sustainability Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="Child Care Workers"){echo "selected";} ?> value="Child Care Workers">Child Care Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Child Support, Missing Persons, and Unemployment Insurance Fraud Investigators"){echo "selected";} ?> value="Child Support, Missing Persons, and Unemployment Insurance Fraud Investigators">Child Support, Missing Persons, and Unemployment Insurance Fraud Investigators</option>
										<option <?php if($get_profile_details[0]['profession']=="Child, Family, and School Social Workers"){echo "selected";} ?> value="Child, Family, and School Social Workers">Child, Family, and School Social Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Chiropractors"){echo "selected";} ?> value="Chiropractors">Chiropractors</option>
										<option <?php if($get_profile_details[0]['profession']=="Choreographers"){echo "selected";} ?> value="Choreographers">Choreographers</option>
										<option <?php if($get_profile_details[0]['profession']=="City Planning Aides"){echo "selected";} ?> value="City Planning Aides">City Planning Aides</option>
										<option <?php if($get_profile_details[0]['profession']=="Civil Drafters"){echo "selected";} ?> value="Civil Drafters">Civil Drafters</option>
										<option <?php if($get_profile_details[0]['profession']=="Civil Engineering Technicians"){echo "selected";} ?> value="Civil Engineering Technicians">Civil Engineering Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Civil Engineers"){echo "selected";} ?> value="Civil Engineers">Civil Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Claims Adjusters, Examiners, and Investigators"){echo "selected";} ?> value="Claims Adjusters, Examiners, and Investigators">Claims Adjusters, Examiners, and Investigators</option>
										<option <?php if($get_profile_details[0]['profession']=="Claims Examiners, Property and Casualty Insurance"){echo "selected";} ?> value="Claims Examiners, Property and Casualty Insurance">Claims Examiners, Property and Casualty Insurance</option>
										<option <?php if($get_profile_details[0]['profession']=="Claims Takers, Unemployment Benefits"){echo "selected";} ?> value="Claims Takers, Unemployment Benefits">Claims Takers, Unemployment Benefits</option>
										<option <?php if($get_profile_details[0]['profession']=="Cleaners of Vehicles and Equipment"){echo "selected";} ?> value="Cleaners of Vehicles and Equipment">Cleaners of Vehicles and Equipment</option>
										<option <?php if($get_profile_details[0]['profession']=="Cleaning, Washing, and Metal Pickling Equipment Operators and Tenders"){echo "selected";} ?> value="Cleaning, Washing, and Metal Pickling Equipment Operators and Tenders">Cleaning, Washing, and Metal Pickling Equipment Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Clergy"){echo "selected";} ?> value="Clergy">Clergy</option>
										<option <?php if($get_profile_details[0]['profession']=="Climate Change Analysts"){echo "selected";} ?> value="Climate Change Analysts">Climate Change Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Clinical Data Managers"){echo "selected";} ?> value="Clinical Data Managers">Clinical Data Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Clinical Nurse Specialists"){echo "selected";} ?> value="Clinical Nurse Specialists">Clinical Nurse Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Clinical Psychologists"){echo "selected";} ?> value="Clinical Psychologists">Clinical Psychologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Clinical Research Coordinators"){echo "selected";} ?> value="Clinical Research Coordinators">Clinical Research Coordinators</option>
										<option <?php if($get_profile_details[0]['profession']=="Clinical, Counseling, and School Psychologists"){echo "selected";} ?> value="Clinical, Counseling, and School Psychologists">Clinical, Counseling, and School Psychologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Coaches and Scouts"){echo "selected";} ?> value="Coaches and Scouts">Coaches and Scouts</option>
										<option <?php if($get_profile_details[0]['profession']=="Coating, Painting, and Spraying Machine Operators and Tenders"){echo "selected";} ?> value="Coating, Painting, and Spraying Machine Operators and Tenders">Coating, Painting, and Spraying Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Coating, Painting, and Spraying Machine Setters and Set-Up Operators"){echo "selected";} ?> value="Coating, Painting, and Spraying Machine Setters and Set-Up Operators">Coating, Painting, and Spraying Machine Setters and Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Coating, Painting, and Spraying Machine Setters, Operators, and Tenders"){echo "selected";} ?> value="Coating, Painting, and Spraying Machine Setters, Operators, and Tenders">Coating, Painting, and Spraying Machine Setters, Operators, and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Coil Winders, Tapers, and Finishers"){echo "selected";} ?> value="Coil Winders, Tapers, and Finishers">Coil Winders, Tapers, and Finishers</option>
										<option <?php if($get_profile_details[0]['profession']=="Coin, Vending, and Amusement Machine Servicers and Repairers"){echo "selected";} ?> value="Coin, Vending, and Amusement Machine Servicers and Repairers">Coin, Vending, and Amusement Machine Servicers and Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Combination Machine Tool Operators and Tenders, Metal and Plastic"){echo "selected";} ?> value="Combination Machine Tool Operators and Tenders, Metal and Plastic">Combination Machine Tool Operators and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Combination Machine Tool Setters and Set-Up Operators, Metal and Plastic"){echo "selected";} ?> value="Combination Machine Tool Setters and Set-Up Operators, Metal and Plastic">Combination Machine Tool Setters and Set-Up Operators, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Combined Food Preparation and Serving Workers, Including Fast Food"){echo "selected";} ?> value="Combined Food Preparation and Serving Workers, Including Fast Food">Combined Food Preparation and Serving Workers, Including Fast Food</option>
										<option <?php if($get_profile_details[0]['profession']=="Command and Control Center Officers"){echo "selected";} ?> value="Command and Control Center Officers">Command and Control Center Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="Command and Control Center Specialists"){echo "selected";} ?> value="Command and Control Center Specialists">Command and Control Center Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Commercial and Industrial Designers"){echo "selected";} ?> value="Commercial and Industrial Designers">Commercial and Industrial Designers</option>
										<option <?php if($get_profile_details[0]['profession']=="Commercial Divers"){echo "selected";} ?> value="Commercial Divers">Commercial Divers</option>
										<option <?php if($get_profile_details[0]['profession']=="Commercial Pilots"){echo "selected";} ?> value="Commercial Pilots">Commercial Pilots</option>
										<option <?php if($get_profile_details[0]['profession']=="Communication Equipment Mechanics, Installers, and Repairers"){echo "selected";} ?> value="Communication Equipment Mechanics, Installers, and Repairers">Communication Equipment Mechanics, Installers, and Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Communications Equipment Operators, All Other"){echo "selected";} ?> value="Communications Equipment Operators, All Other">Communications Equipment Operators, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Communications Teachers, Postsecondary"){echo "selected";} ?> value="Communications Teachers, Postsecondary">Communications Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Community and Social Service Specialists, All Other"){echo "selected";} ?> value="Community and Social Service Specialists, All Other">Community and Social Service Specialists, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Community Health Workers"){echo "selected";} ?> value="Community Health Workers">Community Health Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Compensation and Benefits Managers"){echo "selected";} ?> value="Compensation and Benefits Managers">Compensation and Benefits Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Compensation and Benefits Managers"){echo "selected";} ?> value="Compensation and Benefits Managers">Compensation and Benefits Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Compensation, Benefits, and Job Analysis Specialist"){echo "selected";} ?> value="Compensation, Benefits, and Job Analysis Specialist">Compensation, Benefits, and Job Analysis Specialist</option>
										<option <?php if($get_profile_details[0]['profession']=="Compensation, Benefits, and Job Analysis Specialists"){echo "selected";} ?> value="Compensation, Benefits, and Job Analysis Specialists">Compensation, Benefits, and Job Analysis Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Compliance Managers"){echo "selected";} ?> value="Compliance Managers">Compliance Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Compliance Officers, Except Agriculture, Construction, Health and Safety, and Transportation"){echo "selected";} ?> value="Compliance Officers, Except Agriculture, Construction, Health and Safety, and Transportation">Compliance Officers, Except Agriculture, Construction, Health and Safety, and Transportation</option>
										<option <?php if($get_profile_details[0]['profession']=="Composers"){echo "selected";} ?> value="Composers">Composers</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer and Information Research Scientists"){echo "selected";} ?> value="Computer and Information Research Scientists">Computer and Information Research Scientists</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer and Information Scientists, Research"){echo "selected";} ?> value="Computer and Information Scientists, Research">Computer and Information Scientists, Research</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer and Information Systems Managers"){echo "selected";} ?> value="Computer and Information Systems Managers">Computer and Information Systems Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer Hardware Engineers"){echo "selected";} ?> value="Computer Hardware Engineers">Computer Hardware Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer Network Architects"){echo "selected";} ?> value="Computer Network Architects">Computer Network Architects</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer Network Support Specialists"){echo "selected";} ?> value="Computer Network Support Specialists">Computer Network Support Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer Operators"){echo "selected";} ?> value="Computer Operators">Computer Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer Programmer"){echo "selected";} ?> value="Computer Programmer">Computer Programmer</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer Programmers"){echo "selected";} ?> value="Computer Programmers">Computer Programmers</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer Science Teachers, Postsecondary"){echo "selected";} ?> value="Computer Science Teachers, Postsecondary">Computer Science Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer Security Specialists"){echo "selected";} ?> value="Computer Security Specialists">Computer Security Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer Software Engineers, Applications"){echo "selected";} ?> value="Computer Software Engineers, Applications">Computer Software Engineers, Applications</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer Software Engineers, Systems Software"){echo "selected";} ?> value="Computer Software Engineers, Systems Software">Computer Software Engineers, Systems Software</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer Specialists, All Other"){echo "selected";} ?> value="Computer Specialists, All Other">Computer Specialists, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer Support Specialists"){echo "selected";} ?> value="Computer Support Specialists">Computer Support Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer Systems Analyst"){echo "selected";} ?> value="Computer Systems Analyst">Computer Systems Analyst</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer Systems Analysts"){echo "selected";} ?> value="Computer Systems Analysts">Computer Systems Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer Systems Engineers/Architects"){echo "selected";} ?> value="Computer Systems Engineers/Architects">Computer Systems Engineers/Architects</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer User Support Specialists"){echo "selected";} ?> value="Computer User Support Specialists">Computer User Support Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer, Automated Teller, and Office Machine Repairers"){echo "selected";} ?> value="Computer, Automated Teller, and Office Machine Repairers">Computer, Automated Teller, and Office Machine Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Computer-Controlled Machine Tool Operators, Metal and Plastic"){echo "selected";} ?> value="Computer-Controlled Machine Tool Operators, Metal and Plastic">Computer-Controlled Machine Tool Operators, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Concierges"){echo "selected";} ?> value="Concierges">Concierges</option>
										<option <?php if($get_profile_details[0]['profession']=="Conservation Scientists"){echo "selected";} ?> value="Conservation Scientists">Conservation Scientists</option>
										<option <?php if($get_profile_details[0]['profession']=="Construction and Building Inspectors"){echo "selected";} ?> value="Construction and Building Inspectors">Construction and Building Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Construction and Related Workers, All Other"){echo "selected";} ?> value="Construction and Related Workers, All Other">Construction and Related Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Construction Carpenters"){echo "selected";} ?> value="Construction Carpenters">Construction Carpenters</option>
										<option <?php if($get_profile_details[0]['profession']=="Construction Drillers"){echo "selected";} ?> value="Construction Drillers">Construction Drillers</option>
										<option <?php if($get_profile_details[0]['profession']=="Construction Laborers"){echo "selected";} ?> value="Construction Laborers">Construction Laborers</option>
										<option <?php if($get_profile_details[0]['profession']=="Construction Managers"){echo "selected";} ?> value="Construction Managers">Construction Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Continuous Mining Machine Operators"){echo "selected";} ?> value="Continuous Mining Machine Operators">Continuous Mining Machine Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Control and Valve Installers and Repairers, Except Mechanical Door"){echo "selected";} ?> value="Control and Valve Installers and Repairers, Except Mechanical Door">Control and Valve Installers and Repairers, Except Mechanical Door</option>
										<option <?php if($get_profile_details[0]['profession']=="Conveyor Operators and Tenders"){echo "selected";} ?> value="Conveyor Operators and Tenders">Conveyor Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Cooks, All Other"){echo "selected";} ?> value="Cooks, All Other">Cooks, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Cooks, Fast Food"){echo "selected";} ?> value="Cooks, Fast Food">Cooks, Fast Food</option>
										<option <?php if($get_profile_details[0]['profession']=="Cooks, Institution and Cafeteria"){echo "selected";} ?> value="Cooks, Institution and Cafeteria">Cooks, Institution and Cafeteria</option>
										<option <?php if($get_profile_details[0]['profession']=="Cooks, Private Household"){echo "selected";} ?> value="Cooks, Private Household">Cooks, Private Household</option>
										<option <?php if($get_profile_details[0]['profession']=="Cooks, Restaurant"){echo "selected";} ?> value="Cooks, Restaurant">Cooks, Restaurant</option>
										<option <?php if($get_profile_details[0]['profession']=="Cooks, Short Order"){echo "selected";} ?> value="Cooks, Short Order">Cooks, Short Order</option>
										<option <?php if($get_profile_details[0]['profession']=="Cooling and Freezing Equipment Operators and Tenders"){echo "selected";} ?> value="Cooling and Freezing Equipment Operators and Tenders">Cooling and Freezing Equipment Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Copy Writers"){echo "selected";} ?> value="Copy Writers">Copy Writers</option>
										<option <?php if($get_profile_details[0]['profession']=="Coroners"){echo "selected";} ?> value="Coroners">Coroners</option>
										<option <?php if($get_profile_details[0]['profession']=="Correctional Officers and Jailers"){echo "selected";} ?> value="Correctional Officers and Jailers">Correctional Officers and Jailers</option>
										<option <?php if($get_profile_details[0]['profession']=="Correspondence Clerks"){echo "selected";} ?> value="Correspondence Clerks">Correspondence Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Cost Estimators"){echo "selected";} ?> value="Cost Estimators">Cost Estimators</option>
										<option <?php if($get_profile_details[0]['profession']=="Costume Attendants"){echo "selected";} ?> value="Costume Attendants">Costume Attendants</option>
										<option <?php if($get_profile_details[0]['profession']=="Counseling Psychologists"){echo "selected";} ?> value="Counseling Psychologists">Counseling Psychologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Counselors, All Other"){echo "selected";} ?> value="Counselors, All Other">Counselors, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Counter and Rental Clerks"){echo "selected";} ?> value="Counter and Rental Clerks">Counter and Rental Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Counter Attendants, Cafeteria, Food Concession, and Coffee Shop"){echo "selected";} ?> value="Counter Attendants, Cafeteria, Food Concession, and Coffee Shop">Counter Attendants, Cafeteria, Food Concession, and Coffee Shop</option>
										<option <?php if($get_profile_details[0]['profession']=="Couriers and Messengers"){echo "selected";} ?> value="Couriers and Messengers">Couriers and Messengers</option>
										<option <?php if($get_profile_details[0]['profession']=="Court Clerks"){echo "selected";} ?> value="Court Clerks">Court Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Court Reporters"){echo "selected";} ?> value="Court Reporters">Court Reporters</option>
										<option <?php if($get_profile_details[0]['profession']=="Court, Municipal, and License Clerks"){echo "selected";} ?> value="Court, Municipal, and License Clerks">Court, Municipal, and License Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Craft Artists"){echo "selected";} ?> value="Craft Artists">Craft Artists</option>
										<option <?php if($get_profile_details[0]['profession']=="Crane and Tower Operators"){echo "selected";} ?> value="Crane and Tower Operators">Crane and Tower Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Creative Writers"){echo "selected";} ?> value="Creative Writers">Creative Writers</option>
										<option <?php if($get_profile_details[0]['profession']=="Credit Analysts"){echo "selected";} ?> value="Credit Analysts">Credit Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Credit Authorizers"){echo "selected";} ?> value="Credit Authorizers">Credit Authorizers</option>
										<option <?php if($get_profile_details[0]['profession']=="Credit Authorizers, Checkers, and Clerks"){echo "selected";} ?> value="Credit Authorizers, Checkers, and Clerks">Credit Authorizers, Checkers, and Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Credit Checkers"){echo "selected";} ?> value="Credit Checkers">Credit Checkers</option>
										<option <?php if($get_profile_details[0]['profession']=="Criminal Investigators and Special Agents"){echo "selected";} ?> value="Criminal Investigators and Special Agents">Criminal Investigators and Special Agents</option>
										<option <?php if($get_profile_details[0]['profession']=="Criminal Justice and Law Enforcement Teachers, Postsecondary"){echo "selected";} ?> value="Criminal Justice and Law Enforcement Teachers, Postsecondary">Criminal Justice and Law Enforcement Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Critical Care Nurses"){echo "selected";} ?> value="Critical Care Nurses">Critical Care Nurses</option>
										<option <?php if($get_profile_details[0]['profession']=="Crossing Guards"){echo "selected";} ?> value="Crossing Guards">Crossing Guards</option>
										<option <?php if($get_profile_details[0]['profession']=="Crushing, Grinding, and Polishing Machine Setters, Operators, and Tenders"){echo "selected";} ?> value="Crushing, Grinding, and Polishing Machine Setters, Operators, and Tenders">Crushing, Grinding, and Polishing Machine Setters, Operators, and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Curators"){echo "selected";} ?> value="Curators">Curators</option>
										<option <?php if($get_profile_details[0]['profession']=="Custom Tailors"){echo "selected";} ?> value="Custom Tailors">Custom Tailors</option>
										<option <?php if($get_profile_details[0]['profession']=="Customer Service Representatives"){echo "selected";} ?> value="Customer Service Representatives">Customer Service Representatives</option>
										<option <?php if($get_profile_details[0]['profession']=="Customer Service Representatives, Utilities"){echo "selected";} ?> value="Customer Service Representatives, Utilities">Customer Service Representatives, Utilities</option>
										<option <?php if($get_profile_details[0]['profession']=="Customs Brokers"){echo "selected";} ?> value="Customs Brokers">Customs Brokers</option>
										<option <?php if($get_profile_details[0]['profession']=="Cutters and Trimmers, Hand"){echo "selected";} ?> value="Cutters and Trimmers, Hand">Cutters and Trimmers, Hand</option>
										<option <?php if($get_profile_details[0]['profession']=="Cutting and Slicing Machine Operators and Tenders"){echo "selected";} ?> value="Cutting and Slicing Machine Operators and Tenders">Cutting and Slicing Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Cutting and Slicing Machine Setters, Operators, and Tenders"){echo "selected";} ?> value="Cutting and Slicing Machine Setters, Operators, and Tenders">Cutting and Slicing Machine Setters, Operators, and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Cutting, Punching, and Press Machine Setters, Operators, and Tenders, Metal and Plastic"){echo "selected";} ?> value="Cutting, Punching, and Press Machine Setters, Operators, and Tenders, Metal and Plastic">Cutting, Punching, and Press Machine Setters, Operators, and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Cytogenetic Technologists"){echo "selected";} ?> value="Cytogenetic Technologists">Cytogenetic Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Cytotechnologists"){echo "selected";} ?> value="Cytotechnologists">Cytotechnologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Dancers"){echo "selected";} ?> value="Dancers">Dancers</option>
										<option <?php if($get_profile_details[0]['profession']=="Data Entry Keyers"){echo "selected";} ?> value="Data Entry Keyers">Data Entry Keyers</option>
										<option <?php if($get_profile_details[0]['profession']=="Data Processing Equipment Repairers"){echo "selected";} ?> value="Data Processing Equipment Repairers">Data Processing Equipment Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Data Warehousing Specialists"){echo "selected";} ?> value="Data Warehousing Specialists">Data Warehousing Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Database Administrator"){echo "selected";} ?> value="Database Administrator">Database Administrator</option>
										<option <?php if($get_profile_details[0]['profession']=="Database Administrators"){echo "selected";} ?> value="Database Administrators">Database Administrators</option>
										<option <?php if($get_profile_details[0]['profession']=="Database Architects"){echo "selected";} ?> value="Database Architects">Database Architects</option>
										<option <?php if($get_profile_details[0]['profession']=="Demonstrators and Product Promoters"){echo "selected";} ?> value="Demonstrators and Product Promoters">Demonstrators and Product Promoters</option>
										<option <?php if($get_profile_details[0]['profession']=="Dental Assistants"){echo "selected";} ?> value="Dental Assistants">Dental Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Dental Hygienists"){echo "selected";} ?> value="Dental Hygienists">Dental Hygienists</option>
										<option <?php if($get_profile_details[0]['profession']=="Dental Laboratory Technicians"){echo "selected";} ?> value="Dental Laboratory Technicians">Dental Laboratory Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Dentists, All Other Specialists"){echo "selected";} ?> value="Dentists, All Other Specialists">Dentists, All Other Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Dentists, General"){echo "selected";} ?> value="Dentists, General">Dentists, General</option>
										<option <?php if($get_profile_details[0]['profession']=="Dermatologists"){echo "selected";} ?> value="Dermatologists">Dermatologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Derrick Operators, Oil and Gas"){echo "selected";} ?> value="Derrick Operators, Oil and Gas">Derrick Operators, Oil and Gas</option>
										<option <?php if($get_profile_details[0]['profession']=="Design Printing Machine Setters and Set-Up Operators"){echo "selected";} ?> value="Design Printing Machine Setters and Set-Up Operators">Design Printing Machine Setters and Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Designers, All Other"){echo "selected";} ?> value="Designers, All Other">Designers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Desktop Publishers"){echo "selected";} ?> value="Desktop Publishers">Desktop Publishers</option>
										<option <?php if($get_profile_details[0]['profession']=="Detectives and Criminal Investigators"){echo "selected";} ?> value="Detectives and Criminal Investigators">Detectives and Criminal Investigators</option>
										<option <?php if($get_profile_details[0]['profession']=="Diagnostic Medical Sonographers"){echo "selected";} ?> value="Diagnostic Medical Sonographers">Diagnostic Medical Sonographers</option>
										<option <?php if($get_profile_details[0]['profession']=="Dietetic Technicians"){echo "selected";} ?> value="Dietetic Technicians">Dietetic Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Dietitians and Nutritionists"){echo "selected";} ?> value="Dietitians and Nutritionists">Dietitians and Nutritionists</option>
										<option <?php if($get_profile_details[0]['profession']=="Dining Room and Cafeteria Attendants and Bartender Helpers"){echo "selected";} ?> value="Dining Room and Cafeteria Attendants and Bartender Helpers">Dining Room and Cafeteria Attendants and Bartender Helpers</option>
										<option <?php if($get_profile_details[0]['profession']=="Directors- Stage, Motion Pictures, Television, and Radio"){echo "selected";} ?> value="Directors- Stage, Motion Pictures, Television, and Radio">Directors- Stage, Motion Pictures, Television, and Radio</option>
										<option <?php if($get_profile_details[0]['profession']=="Directors, Religious Activities and Education"){echo "selected";} ?> value="Directors, Religious Activities and Education">Directors, Religious Activities and Education</option>
										<option <?php if($get_profile_details[0]['profession']=="Directory Assistance Operators"){echo "selected";} ?> value="Directory Assistance Operators">Directory Assistance Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Dishwashers"){echo "selected";} ?> value="Dishwashers">Dishwashers</option>
										<option <?php if($get_profile_details[0]['profession']=="Dispatchers, Except Police, Fire, and Ambulance"){echo "selected";} ?> value="Dispatchers, Except Police, Fire, and Ambulance">Dispatchers, Except Police, Fire, and Ambulance</option>
										<option <?php if($get_profile_details[0]['profession']=="Distance Learning Coordinators"){echo "selected";} ?> value="Distance Learning Coordinators">Distance Learning Coordinators</option>
										<option <?php if($get_profile_details[0]['profession']=="Document Management Specialists"){echo "selected";} ?> value="Document Management Specialists">Document Management Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Door-To-Door Sales Workers, News and Street Vendors, and Related Workers"){echo "selected";} ?> value="Door-To-Door Sales Workers, News and Street Vendors, and Related Workers">Door-To-Door Sales Workers, News and Street Vendors, and Related Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Dot Etchers"){echo "selected";} ?> value="Dot Etchers">Dot Etchers</option>
										<option <?php if($get_profile_details[0]['profession']=="Drafters, All Other"){echo "selected";} ?> value="Drafters, All Other">Drafters, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Dragline Operators"){echo "selected";} ?> value="Dragline Operators">Dragline Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Dredge Operators"){echo "selected";} ?> value="Dredge Operators">Dredge Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Drilling and Boring Machine Tool Setters, Operators, and Tenders, Metal and Plastic"){echo "selected";} ?> value="Drilling and Boring Machine Tool Setters, Operators, and Tenders, Metal and Plastic">Drilling and Boring Machine Tool Setters, Operators, and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Driver-Sales Workers"){echo "selected";} ?> value="Driver-Sales Workers">Driver-Sales Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Drywall and Ceiling Tile Installers"){echo "selected";} ?> value="Drywall and Ceiling Tile Installers">Drywall and Ceiling Tile Installers</option>
										<option <?php if($get_profile_details[0]['profession']=="Drywall Installers"){echo "selected";} ?> value="Drywall Installers">Drywall Installers</option>
										<option <?php if($get_profile_details[0]['profession']=="Duplicating Machine Operators"){echo "selected";} ?> value="Duplicating Machine Operators">Duplicating Machine Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Earth Drillers, Except Oil and Gas"){echo "selected";} ?> value="Earth Drillers, Except Oil and Gas">Earth Drillers, Except Oil and Gas</option>
										<option <?php if($get_profile_details[0]['profession']=="Economics Teachers, Postsecondary"){echo "selected";} ?> value="Economics Teachers, Postsecondary">Economics Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Economists"){echo "selected";} ?> value="Economists">Economists</option>
										<option <?php if($get_profile_details[0]['profession']=="Editors"){echo "selected";} ?> value="Editors">Editors</option>
										<option <?php if($get_profile_details[0]['profession']=="Education Administrators, All Other"){echo "selected";} ?> value="Education Administrators, All Other">Education Administrators, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Education Administrators, Elementary and Secondary School"){echo "selected";} ?> value="Education Administrators, Elementary and Secondary School">Education Administrators, Elementary and Secondary School</option>
										<option <?php if($get_profile_details[0]['profession']=="Education Administrators, Postsecondary"){echo "selected";} ?> value="Education Administrators, Postsecondary">Education Administrators, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Education Administrators, Preschool and Child Care Center--Program"){echo "selected";} ?> value="Education Administrators, Preschool and Child Care Center--Program">Education Administrators, Preschool and Child Care Center--Program</option>
										<option <?php if($get_profile_details[0]['profession']=="Education Teachers, Postsecondary"){echo "selected";} ?> value="Education Teachers, Postsecondary">Education Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Education, Training, and Library Workers, All Other"){echo "selected";} ?> value="Education, Training, and Library Workers, All Other">Education, Training, and Library Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Educational Psychologists"){echo "selected";} ?> value="Educational Psychologists">Educational Psychologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Educational, Vocational, and School Counselors"){echo "selected";} ?> value="Educational, Vocational, and School Counselors">Educational, Vocational, and School Counselors</option>
										<option <?php if($get_profile_details[0]['profession']=="Electric Home Appliance and Power Tool Repairers"){echo "selected";} ?> value="Electric Home Appliance and Power Tool Repairers">Electric Home Appliance and Power Tool Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Electric Meter Installers and Repairers"){echo "selected";} ?> value="Electric Meter Installers and Repairers">Electric Meter Installers and Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Electric Motor and Switch Assemblers and Repairers"){echo "selected";} ?> value="Electric Motor and Switch Assemblers and Repairers">Electric Motor and Switch Assemblers and Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Electric Motor, Power Tool, and Related Repairers"){echo "selected";} ?> value="Electric Motor, Power Tool, and Related Repairers">Electric Motor, Power Tool, and Related Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrical and Electronic Engineering Technicians"){echo "selected";} ?> value="Electrical and Electronic Engineering Technicians">Electrical and Electronic Engineering Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrical and Electronic Equipment Assemblers"){echo "selected";} ?> value="Electrical and Electronic Equipment Assemblers">Electrical and Electronic Equipment Assemblers</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrical and Electronic Inspectors and Testers"){echo "selected";} ?> value="Electrical and Electronic Inspectors and Testers">Electrical and Electronic Inspectors and Testers</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrical and Electronics Drafters"){echo "selected";} ?> value="Electrical and Electronics Drafters">Electrical and Electronics Drafters</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrical and Electronics Installers and Repairers, Transportation Equipment"){echo "selected";} ?> value="Electrical and Electronics Installers and Repairers, Transportation Equipment">Electrical and Electronics Installers and Repairers, Transportation Equipment</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrical and Electronics Repairers, Commercial and Industrial Equipment"){echo "selected";} ?> value="Electrical and Electronics Repairers, Commercial and Industrial Equipment">Electrical and Electronics Repairers, Commercial and Industrial Equipment</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrical and Electronics Repairers, Powerhouse, Substation, and Relay"){echo "selected";} ?> value="Electrical and Electronics Repairers, Powerhouse, Substation, and Relay">Electrical and Electronics Repairers, Powerhouse, Substation, and Relay</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrical Drafters"){echo "selected";} ?> value="Electrical Drafters">Electrical Drafters</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrical Engineering Technicians"){echo "selected";} ?> value="Electrical Engineering Technicians">Electrical Engineering Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrical Engineering Technologists"){echo "selected";} ?> value="Electrical Engineering Technologists">Electrical Engineering Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrical Engineers"){echo "selected";} ?> value="Electrical Engineers">Electrical Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrical Parts Reconditioners"){echo "selected";} ?> value="Electrical Parts Reconditioners">Electrical Parts Reconditioners</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrical Power-Line Installers and Repairers"){echo "selected";} ?> value="Electrical Power-Line Installers and Repairers">Electrical Power-Line Installers and Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Electricians"){echo "selected";} ?> value="Electricians">Electricians</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrolytic Plating and Coating Machine Operators and Tenders, Metal and Plastic"){echo "selected";} ?> value="Electrolytic Plating and Coating Machine Operators and Tenders, Metal and Plastic">Electrolytic Plating and Coating Machine Operators and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrolytic Plating and Coating Machine Setters and Set-Up Operators, Metal and Plastic"){echo "selected";} ?> value="Electrolytic Plating and Coating Machine Setters and Set-Up Operators, Metal and Plastic">Electrolytic Plating and Coating Machine Setters and Set-Up Operators, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Electromechanical Engineering Technologists"){echo "selected";} ?> value="Electromechanical Engineering Technologists">Electromechanical Engineering Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Electromechanical Equipment Assemblers"){echo "selected";} ?> value="Electromechanical Equipment Assemblers">Electromechanical Equipment Assemblers</option>
										<option <?php if($get_profile_details[0]['profession']=="Electro-Mechanical Technicians"){echo "selected";} ?> value="Electro-Mechanical Technicians">Electro-Mechanical Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Electronic Drafters"){echo "selected";} ?> value="Electronic Drafters">Electronic Drafters</option>
										<option <?php if($get_profile_details[0]['profession']=="Electronic Equipment Installers and Repairers, Motor Vehicles"){echo "selected";} ?> value="Electronic Equipment Installers and Repairers, Motor Vehicles">Electronic Equipment Installers and Repairers, Motor Vehicles</option>
										<option <?php if($get_profile_details[0]['profession']=="Electronic Home Entertainment Equipment Installers and Repairers"){echo "selected";} ?> value="Electronic Home Entertainment Equipment Installers and Repairers">Electronic Home Entertainment Equipment Installers and Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Electronic Masking System Operators"){echo "selected";} ?> value="Electronic Masking System Operators">Electronic Masking System Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Electronics Engineering Technicians"){echo "selected";} ?> value="Electronics Engineering Technicians">Electronics Engineering Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Electronics Engineering Technologists"){echo "selected";} ?> value="Electronics Engineering Technologists">Electronics Engineering Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Electronics Engineers, Except Computer"){echo "selected";} ?> value="Electronics Engineers, Except Computer">Electronics Engineers, Except Computer</option>
										<option <?php if($get_profile_details[0]['profession']=="Electrotypers and Stereotypers"){echo "selected";} ?> value="Electrotypers and Stereotypers">Electrotypers and Stereotypers</option>
										<option <?php if($get_profile_details[0]['profession']=="Elementary School Teachers, Except Special Education"){echo "selected";} ?> value="Elementary School Teachers, Except Special Education">Elementary School Teachers, Except Special Education</option>
										<option <?php if($get_profile_details[0]['profession']=="Elevator Installers and Repairers"){echo "selected";} ?> value="Elevator Installers and Repairers">Elevator Installers and Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Eligibility Interviewers, Government Programs"){echo "selected";} ?> value="Eligibility Interviewers, Government Programs">Eligibility Interviewers, Government Programs</option>
										<option <?php if($get_profile_details[0]['profession']=="Embalmers"){echo "selected";} ?> value="Embalmers">Embalmers</option>
										<option <?php if($get_profile_details[0]['profession']=="Embossing Machine Set-Up Operators"){echo "selected";} ?> value="Embossing Machine Set-Up Operators">Embossing Machine Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Emergency Management Directors"){echo "selected";} ?> value="Emergency Management Directors">Emergency Management Directors</option>
										<option <?php if($get_profile_details[0]['profession']=="Emergency Management Specialists"){echo "selected";} ?> value="Emergency Management Specialists">Emergency Management Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Emergency Medical Technicians and Paramedics"){echo "selected";} ?> value="Emergency Medical Technicians and Paramedics">Emergency Medical Technicians and Paramedics</option>
										<option <?php if($get_profile_details[0]['profession']=="Employment Interviewers, Private or Public Employment Service"){echo "selected";} ?> value="Employment Interviewers, Private or Public Employment Service">Employment Interviewers, Private or Public Employment Service</option>
										<option <?php if($get_profile_details[0]['profession']=="Employment, Recruitment, and Placement Specialists"){echo "selected";} ?> value="Employment, Recruitment, and Placement Specialists">Employment, Recruitment, and Placement Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Endoscopy Technicians"){echo "selected";} ?> value="Endoscopy Technicians">Endoscopy Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Energy Auditors"){echo "selected";} ?> value="Energy Auditors">Energy Auditors</option>
										<option <?php if($get_profile_details[0]['profession']=="Energy Brokers"){echo "selected";} ?> value="Energy Brokers">Energy Brokers</option>
										<option <?php if($get_profile_details[0]['profession']=="Energy Engineers"){echo "selected";} ?> value="Energy Engineers">Energy Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Engine and Other Machine Assemblers"){echo "selected";} ?> value="Engine and Other Machine Assemblers">Engine and Other Machine Assemblers</option>
										<option <?php if($get_profile_details[0]['profession']=="Engineering Managers"){echo "selected";} ?> value="Engineering Managers">Engineering Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Engineering Teachers, Postsecondary"){echo "selected";} ?> value="Engineering Teachers, Postsecondary">Engineering Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Engineering Technicians, Except Drafters, All Other"){echo "selected";} ?> value="Engineering Technicians, Except Drafters, All Other">Engineering Technicians, Except Drafters, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Engineers, All Other"){echo "selected";} ?> value="Engineers, All Other">Engineers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="English Language and Literature Teachers, Postsecondary"){echo "selected";} ?> value="English Language and Literature Teachers, Postsecondary">English Language and Literature Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Engraver Set-Up Operators"){echo "selected";} ?> value="Engraver Set-Up Operators">Engraver Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Engravers, Hand"){echo "selected";} ?> value="Engravers, Hand">Engravers, Hand</option>
										<option <?php if($get_profile_details[0]['profession']=="Engravers--Carvers"){echo "selected";} ?> value="Engravers--Carvers">Engravers--Carvers</option>
										<option <?php if($get_profile_details[0]['profession']=="Entertainers and Performers, Sports and Related Workers, All Other"){echo "selected";} ?> value="Entertainers and Performers, Sports and Related Workers, All Other">Entertainers and Performers, Sports and Related Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Entertainment Attendants and Related Workers, All Other"){echo "selected";} ?> value="Entertainment Attendants and Related Workers, All Other">Entertainment Attendants and Related Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Environmental Compliance Inspectors"){echo "selected";} ?> value="Environmental Compliance Inspectors">Environmental Compliance Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Environmental Economists"){echo "selected";} ?> value="Environmental Economists">Environmental Economists</option>
										<option <?php if($get_profile_details[0]['profession']=="Environmental Engineering Technicians"){echo "selected";} ?> value="Environmental Engineering Technicians">Environmental Engineering Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Environmental Engineers"){echo "selected";} ?> value="Environmental Engineers">Environmental Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Environmental Restoration Planners"){echo "selected";} ?> value="Environmental Restoration Planners">Environmental Restoration Planners</option>
										<option <?php if($get_profile_details[0]['profession']=="Environmental Science and Protection Technicians, Including Health"){echo "selected";} ?> value="Environmental Science and Protection Technicians, Including Health">Environmental Science and Protection Technicians, Including Health</option>
										<option <?php if($get_profile_details[0]['profession']=="Environmental Science Teachers, Postsecondary"){echo "selected";} ?> value="Environmental Science Teachers, Postsecondary">Environmental Science Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Environmental Scientists and Specialists, Including Health"){echo "selected";} ?> value="Environmental Scientists and Specialists, Including Health">Environmental Scientists and Specialists, Including Health</option>
										<option <?php if($get_profile_details[0]['profession']=="Epidemiologists"){echo "selected";} ?> value="Epidemiologists">Epidemiologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Equal Opportunity Representatives and Officers"){echo "selected";} ?> value="Equal Opportunity Representatives and Officers">Equal Opportunity Representatives and Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="Etchers"){echo "selected";} ?> value="Etchers">Etchers</option>
										<option <?php if($get_profile_details[0]['profession']=="Etchers and Engravers"){echo "selected";} ?> value="Etchers and Engravers">Etchers and Engravers</option>
										<option <?php if($get_profile_details[0]['profession']=="Etchers, Hand"){echo "selected";} ?> value="Etchers, Hand">Etchers, Hand</option>
										<option <?php if($get_profile_details[0]['profession']=="Excavating and Loading Machine and Dragline Operators"){echo "selected";} ?> value="Excavating and Loading Machine and Dragline Operators">Excavating and Loading Machine and Dragline Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Excavating and Loading Machine Operators"){echo "selected";} ?> value="Excavating and Loading Machine Operators">Excavating and Loading Machine Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Executive Secretaries and Administrative Assistants"){echo "selected";} ?> value="Executive Secretaries and Administrative Assistants">Executive Secretaries and Administrative Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Exercise Physiologists"){echo "selected";} ?> value="Exercise Physiologists">Exercise Physiologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Exhibit Designers"){echo "selected";} ?> value="Exhibit Designers">Exhibit Designers</option>
										<option <?php if($get_profile_details[0]['profession']=="Explosives Workers, Ordnance Handling Experts, and Blasters"){echo "selected";} ?> value="Explosives Workers, Ordnance Handling Experts, and Blasters">Explosives Workers, Ordnance Handling Experts, and Blasters</option>
										<option <?php if($get_profile_details[0]['profession']=="Extraction Workers, All Other"){echo "selected";} ?> value="Extraction Workers, All Other">Extraction Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Extruding and Drawing Machine Setters, Operators, and Tenders, Metal and Plastic"){echo "selected";} ?> value="Extruding and Drawing Machine Setters, Operators, and Tenders, Metal and Plastic">Extruding and Drawing Machine Setters, Operators, and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Extruding and Forming Machine Operators and Tenders, Synthetic or Glass Fibers"){echo "selected";} ?> value="Extruding and Forming Machine Operators and Tenders, Synthetic or Glass Fibers">Extruding and Forming Machine Operators and Tenders, Synthetic or Glass Fibers</option>
										<option <?php if($get_profile_details[0]['profession']=="Extruding and Forming Machine Setters, Operators, and Tenders, Synthetic and Glass Fibers"){echo "selected";} ?> value="Extruding and Forming Machine Setters, Operators, and Tenders, Synthetic and Glass Fibers">Extruding and Forming Machine Setters, Operators, and Tenders, Synthetic and Glass Fibers</option>
										<option <?php if($get_profile_details[0]['profession']=="Extruding, Forming, Pressing, and Compacting Machine Operators and Tenders"){echo "selected";} ?> value="Extruding, Forming, Pressing, and Compacting Machine Operators and Tenders">Extruding, Forming, Pressing, and Compacting Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Extruding, Forming, Pressing, and Compacting Machine Setters and Set-Up Operators"){echo "selected";} ?> value="Extruding, Forming, Pressing, and Compacting Machine Setters and Set-Up Operators">Extruding, Forming, Pressing, and Compacting Machine Setters and Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Extruding, Forming, Pressing, and Compacting Machine Setters, Operators, and Tenders"){echo "selected";} ?> value="Extruding, Forming, Pressing, and Compacting Machine Setters, Operators, and Tenders">Extruding, Forming, Pressing, and Compacting Machine Setters, Operators, and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Fabric and Apparel Patternmakers"){echo "selected";} ?> value="Fabric and Apparel Patternmakers">Fabric and Apparel Patternmakers</option>
										<option <?php if($get_profile_details[0]['profession']=="Fabric Menders, Except Garment"){echo "selected";} ?> value="Fabric Menders, Except Garment">Fabric Menders, Except Garment</option>
										<option <?php if($get_profile_details[0]['profession']=="Fallers"){echo "selected";} ?> value="Fallers">Fallers</option>
										<option <?php if($get_profile_details[0]['profession']=="Family and General Practitioners"){echo "selected";} ?> value="Family and General Practitioners">Family and General Practitioners</option>
										<option <?php if($get_profile_details[0]['profession']=="Farm and Home Management Advisors"){echo "selected";} ?> value="Farm and Home Management Advisors">Farm and Home Management Advisors</option>
										<option <?php if($get_profile_details[0]['profession']=="Farm and Ranch Managers"){echo "selected";} ?> value="Farm and Ranch Managers">Farm and Ranch Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Farm Equipment Mechanics"){echo "selected";} ?> value="Farm Equipment Mechanics">Farm Equipment Mechanics</option>
										<option <?php if($get_profile_details[0]['profession']=="Farm Labor Contractor"){echo "selected";} ?> value="Farm Labor Contractor">Farm Labor Contractor</option>
										<option <?php if($get_profile_details[0]['profession']=="Farm Labor Contractors"){echo "selected";} ?> value="Farm Labor Contractors">Farm Labor Contractors</option>
										<option <?php if($get_profile_details[0]['profession']=="Farm, Ranch, and Other Agricultural Managers"){echo "selected";} ?> value="Farm, Ranch, and Other Agricultural Managers">Farm, Ranch, and Other Agricultural Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Farmers and Ranchers"){echo "selected";} ?> value="Farmers and Ranchers">Farmers and Ranchers</option>
										<option <?php if($get_profile_details[0]['profession']=="Farmworkers and Laborers, Crop, Nursery, and Greenhouse"){echo "selected";} ?> value="Farmworkers and Laborers, Crop, Nursery, and Greenhouse">Farmworkers and Laborers, Crop, Nursery, and Greenhouse</option>
										<option <?php if($get_profile_details[0]['profession']=="Farmworkers, Farm and Ranch Animals"){echo "selected";} ?> value="Farmworkers, Farm and Ranch Animals">Farmworkers, Farm and Ranch Animals</option>
										<option <?php if($get_profile_details[0]['profession']=="Fashion Designers"){echo "selected";} ?> value="Fashion Designers">Fashion Designers</option>
										<option <?php if($get_profile_details[0]['profession']=="Fence Erectors"){echo "selected";} ?> value="Fence Erectors">Fence Erectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Fiber Product Cutting Machine Setters and Set-Up Operators"){echo "selected";} ?> value="Fiber Product Cutting Machine Setters and Set-Up Operators">Fiber Product Cutting Machine Setters and Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Fiberglass Laminators and Fabricators"){echo "selected";} ?> value="Fiberglass Laminators and Fabricators">Fiberglass Laminators and Fabricators</option>
										<option <?php if($get_profile_details[0]['profession']=="File Clerks"){echo "selected";} ?> value="File Clerks">File Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Film and Video Editors"){echo "selected";} ?> value="Film and Video Editors">Film and Video Editors</option>
										<option <?php if($get_profile_details[0]['profession']=="Film Laboratory Technicians"){echo "selected";} ?> value="Film Laboratory Technicians">Film Laboratory Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Financial Analysts"){echo "selected";} ?> value="Financial Analysts">Financial Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Financial Examiners"){echo "selected";} ?> value="Financial Examiners">Financial Examiners</option>
										<option <?php if($get_profile_details[0]['profession']=="Financial Managers"){echo "selected";} ?> value="Financial Managers">Financial Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Financial Managers, Branch or Department"){echo "selected";} ?> value="Financial Managers, Branch or Department">Financial Managers, Branch or Department</option>
										<option <?php if($get_profile_details[0]['profession']=="Financial Quantitative Analysts"){echo "selected";} ?> value="Financial Quantitative Analysts">Financial Quantitative Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Financial Specialists, All Other"){echo "selected";} ?> value="Financial Specialists, All Other">Financial Specialists, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Fine Artists, Including Painters, Sculptors, and Illustrators"){echo "selected";} ?> value="Fine Artists, Including Painters, Sculptors, and Illustrators">Fine Artists, Including Painters, Sculptors, and Illustrators</option>
										<option <?php if($get_profile_details[0]['profession']=="Fire Fighters"){echo "selected";} ?> value="Fire Fighters">Fire Fighters</option>
										<option <?php if($get_profile_details[0]['profession']=="Fire Inspectors"){echo "selected";} ?> value="Fire Inspectors">Fire Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Fire Inspectors and Investigators"){echo "selected";} ?> value="Fire Inspectors and Investigators">Fire Inspectors and Investigators</option>
										<option <?php if($get_profile_details[0]['profession']=="Fire Investigators"){echo "selected";} ?> value="Fire Investigators">Fire Investigators</option>
										<option <?php if($get_profile_details[0]['profession']=="Fire-Prevention and Protection Engineers"){echo "selected";} ?> value="Fire-Prevention and Protection Engineers">Fire-Prevention and Protection Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors and Manager-Supervisors - Agricultural Crop Workers"){echo "selected";} ?> value="First-Line Supervisors and Manager-Supervisors - Agricultural Crop Workers">First-Line Supervisors and Manager-Supervisors - Agricultural Crop Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors and Manager-Supervisors - Animal Care Workers, Except Livestock"){echo "selected";} ?> value="First-Line Supervisors and Manager-Supervisors - Animal Care Workers, Except Livestock">First-Line Supervisors and Manager-Supervisors - Animal Care Workers, Except Livestock</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors and Manager-Supervisors - Animal Husbandry Workers"){echo "selected";} ?> value="First-Line Supervisors and Manager-Supervisors - Animal Husbandry Workers">First-Line Supervisors and Manager-Supervisors - Animal Husbandry Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors and Manager-Supervisors - Fishery Workers"){echo "selected";} ?> value="First-Line Supervisors and Manager-Supervisors - Fishery Workers">First-Line Supervisors and Manager-Supervisors - Fishery Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors and Manager-Supervisors - Horticultural Workers"){echo "selected";} ?> value="First-Line Supervisors and Manager-Supervisors - Horticultural Workers">First-Line Supervisors and Manager-Supervisors - Horticultural Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors and Manager-Supervisors - Landscaping Workers"){echo "selected";} ?> value="First-Line Supervisors and Manager-Supervisors - Landscaping Workers">First-Line Supervisors and Manager-Supervisors - Landscaping Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors and Manager-Supervisors - Logging Workers"){echo "selected";} ?> value="First-Line Supervisors and Manager-Supervisors - Logging Workers">First-Line Supervisors and Manager-Supervisors - Logging Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors and Manager-Supervisors- Construction Trades Workers"){echo "selected";} ?> value="First-Line Supervisors and Manager-Supervisors- Construction Trades Workers">First-Line Supervisors and Manager-Supervisors- Construction Trades Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors and Manager-Supervisors- Extractive Workers"){echo "selected";} ?> value="First-Line Supervisors and Manager-Supervisors- Extractive Workers">First-Line Supervisors and Manager-Supervisors- Extractive Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors of Agricultural Crop and Horticultural Workers"){echo "selected";} ?> value="First-Line Supervisors of Agricultural Crop and Horticultural Workers">First-Line Supervisors of Agricultural Crop and Horticultural Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors of Animal Husbandry and Animal Care Workers"){echo "selected";} ?> value="First-Line Supervisors of Animal Husbandry and Animal Care Workers">First-Line Supervisors of Animal Husbandry and Animal Care Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors, Administrative Support"){echo "selected";} ?> value="First-Line Supervisors, Administrative Support">First-Line Supervisors, Administrative Support</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors, Customer Service"){echo "selected";} ?> value="First-Line Supervisors, Customer Service">First-Line Supervisors, Customer Service</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Air Crew Members"){echo "selected";} ?> value="First-Line Supervisors-Managers of Air Crew Members">First-Line Supervisors-Managers of Air Crew Members</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of All Other Tactical Operations Specialists"){echo "selected";} ?> value="First-Line Supervisors-Managers of All Other Tactical Operations Specialists">First-Line Supervisors-Managers of All Other Tactical Operations Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Construction Trades and Extraction Workers"){echo "selected";} ?> value="First-Line Supervisors-Managers of Construction Trades and Extraction Workers">First-Line Supervisors-Managers of Construction Trades and Extraction Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Correctional Officers"){echo "selected";} ?> value="First-Line Supervisors-Managers of Correctional Officers">First-Line Supervisors-Managers of Correctional Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Farming, Fishing, and Forestry Workers"){echo "selected";} ?> value="First-Line Supervisors-Managers of Farming, Fishing, and Forestry Workers">First-Line Supervisors-Managers of Farming, Fishing, and Forestry Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Fire Fighting and Prevention Workers"){echo "selected";} ?> value="First-Line Supervisors-Managers of Fire Fighting and Prevention Workers">First-Line Supervisors-Managers of Fire Fighting and Prevention Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Food Preparation and Serving Workers"){echo "selected";} ?> value="First-Line Supervisors-Managers of Food Preparation and Serving Workers">First-Line Supervisors-Managers of Food Preparation and Serving Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Helpers, Laborers, and Material Movers, Hand"){echo "selected";} ?> value="First-Line Supervisors-Managers of Helpers, Laborers, and Material Movers, Hand">First-Line Supervisors-Managers of Helpers, Laborers, and Material Movers, Hand</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Housekeeping and Janitorial Workers"){echo "selected";} ?> value="First-Line Supervisors-Managers of Housekeeping and Janitorial Workers">First-Line Supervisors-Managers of Housekeeping and Janitorial Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Landscaping, Lawn Service, and Groundskeeping Workers"){echo "selected";} ?> value="First-Line Supervisors-Managers of Landscaping, Lawn Service, and Groundskeeping Workers">First-Line Supervisors-Managers of Landscaping, Lawn Service, and Groundskeeping Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Mechanics, Installers, and Repairers"){echo "selected";} ?> value="First-Line Supervisors-Managers of Mechanics, Installers, and Repairers">First-Line Supervisors-Managers of Mechanics, Installers, and Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Non-Retail Sales Workers"){echo "selected";} ?> value="First-Line Supervisors-Managers of Non-Retail Sales Workers">First-Line Supervisors-Managers of Non-Retail Sales Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Office and Administrative Support Workers"){echo "selected";} ?> value="First-Line Supervisors-Managers of Office and Administrative Support Workers">First-Line Supervisors-Managers of Office and Administrative Support Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Personal Service Workers"){echo "selected";} ?> value="First-Line Supervisors-Managers of Personal Service Workers">First-Line Supervisors-Managers of Personal Service Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Police and Detectives"){echo "selected";} ?> value="First-Line Supervisors-Managers of Police and Detectives">First-Line Supervisors-Managers of Police and Detectives</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Production and Operating Workers"){echo "selected";} ?> value="First-Line Supervisors-Managers of Production and Operating Workers">First-Line Supervisors-Managers of Production and Operating Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Retail Sales Workers"){echo "selected";} ?> value="First-Line Supervisors-Managers of Retail Sales Workers">First-Line Supervisors-Managers of Retail Sales Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Transportation and Material-Moving Machine and Vehicle Operators"){echo "selected";} ?> value="First-Line Supervisors-Managers of Transportation and Material-Moving Machine and Vehicle Operators">First-Line Supervisors-Managers of Transportation and Material-Moving Machine and Vehicle Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers of Weapons Specialists--Crew Members"){echo "selected";} ?> value="First-Line Supervisors-Managers of Weapons Specialists--Crew Members">First-Line Supervisors-Managers of Weapons Specialists--Crew Members</option>
										<option <?php if($get_profile_details[0]['profession']=="First-Line Supervisors-Managers, Protective Service Workers, All Other"){echo "selected";} ?> value="First-Line Supervisors-Managers, Protective Service Workers, All Other">First-Line Supervisors-Managers, Protective Service Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Fish and Game Wardens"){echo "selected";} ?> value="Fish and Game Wardens">Fish and Game Wardens</option>
										<option <?php if($get_profile_details[0]['profession']=="Fish Hatchery Managers"){echo "selected";} ?> value="Fish Hatchery Managers">Fish Hatchery Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Fishers and Related Fishing Workers"){echo "selected";} ?> value="Fishers and Related Fishing Workers">Fishers and Related Fishing Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Fitness and Wellness Coordinators"){echo "selected";} ?> value="Fitness and Wellness Coordinators">Fitness and Wellness Coordinators</option>
										<option <?php if($get_profile_details[0]['profession']=="Fitness Trainers and Aerobics Instructors"){echo "selected";} ?> value="Fitness Trainers and Aerobics Instructors">Fitness Trainers and Aerobics Instructors</option>
										<option <?php if($get_profile_details[0]['profession']=="Fitters, Structural Metal- Precision"){echo "selected";} ?> value="Fitters, Structural Metal- Precision">Fitters, Structural Metal- Precision</option>
										<option <?php if($get_profile_details[0]['profession']=="Flight Attendant"){echo "selected";} ?> value="Flight Attendant">Flight Attendant</option>
										<option <?php if($get_profile_details[0]['profession']=="Flight Attendants"){echo "selected";} ?> value="Flight Attendants">Flight Attendants</option>
										<option <?php if($get_profile_details[0]['profession']=="Floor Layers, Except Carpet, Wood, and Hard Tiles"){echo "selected";} ?> value="Floor Layers, Except Carpet, Wood, and Hard Tiles">Floor Layers, Except Carpet, Wood, and Hard Tiles</option>
										<option <?php if($get_profile_details[0]['profession']=="Floor Sanders and Finishers"){echo "selected";} ?> value="Floor Sanders and Finishers">Floor Sanders and Finishers</option>
										<option <?php if($get_profile_details[0]['profession']=="Floral Designers"){echo "selected";} ?> value="Floral Designers">Floral Designers</option>
										<option <?php if($get_profile_details[0]['profession']=="Food and Tobacco Roasting, Baking, and Drying Machine Operators and Tenders"){echo "selected";} ?> value="Food and Tobacco Roasting, Baking, and Drying Machine Operators and Tenders">Food and Tobacco Roasting, Baking, and Drying Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Food Batchmakers"){echo "selected";} ?> value="Food Batchmakers">Food Batchmakers</option>
										<option <?php if($get_profile_details[0]['profession']=="Food Cooking Machine Operators and Tenders"){echo "selected";} ?> value="Food Cooking Machine Operators and Tenders">Food Cooking Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Food Preparation and Serving Related Workers, All Other"){echo "selected";} ?> value="Food Preparation and Serving Related Workers, All Other">Food Preparation and Serving Related Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Food Preparation Workers"){echo "selected";} ?> value="Food Preparation Workers">Food Preparation Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Food Science Technicians"){echo "selected";} ?> value="Food Science Technicians">Food Science Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Food Scientists and Technologists"){echo "selected";} ?> value="Food Scientists and Technologists">Food Scientists and Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Food Servers, Nonrestaurant"){echo "selected";} ?> value="Food Servers, Nonrestaurant">Food Servers, Nonrestaurant</option>
										<option <?php if($get_profile_details[0]['profession']=="Food Service Managers"){echo "selected";} ?> value="Food Service Managers">Food Service Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Foreign Language and Literature Teachers, Postsecondary"){echo "selected";} ?> value="Foreign Language and Literature Teachers, Postsecondary">Foreign Language and Literature Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Forensic Science Technicians"){echo "selected";} ?> value="Forensic Science Technicians">Forensic Science Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Forest and Conservation Technicians"){echo "selected";} ?> value="Forest and Conservation Technicians">Forest and Conservation Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Forest and Conservation Workers"){echo "selected";} ?> value="Forest and Conservation Workers">Forest and Conservation Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Forest Fire Fighters"){echo "selected";} ?> value="Forest Fire Fighters">Forest Fire Fighters</option>
										<option <?php if($get_profile_details[0]['profession']=="Forest Fire Fighting and Prevention Supervisors"){echo "selected";} ?> value="Forest Fire Fighting and Prevention Supervisors">Forest Fire Fighting and Prevention Supervisors</option>
										<option <?php if($get_profile_details[0]['profession']=="Forest Fire Inspectors and Prevention Specialists"){echo "selected";} ?> value="Forest Fire Inspectors and Prevention Specialists">Forest Fire Inspectors and Prevention Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Foresters"){echo "selected";} ?> value="Foresters">Foresters</option>
										<option <?php if($get_profile_details[0]['profession']=="Forestry and Conservation Science Teachers, Postsecondary"){echo "selected";} ?> value="Forestry and Conservation Science Teachers, Postsecondary">Forestry and Conservation Science Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Forging Machine Setters, Operators, and Tenders, Metal and Plastic"){echo "selected";} ?> value="Forging Machine Setters, Operators, and Tenders, Metal and Plastic">Forging Machine Setters, Operators, and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Foundry Mold and Coremakers"){echo "selected";} ?> value="Foundry Mold and Coremakers">Foundry Mold and Coremakers</option>
										<option <?php if($get_profile_details[0]['profession']=="Frame Wirers, Central Office"){echo "selected";} ?> value="Frame Wirers, Central Office">Frame Wirers, Central Office</option>
										<option <?php if($get_profile_details[0]['profession']=="Fraud Examiners, Investigators and Analysts"){echo "selected";} ?> value="Fraud Examiners, Investigators and Analysts">Fraud Examiners, Investigators and Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Freight and Cargo Inspectors"){echo "selected";} ?> value="Freight and Cargo Inspectors">Freight and Cargo Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Freight Forwarders"){echo "selected";} ?> value="Freight Forwarders">Freight Forwarders</option>
										<option <?php if($get_profile_details[0]['profession']=="Freight Inspectors"){echo "selected";} ?> value="Freight Inspectors">Freight Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Freight, Stock, and Material Movers, Hand"){echo "selected";} ?> value="Freight, Stock, and Material Movers, Hand">Freight, Stock, and Material Movers, Hand</option>
										<option <?php if($get_profile_details[0]['profession']=="Fuel Cell Engineers"){echo "selected";} ?> value="Fuel Cell Engineers">Fuel Cell Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Fuel Cell Technicians"){echo "selected";} ?> value="Fuel Cell Technicians">Fuel Cell Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Fundraisers"){echo "selected";} ?> value="Fundraisers">Fundraisers</option>
										<option <?php if($get_profile_details[0]['profession']=="Funeral Attendants"){echo "selected";} ?> value="Funeral Attendants">Funeral Attendants</option>
										<option <?php if($get_profile_details[0]['profession']=="Funeral Directors"){echo "selected";} ?> value="Funeral Directors">Funeral Directors</option>
										<option <?php if($get_profile_details[0]['profession']=="Furnace, Kiln, Oven, Drier, and Kettle Operators and Tenders"){echo "selected";} ?> value="Furnace, Kiln, Oven, Drier, and Kettle Operators and Tenders">Furnace, Kiln, Oven, Drier, and Kettle Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Furniture Finishers"){echo "selected";} ?> value="Furniture Finishers">Furniture Finishers</option>
										<option <?php if($get_profile_details[0]['profession']=="Gaming and Sports Book Writers and Runners"){echo "selected";} ?> value="Gaming and Sports Book Writers and Runners">Gaming and Sports Book Writers and Runners</option>
										<option <?php if($get_profile_details[0]['profession']=="Gaming Cage Workers"){echo "selected";} ?> value="Gaming Cage Workers">Gaming Cage Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Gaming Change Persons and Booth Cashiers"){echo "selected";} ?> value="Gaming Change Persons and Booth Cashiers">Gaming Change Persons and Booth Cashiers</option>
										<option <?php if($get_profile_details[0]['profession']=="Gaming Dealers"){echo "selected";} ?> value="Gaming Dealers">Gaming Dealers</option>
										<option <?php if($get_profile_details[0]['profession']=="Gaming Managers"){echo "selected";} ?> value="Gaming Managers">Gaming Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Gaming Service Workers, All Other"){echo "selected";} ?> value="Gaming Service Workers, All Other">Gaming Service Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Gaming Supervisors"){echo "selected";} ?> value="Gaming Supervisors">Gaming Supervisors</option>
										<option <?php if($get_profile_details[0]['profession']=="Gaming Surveillance Officers and Gaming Investigators"){echo "selected";} ?> value="Gaming Surveillance Officers and Gaming Investigators">Gaming Surveillance Officers and Gaming Investigators</option>
										<option <?php if($get_profile_details[0]['profession']=="Gas Appliance Repairers"){echo "selected";} ?> value="Gas Appliance Repairers">Gas Appliance Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Gas Compressor and Gas Pumping Station Operators"){echo "selected";} ?> value="Gas Compressor and Gas Pumping Station Operators">Gas Compressor and Gas Pumping Station Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Gas Compressor Operators"){echo "selected";} ?> value="Gas Compressor Operators">Gas Compressor Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Gas Distribution Plant Operators"){echo "selected";} ?> value="Gas Distribution Plant Operators">Gas Distribution Plant Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Gas Plant Operators"){echo "selected";} ?> value="Gas Plant Operators">Gas Plant Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Gas Processing Plant Operators"){echo "selected";} ?> value="Gas Processing Plant Operators">Gas Processing Plant Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Gas Pumping Station Operators"){echo "selected";} ?> value="Gas Pumping Station Operators">Gas Pumping Station Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Gaugers"){echo "selected";} ?> value="Gaugers">Gaugers</option>
										<option <?php if($get_profile_details[0]['profession']=="Gem and Diamond Workers"){echo "selected";} ?> value="Gem and Diamond Workers">Gem and Diamond Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="General and Operations Managers"){echo "selected";} ?> value="General and Operations Managers">General and Operations Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="General Farmworkers"){echo "selected";} ?> value="General Farmworkers">General Farmworkers</option>
										<option <?php if($get_profile_details[0]['profession']=="Genetic Counselors"){echo "selected";} ?> value="Genetic Counselors">Genetic Counselors</option>
										<option <?php if($get_profile_details[0]['profession']=="Geneticists"){echo "selected";} ?> value="Geneticists">Geneticists</option>
										<option <?php if($get_profile_details[0]['profession']=="Geodetic Surveyors"){echo "selected";} ?> value="Geodetic Surveyors">Geodetic Surveyors</option>
										<option <?php if($get_profile_details[0]['profession']=="Geographers"){echo "selected";} ?> value="Geographers">Geographers</option>
										<option <?php if($get_profile_details[0]['profession']=="Geographic Information Systems Technicians"){echo "selected";} ?> value="Geographic Information Systems Technicians">Geographic Information Systems Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Geography Teachers, Postsecondary"){echo "selected";} ?> value="Geography Teachers, Postsecondary">Geography Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Geological and Petroleum Technicians"){echo "selected";} ?> value="Geological and Petroleum Technicians">Geological and Petroleum Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Geological Data Technicians"){echo "selected";} ?> value="Geological Data Technicians">Geological Data Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Geological Sample Test Technicians"){echo "selected";} ?> value="Geological Sample Test Technicians">Geological Sample Test Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Geologists"){echo "selected";} ?> value="Geologists">Geologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Geoscientists, Except Hydrologists and Geographers"){echo "selected";} ?> value="Geoscientists, Except Hydrologists and Geographers">Geoscientists, Except Hydrologists and Geographers</option>
										<option <?php if($get_profile_details[0]['profession']=="Geospatial Information Scientists and Technologists"){echo "selected";} ?> value="Geospatial Information Scientists and Technologists">Geospatial Information Scientists and Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Geothermal Production Managers"){echo "selected";} ?> value="Geothermal Production Managers">Geothermal Production Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Geothermal Technicians"){echo "selected";} ?> value="Geothermal Technicians">Geothermal Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Glass Blowers, Molders, Benders, and Finishers"){echo "selected";} ?> value="Glass Blowers, Molders, Benders, and Finishers">Glass Blowers, Molders, Benders, and Finishers</option>
										<option <?php if($get_profile_details[0]['profession']=="Glass Cutting Machine Setters and Set-Up Operators"){echo "selected";} ?> value="Glass Cutting Machine Setters and Set-Up Operators">Glass Cutting Machine Setters and Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Glaziers"){echo "selected";} ?> value="Glaziers">Glaziers</option>
										<option <?php if($get_profile_details[0]['profession']=="Government Property Inspectors and Investigators"){echo "selected";} ?> value="Government Property Inspectors and Investigators">Government Property Inspectors and Investigators</option>
										<option <?php if($get_profile_details[0]['profession']=="Government Service Executives"){echo "selected";} ?> value="Government Service Executives">Government Service Executives</option>
										<option <?php if($get_profile_details[0]['profession']=="Grader, Bulldozer, and Scraper Operators"){echo "selected";} ?> value="Grader, Bulldozer, and Scraper Operators">Grader, Bulldozer, and Scraper Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Graders and Sorters, Agricultural Products"){echo "selected";} ?> value="Graders and Sorters, Agricultural Products">Graders and Sorters, Agricultural Products</option>
										<option <?php if($get_profile_details[0]['profession']=="Graduate Teaching Assistants"){echo "selected";} ?> value="Graduate Teaching Assistants">Graduate Teaching Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Graphic Designers"){echo "selected";} ?> value="Graphic Designers">Graphic Designers</option>
										<option <?php if($get_profile_details[0]['profession']=="Green Marketers"){echo "selected";} ?> value="Green Marketers">Green Marketers</option>
										<option <?php if($get_profile_details[0]['profession']=="Grinding and Polishing Workers, Hand"){echo "selected";} ?> value="Grinding and Polishing Workers, Hand">Grinding and Polishing Workers, Hand</option>
										<option <?php if($get_profile_details[0]['profession']=="Grinding, Honing, Lapping, and Deburring Machine Set-Up Operators"){echo "selected";} ?> value="Grinding, Honing, Lapping, and Deburring Machine Set-Up Operators">Grinding, Honing, Lapping, and Deburring Machine Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Grinding, Lapping, Polishing, and Buffing Machine Tool Setters, Operators, and Tenders, Metal and Plastic"){echo "selected";} ?> value="Grinding, Lapping, Polishing, and Buffing Machine Tool Setters, Operators, and Tenders, Metal and Plastic">Grinding, Lapping, Polishing, and Buffing Machine Tool Setters, Operators, and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Grips and Set-Up Workers, Motion Picture Sets, Studios, and Stages"){echo "selected";} ?> value="Grips and Set-Up Workers, Motion Picture Sets, Studios, and Stages">Grips and Set-Up Workers, Motion Picture Sets, Studios, and Stages</option>
										<option <?php if($get_profile_details[0]['profession']=="Grounds Maintenance Workers, All Other"){echo "selected";} ?> value="Grounds Maintenance Workers, All Other">Grounds Maintenance Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Hairdressers, Hairstylists, and Cosmetologists"){echo "selected";} ?> value="Hairdressers, Hairstylists, and Cosmetologists">Hairdressers, Hairstylists, and Cosmetologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Hand and Portable Power Tool Repairers"){echo "selected";} ?> value="Hand and Portable Power Tool Repairers">Hand and Portable Power Tool Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Hand Compositors and Typesetters"){echo "selected";} ?> value="Hand Compositors and Typesetters">Hand Compositors and Typesetters</option>
										<option <?php if($get_profile_details[0]['profession']=="Hazardous Materials Removal Workers"){echo "selected";} ?> value="Hazardous Materials Removal Workers">Hazardous Materials Removal Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Health and Safety Engineers, Except Mining Safety Engineers and Inspectors"){echo "selected";} ?> value="Health and Safety Engineers, Except Mining Safety Engineers and Inspectors">Health and Safety Engineers, Except Mining Safety Engineers and Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Health Diagnosing and Treating Practitioners, All Other"){echo "selected";} ?> value="Health Diagnosing and Treating Practitioners, All Other">Health Diagnosing and Treating Practitioners, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Health Educators"){echo "selected";} ?> value="Health Educators">Health Educators</option>
										<option <?php if($get_profile_details[0]['profession']=="Health Specialties Teachers, Postsecondary"){echo "selected";} ?> value="Health Specialties Teachers, Postsecondary">Health Specialties Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Health Technologists and Technicians, All Other"){echo "selected";} ?> value="Health Technologists and Technicians, All Other">Health Technologists and Technicians, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Healthcare Practitioners and Technical Workers, All Other"){echo "selected";} ?> value="Healthcare Practitioners and Technical Workers, All Other">Healthcare Practitioners and Technical Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Healthcare Support Workers, All Other"){echo "selected";} ?> value="Healthcare Support Workers, All Other">Healthcare Support Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Hearing Aid Specialists"){echo "selected";} ?> value="Hearing Aid Specialists">Hearing Aid Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Heat Treating Equipment Setters, Operators, and Tenders, Metal and Plastic"){echo "selected";} ?> value="Heat Treating Equipment Setters, Operators, and Tenders, Metal and Plastic">Heat Treating Equipment Setters, Operators, and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Heat Treating, Annealing, and Tempering Machine Operators and Tenders, Metal and Plastic"){echo "selected";} ?> value="Heat Treating, Annealing, and Tempering Machine Operators and Tenders, Metal and Plastic">Heat Treating, Annealing, and Tempering Machine Operators and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Heaters, Metal and Plastic"){echo "selected";} ?> value="Heaters, Metal and Plastic">Heaters, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Heating and Air Conditioning Mechanics"){echo "selected";} ?> value="Heating and Air Conditioning Mechanics">Heating and Air Conditioning Mechanics</option>
										<option <?php if($get_profile_details[0]['profession']=="Heating Equipment Setters and Set-Up Operators, Metal and Plastic"){echo "selected";} ?> value="Heating Equipment Setters and Set-Up Operators, Metal and Plastic">Heating Equipment Setters and Set-Up Operators, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Heating, Air Conditioning, and Refrigeration Mechanics and Installers"){echo "selected";} ?> value="Heating, Air Conditioning, and Refrigeration Mechanics and Installers">Heating, Air Conditioning, and Refrigeration Mechanics and Installers</option>
										<option <?php if($get_profile_details[0]['profession']=="Helpers, Construction Trades, All Other"){echo "selected";} ?> value="Helpers, Construction Trades, All Other">Helpers, Construction Trades, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Helpers--Brickmasons, Blockmasons, Stonemasons, and Tile and Marble Setters"){echo "selected";} ?> value="Helpers--Brickmasons, Blockmasons, Stonemasons, and Tile and Marble Setters">Helpers--Brickmasons, Blockmasons, Stonemasons, and Tile and Marble Setters</option>
										<option <?php if($get_profile_details[0]['profession']=="Helpers--Carpenters"){echo "selected";} ?> value="Helpers--Carpenters">Helpers--Carpenters</option>
										<option <?php if($get_profile_details[0]['profession']=="Helpers--Electricians"){echo "selected";} ?> value="Helpers--Electricians">Helpers--Electricians</option>
										<option <?php if($get_profile_details[0]['profession']=="Helpers--Extraction Workers"){echo "selected";} ?> value="Helpers--Extraction Workers">Helpers--Extraction Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Helpers--Installation, Maintenance, and Repair Workers"){echo "selected";} ?> value="Helpers--Installation, Maintenance, and Repair Workers">Helpers--Installation, Maintenance, and Repair Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Helpers--Painters, Paperhangers, Plasterers, and Stucco Masons"){echo "selected";} ?> value="Helpers--Painters, Paperhangers, Plasterers, and Stucco Masons">Helpers--Painters, Paperhangers, Plasterers, and Stucco Masons</option>
										<option <?php if($get_profile_details[0]['profession']=="Helpers--Pipelayers, Plumbers, Pipefitters, and Steamfitters"){echo "selected";} ?> value="Helpers--Pipelayers, Plumbers, Pipefitters, and Steamfitters">Helpers--Pipelayers, Plumbers, Pipefitters, and Steamfitters</option>
										<option <?php if($get_profile_details[0]['profession']=="Helpers--Production Workers"){echo "selected";} ?> value="Helpers--Production Workers">Helpers--Production Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Helpers--Roofers"){echo "selected";} ?> value="Helpers--Roofers">Helpers--Roofers</option>
										<option <?php if($get_profile_details[0]['profession']=="Highway Maintenance Workers"){echo "selected";} ?> value="Highway Maintenance Workers">Highway Maintenance Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Highway Patrol Pilots"){echo "selected";} ?> value="Highway Patrol Pilots">Highway Patrol Pilots</option>
										<option <?php if($get_profile_details[0]['profession']=="Historians"){echo "selected";} ?> value="Historians">Historians</option>
										<option <?php if($get_profile_details[0]['profession']=="History Teachers, Postsecondary"){echo "selected";} ?> value="History Teachers, Postsecondary">History Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Histotechnologists and Histologic Technicians"){echo "selected";} ?> value="Histotechnologists and Histologic Technicians">Histotechnologists and Histologic Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Hoist and Winch Operators"){echo "selected";} ?> value="Hoist and Winch Operators">Hoist and Winch Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Home Appliance Installers"){echo "selected";} ?> value="Home Appliance Installers">Home Appliance Installers</option>
										<option <?php if($get_profile_details[0]['profession']=="Home Appliance Repairers"){echo "selected";} ?> value="Home Appliance Repairers">Home Appliance Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Home Economics Teachers, Postsecondary"){echo "selected";} ?> value="Home Economics Teachers, Postsecondary">Home Economics Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Home Health Aides"){echo "selected";} ?> value="Home Health Aides">Home Health Aides</option>
										<option <?php if($get_profile_details[0]['profession']=="Hospitalists"){echo "selected";} ?> value="Hospitalists">Hospitalists</option>
										<option <?php if($get_profile_details[0]['profession']=="Hosts and Hostesses, Restaurant, Lounge, and Coffee Shop"){echo "selected";} ?> value="Hosts and Hostesses, Restaurant, Lounge, and Coffee Shop">Hosts and Hostesses, Restaurant, Lounge, and Coffee Shop</option>
										<option <?php if($get_profile_details[0]['profession']=="Hotel, Motel, and Resort Desk Clerks"){echo "selected";} ?> value="Hotel, Motel, and Resort Desk Clerks">Hotel, Motel, and Resort Desk Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Housekeeping Supervisors"){echo "selected";} ?> value="Housekeeping Supervisors">Housekeeping Supervisors</option>
										<option <?php if($get_profile_details[0]['profession']=="Human Factors Engineers and Ergonomists"){echo "selected";} ?> value="Human Factors Engineers and Ergonomists">Human Factors Engineers and Ergonomists</option>
										<option <?php if($get_profile_details[0]['profession']=="Human Resources Assistants, Except Payroll and Timekeeping"){echo "selected";} ?> value="Human Resources Assistants, Except Payroll and Timekeeping">Human Resources Assistants, Except Payroll and Timekeeping</option>
										<option <?php if($get_profile_details[0]['profession']=="Human Resources Manager"){echo "selected";} ?> value="Human Resources Manager">Human Resources Manager</option>
										<option <?php if($get_profile_details[0]['profession']=="Human Resources Managers"){echo "selected";} ?> value="Human Resources Managers">Human Resources Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Human Resources Managers, All Other"){echo "selected";} ?> value="Human Resources Managers, All Other">Human Resources Managers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Human Resources, Training, and Labor Relations Specialists, All Other"){echo "selected";} ?> value="Human Resources, Training, and Labor Relations Specialists, All Other">Human Resources, Training, and Labor Relations Specialists, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Hunters and Trappers"){echo "selected";} ?> value="Hunters and Trappers">Hunters and Trappers</option>
										<option <?php if($get_profile_details[0]['profession']=="Hydroelectric Plant Technicians"){echo "selected";} ?> value="Hydroelectric Plant Technicians">Hydroelectric Plant Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Hydroelectric Production Managers"){echo "selected";} ?> value="Hydroelectric Production Managers">Hydroelectric Production Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Hydrologists"){echo "selected";} ?> value="Hydrologists">Hydrologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Immigration and Customs Inspectors"){echo "selected";} ?> value="Immigration and Customs Inspectors">Immigration and Customs Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Industrial Ecologists"){echo "selected";} ?> value="Industrial Ecologists">Industrial Ecologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Industrial Engineering Technicians"){echo "selected";} ?> value="Industrial Engineering Technicians">Industrial Engineering Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Industrial Engineering Technologists"){echo "selected";} ?> value="Industrial Engineering Technologists">Industrial Engineering Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Industrial Engineers"){echo "selected";} ?> value="Industrial Engineers">Industrial Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Industrial Machinery Mechanics"){echo "selected";} ?> value="Industrial Machinery Mechanics">Industrial Machinery Mechanics</option>
										<option <?php if($get_profile_details[0]['profession']=="Industrial Production Managers"){echo "selected";} ?> value="Industrial Production Managers">Industrial Production Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Industrial Safety and Health Engineers"){echo "selected";} ?> value="Industrial Safety and Health Engineers">Industrial Safety and Health Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Industrial Truck and Tractor Operators"){echo "selected";} ?> value="Industrial Truck and Tractor Operators">Industrial Truck and Tractor Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Industrial-Organizational Psychologists"){echo "selected";} ?> value="Industrial-Organizational Psychologists">Industrial-Organizational Psychologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Infantry"){echo "selected";} ?> value="Infantry">Infantry</option>
										<option <?php if($get_profile_details[0]['profession']=="Infantry Officers"){echo "selected";} ?> value="Infantry Officers">Infantry Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="Informatics Nurse Specialists"){echo "selected";} ?> value="Informatics Nurse Specialists">Informatics Nurse Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Information and Record Clerks, All Other"){echo "selected";} ?> value="Information and Record Clerks, All Other">Information and Record Clerks, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Information Security Analysts"){echo "selected";} ?> value="Information Security Analysts">Information Security Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Information Technology Project Managers"){echo "selected";} ?> value="Information Technology Project Managers">Information Technology Project Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Inspectors, Testers, Sorters, Samplers, and Weighers"){echo "selected";} ?> value="Inspectors, Testers, Sorters, Samplers, and Weighers">Inspectors, Testers, Sorters, Samplers, and Weighers</option>
										<option <?php if($get_profile_details[0]['profession']=="Installation, Maintenance, and Repair Workers, All Other"){echo "selected";} ?> value="Installation, Maintenance, and Repair Workers, All Other">Installation, Maintenance, and Repair Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Instructional Coordinators"){echo "selected";} ?> value="Instructional Coordinators">Instructional Coordinators</option>
										<option <?php if($get_profile_details[0]['profession']=="Instructional Designers and Technologists"){echo "selected";} ?> value="Instructional Designers and Technologists">Instructional Designers and Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Insulation Workers, Floor, Ceiling, and Wall"){echo "selected";} ?> value="Insulation Workers, Floor, Ceiling, and Wall">Insulation Workers, Floor, Ceiling, and Wall</option>
										<option <?php if($get_profile_details[0]['profession']=="Insulation Workers, Mechanical"){echo "selected";} ?> value="Insulation Workers, Mechanical">Insulation Workers, Mechanical</option>
										<option <?php if($get_profile_details[0]['profession']=="Insurance Adjusters, Examiners, and Investigators"){echo "selected";} ?> value="Insurance Adjusters, Examiners, and Investigators">Insurance Adjusters, Examiners, and Investigators</option>
										<option <?php if($get_profile_details[0]['profession']=="Insurance Appraisers, Auto Damage"){echo "selected";} ?> value="Insurance Appraisers, Auto Damage">Insurance Appraisers, Auto Damage</option>
										<option <?php if($get_profile_details[0]['profession']=="Insurance Claims and Policy Processing Clerks"){echo "selected";} ?> value="Insurance Claims and Policy Processing Clerks">Insurance Claims and Policy Processing Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Insurance Claims Clerks"){echo "selected";} ?> value="Insurance Claims Clerks">Insurance Claims Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Insurance Policy Processing Clerks"){echo "selected";} ?> value="Insurance Policy Processing Clerks">Insurance Policy Processing Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Insurance Sales Agents"){echo "selected";} ?> value="Insurance Sales Agents">Insurance Sales Agents</option>
										<option <?php if($get_profile_details[0]['profession']=="Insurance Underwriters"){echo "selected";} ?> value="Insurance Underwriters">Insurance Underwriters</option>
										<option <?php if($get_profile_details[0]['profession']=="Intelligence Analysts"){echo "selected";} ?> value="Intelligence Analysts">Intelligence Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Interior Designers"){echo "selected";} ?> value="Interior Designers">Interior Designers</option>
										<option <?php if($get_profile_details[0]['profession']=="Internists, General"){echo "selected";} ?> value="Internists, General">Internists, General</option>
										<option <?php if($get_profile_details[0]['profession']=="Interpreters and Translators"){echo "selected";} ?> value="Interpreters and Translators">Interpreters and Translators</option>
										<option <?php if($get_profile_details[0]['profession']=="Interviewers, Except Eligibility and Loan"){echo "selected";} ?> value="Interviewers, Except Eligibility and Loan">Interviewers, Except Eligibility and Loan</option>
										<option <?php if($get_profile_details[0]['profession']=="Investment Fund Managers"){echo "selected";} ?> value="Investment Fund Managers">Investment Fund Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Investment Underwriters"){echo "selected";} ?> value="Investment Underwriters">Investment Underwriters</option>
										<option <?php if($get_profile_details[0]['profession']=="Irradiated-Fuel Handlers"){echo "selected";} ?> value="Irradiated-Fuel Handlers">Irradiated-Fuel Handlers</option>
										<option <?php if($get_profile_details[0]['profession']=="Janitorial Supervisors"){echo "selected";} ?> value="Janitorial Supervisors">Janitorial Supervisors</option>
										<option <?php if($get_profile_details[0]['profession']=="Janitors and Cleaners, Except Maids and Housekeeping Cleaners"){echo "selected";} ?> value="Janitors and Cleaners, Except Maids and Housekeeping Cleaners">Janitors and Cleaners, Except Maids and Housekeeping Cleaners</option>
										<option <?php if($get_profile_details[0]['profession']=="Jewelers"){echo "selected";} ?> value="Jewelers">Jewelers</option>
										<option <?php if($get_profile_details[0]['profession']=="Jewelers and Precious Stone and Metal Workers"){echo "selected";} ?> value="Jewelers and Precious Stone and Metal Workers">Jewelers and Precious Stone and Metal Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Job Printers"){echo "selected";} ?> value="Job Printers">Job Printers</option>
										<option <?php if($get_profile_details[0]['profession']=="Judges, Magistrate Judges, and Magistrates"){echo "selected";} ?> value="Judges, Magistrate Judges, and Magistrates">Judges, Magistrate Judges, and Magistrates</option>
										<option <?php if($get_profile_details[0]['profession']=="Judicial Law Clerks"){echo "selected";} ?> value="Judicial Law Clerks">Judicial Law Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Keyboard Instrument Repairers and Tuners"){echo "selected";} ?> value="Keyboard Instrument Repairers and Tuners">Keyboard Instrument Repairers and Tuners</option>
										<option <?php if($get_profile_details[0]['profession']=="Kindergarten Teachers, Except Special Education"){echo "selected";} ?> value="Kindergarten Teachers, Except Special Education">Kindergarten Teachers, Except Special Education</option>
										<option <?php if($get_profile_details[0]['profession']=="Labor Relations Specialists"){echo "selected";} ?> value="Labor Relations Specialists">Labor Relations Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Laborers and Freight, Stock, and Material Movers, Hand"){echo "selected";} ?> value="Laborers and Freight, Stock, and Material Movers, Hand">Laborers and Freight, Stock, and Material Movers, Hand</option>
										<option <?php if($get_profile_details[0]['profession']=="Landscape Architects"){echo "selected";} ?> value="Landscape Architects">Landscape Architects</option>
										<option <?php if($get_profile_details[0]['profession']=="Landscaping and Groundskeeping Workers"){echo "selected";} ?> value="Landscaping and Groundskeeping Workers">Landscaping and Groundskeeping Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Lathe and Turning Machine Tool Setters, Operators, and Tenders, Metal and Plastic"){echo "selected";} ?> value="Lathe and Turning Machine Tool Setters, Operators, and Tenders, Metal and Plastic">Lathe and Turning Machine Tool Setters, Operators, and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Laundry and Drycleaning Machine Operators and Tenders, Except Pressing"){echo "selected";} ?> value="Laundry and Drycleaning Machine Operators and Tenders, Except Pressing">Laundry and Drycleaning Machine Operators and Tenders, Except Pressing</option>
										<option <?php if($get_profile_details[0]['profession']=="Laundry and Dry-Cleaning Workers"){echo "selected";} ?> value="Laundry and Dry-Cleaning Workers">Laundry and Dry-Cleaning Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Law Clerks"){echo "selected";} ?> value="Law Clerks">Law Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Law Teachers, Postsecondary"){echo "selected";} ?> value="Law Teachers, Postsecondary">Law Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Lawn Service Managers"){echo "selected";} ?> value="Lawn Service Managers">Lawn Service Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Lawyers"){echo "selected";} ?> value="Lawyers">Lawyers</option>
										<option <?php if($get_profile_details[0]['profession']=="Lay-Out Workers, Metal and Plastic"){echo "selected";} ?> value="Lay-Out Workers, Metal and Plastic">Lay-Out Workers, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Legal Secretaries"){echo "selected";} ?> value="Legal Secretaries">Legal Secretaries</option>
										<option <?php if($get_profile_details[0]['profession']=="Legal Support Workers, All Other"){echo "selected";} ?> value="Legal Support Workers, All Other">Legal Support Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Legislators"){echo "selected";} ?> value="Legislators">Legislators</option>
										<option <?php if($get_profile_details[0]['profession']=="Letterpress Setters and Set-Up Operators"){echo "selected";} ?> value="Letterpress Setters and Set-Up Operators">Letterpress Setters and Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Librarians"){echo "selected";} ?> value="Librarians">Librarians</option>
										<option <?php if($get_profile_details[0]['profession']=="Library Assistants, Clerical"){echo "selected";} ?> value="Library Assistants, Clerical">Library Assistants, Clerical</option>
										<option <?php if($get_profile_details[0]['profession']=="Library Science Teachers, Postsecondary"){echo "selected";} ?> value="Library Science Teachers, Postsecondary">Library Science Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Library Technicians"){echo "selected";} ?> value="Library Technicians">Library Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="License Clerks"){echo "selected";} ?> value="License Clerks">License Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Licensed Practical and Licensed Vocational Nurses"){echo "selected";} ?> value="Licensed Practical and Licensed Vocational Nurses">Licensed Practical and Licensed Vocational Nurses</option>
										<option <?php if($get_profile_details[0]['profession']=="Licensing Examiners and Inspectors"){echo "selected";} ?> value="Licensing Examiners and Inspectors">Licensing Examiners and Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Life Scientists, All Other"){echo "selected";} ?> value="Life Scientists, All Other">Life Scientists, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Life, Physical, and Social Science Technicians, All Other"){echo "selected";} ?> value="Life, Physical, and Social Science Technicians, All Other">Life, Physical, and Social Science Technicians, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Lifeguards, Ski Patrol, and Other Recreational Protective Service Workers"){echo "selected";} ?> value="Lifeguards, Ski Patrol, and Other Recreational Protective Service Workers">Lifeguards, Ski Patrol, and Other Recreational Protective Service Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Loading Machine Operators, Underground Mining"){echo "selected";} ?> value="Loading Machine Operators, Underground Mining">Loading Machine Operators, Underground Mining</option>
										<option <?php if($get_profile_details[0]['profession']=="Loan Counselor"){echo "selected";} ?> value="Loan Counselor">Loan Counselor</option>
										<option <?php if($get_profile_details[0]['profession']=="Loan Counselors"){echo "selected";} ?> value="Loan Counselors">Loan Counselors</option>
										<option <?php if($get_profile_details[0]['profession']=="Loan Interviewers and Clerks"){echo "selected";} ?> value="Loan Interviewers and Clerks">Loan Interviewers and Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Loan Officers"){echo "selected";} ?> value="Loan Officers">Loan Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="Locker Room, Coatroom, and Dressing Room Attendants"){echo "selected";} ?> value="Locker Room, Coatroom, and Dressing Room Attendants">Locker Room, Coatroom, and Dressing Room Attendants</option>
										<option <?php if($get_profile_details[0]['profession']=="Locksmiths and Safe Repairers"){echo "selected";} ?> value="Locksmiths and Safe Repairers">Locksmiths and Safe Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Locomotive Engineers"){echo "selected";} ?> value="Locomotive Engineers">Locomotive Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Locomotive Firers"){echo "selected";} ?> value="Locomotive Firers">Locomotive Firers</option>
										<option <?php if($get_profile_details[0]['profession']=="Lodging Managers"){echo "selected";} ?> value="Lodging Managers">Lodging Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Log Graders and Scalers"){echo "selected";} ?> value="Log Graders and Scalers">Log Graders and Scalers</option>
										<option <?php if($get_profile_details[0]['profession']=="Logging Equipment Operators"){echo "selected";} ?> value="Logging Equipment Operators">Logging Equipment Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Logging Tractor Operators"){echo "selected";} ?> value="Logging Tractor Operators">Logging Tractor Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Logging Workers, All Other"){echo "selected";} ?> value="Logging Workers, All Other">Logging Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Logisticians"){echo "selected";} ?> value="Logisticians">Logisticians</option>
										<option <?php if($get_profile_details[0]['profession']=="Logistics Analysts"){echo "selected";} ?> value="Logistics Analysts">Logistics Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Logistics Engineers"){echo "selected";} ?> value="Logistics Engineers">Logistics Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Logistics Managers"){echo "selected";} ?> value="Logistics Managers">Logistics Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Loss Prevention Managers"){echo "selected";} ?> value="Loss Prevention Managers">Loss Prevention Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Low Vision Therapists, Orientation and Mobility Specialists, and Vision Rehabilitation Therapists"){echo "selected";} ?> value="Low Vision Therapists, Orientation and Mobility Specialists, and Vision Rehabilitation Therapists">Low Vision Therapists, Orientation and Mobility Specialists, and Vision Rehabilitation Therapists</option>
										<option <?php if($get_profile_details[0]['profession']=="Machine Feeders and Offbearers"){echo "selected";} ?> value="Machine Feeders and Offbearers">Machine Feeders and Offbearers</option>
										<option <?php if($get_profile_details[0]['profession']=="Machinists"){echo "selected";} ?> value="Machinists">Machinists</option>
										<option <?php if($get_profile_details[0]['profession']=="Magnetic Resonance Imaging Technologists"){echo "selected";} ?> value="Magnetic Resonance Imaging Technologists">Magnetic Resonance Imaging Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Maids and Housekeeping Cleaners"){echo "selected";} ?> value="Maids and Housekeeping Cleaners">Maids and Housekeeping Cleaners</option>
										<option <?php if($get_profile_details[0]['profession']=="Mail Clerks and Mail Machine Operators, Except Postal Service"){echo "selected";} ?> value="Mail Clerks and Mail Machine Operators, Except Postal Service">Mail Clerks and Mail Machine Operators, Except Postal Service</option>
										<option <?php if($get_profile_details[0]['profession']=="Mail Clerks, Except Mail Machine Operators and Postal Service"){echo "selected";} ?> value="Mail Clerks, Except Mail Machine Operators and Postal Service">Mail Clerks, Except Mail Machine Operators and Postal Service</option>
										<option <?php if($get_profile_details[0]['profession']=="Mail Machine Operators, Preparation and Handling"){echo "selected";} ?> value="Mail Machine Operators, Preparation and Handling">Mail Machine Operators, Preparation and Handling</option>
										<option <?php if($get_profile_details[0]['profession']=="Maintenance and Repair Worker"){echo "selected";} ?> value="Maintenance and Repair Worker">Maintenance and Repair Worker</option>
										<option <?php if($get_profile_details[0]['profession']=="Maintenance and Repair Workers, General"){echo "selected";} ?> value="Maintenance and Repair Workers, General">Maintenance and Repair Workers, General</option>
										<option <?php if($get_profile_details[0]['profession']=="Maintenance Workers, Machinery"){echo "selected";} ?> value="Maintenance Workers, Machinery">Maintenance Workers, Machinery</option>
										<option <?php if($get_profile_details[0]['profession']=="Makeup Artists, Theatrical and Performance"){echo "selected";} ?> value="Makeup Artists, Theatrical and Performance">Makeup Artists, Theatrical and Performance</option>
										<option <?php if($get_profile_details[0]['profession']=="Management Analysts"){echo "selected";} ?> value="Management Analysts">Management Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Managers, All Other"){echo "selected";} ?> value="Managers, All Other">Managers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Manicurists and Pedicurists"){echo "selected";} ?> value="Manicurists and Pedicurists">Manicurists and Pedicurists</option>
										<option <?php if($get_profile_details[0]['profession']=="Manufactured Building and Mobile Home Installers"){echo "selected";} ?> value="Manufactured Building and Mobile Home Installers">Manufactured Building and Mobile Home Installers</option>
										<option <?php if($get_profile_details[0]['profession']=="Manufacturing Engineering Technologists"){echo "selected";} ?> value="Manufacturing Engineering Technologists">Manufacturing Engineering Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Manufacturing Engineers"){echo "selected";} ?> value="Manufacturing Engineers">Manufacturing Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Manufacturing Production Technicians"){echo "selected";} ?> value="Manufacturing Production Technicians">Manufacturing Production Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Mapping Technicians"){echo "selected";} ?> value="Mapping Technicians">Mapping Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Marine Architects"){echo "selected";} ?> value="Marine Architects">Marine Architects</option>
										<option <?php if($get_profile_details[0]['profession']=="Marine Cargo Inspectors"){echo "selected";} ?> value="Marine Cargo Inspectors">Marine Cargo Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Marine Engineers"){echo "selected";} ?> value="Marine Engineers">Marine Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Marine Engineers and Naval Architects"){echo "selected";} ?> value="Marine Engineers and Naval Architects">Marine Engineers and Naval Architects</option>
										<option <?php if($get_profile_details[0]['profession']=="Market Research Analysts"){echo "selected";} ?> value="Market Research Analysts">Market Research Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Market Research Analysts and Marketing Specialists"){echo "selected";} ?> value="Market Research Analysts and Marketing Specialists">Market Research Analysts and Marketing Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Marketing Managers"){echo "selected";} ?> value="Marketing Managers">Marketing Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Marking and Identification Printing Machine Setters and Set-Up Operators"){echo "selected";} ?> value="Marking and Identification Printing Machine Setters and Set-Up Operators">Marking and Identification Printing Machine Setters and Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Marking Clerks"){echo "selected";} ?> value="Marking Clerks">Marking Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Marriage and Family Therapists"){echo "selected";} ?> value="Marriage and Family Therapists">Marriage and Family Therapists</option>
										<option <?php if($get_profile_details[0]['profession']=="Massage Therapists"){echo "selected";} ?> value="Massage Therapists">Massage Therapists</option>
										<option <?php if($get_profile_details[0]['profession']=="Material Moving Workers, All Other"){echo "selected";} ?> value="Material Moving Workers, All Other">Material Moving Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Materials Engineers"){echo "selected";} ?> value="Materials Engineers">Materials Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Materials Inspectors"){echo "selected";} ?> value="Materials Inspectors">Materials Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Materials Scientists"){echo "selected";} ?> value="Materials Scientists">Materials Scientists</option>
										<option <?php if($get_profile_details[0]['profession']=="Mates- Ship, Boat, and Barge"){echo "selected";} ?> value="Mates- Ship, Boat, and Barge">Mates- Ship, Boat, and Barge</option>
										<option <?php if($get_profile_details[0]['profession']=="Mathematical Science Occupations, All Other"){echo "selected";} ?> value="Mathematical Science Occupations, All Other">Mathematical Science Occupations, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Mathematical Science Teachers, Postsecondary"){echo "selected";} ?> value="Mathematical Science Teachers, Postsecondary">Mathematical Science Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Mathematical Technicians"){echo "selected";} ?> value="Mathematical Technicians">Mathematical Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Mathematicians"){echo "selected";} ?> value="Mathematicians">Mathematicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Meat, Poultry, and Fish Cutters and Trimmers"){echo "selected";} ?> value="Meat, Poultry, and Fish Cutters and Trimmers">Meat, Poultry, and Fish Cutters and Trimmers</option>
										<option <?php if($get_profile_details[0]['profession']=="Mechanical Door Repairers"){echo "selected";} ?> value="Mechanical Door Repairers">Mechanical Door Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Mechanical Drafters"){echo "selected";} ?> value="Mechanical Drafters">Mechanical Drafters</option>
										<option <?php if($get_profile_details[0]['profession']=="Mechanical Engineering Technicians"){echo "selected";} ?> value="Mechanical Engineering Technicians">Mechanical Engineering Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Mechanical Engineering Technologists"){echo "selected";} ?> value="Mechanical Engineering Technologists">Mechanical Engineering Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Mechanical Engineers"){echo "selected";} ?> value="Mechanical Engineers">Mechanical Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Mechanical Inspectors"){echo "selected";} ?> value="Mechanical Inspectors">Mechanical Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Mechatronics Engineers"){echo "selected";} ?> value="Mechatronics Engineers">Mechatronics Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Media and Communication Equipment Workers, All Other"){echo "selected";} ?> value="Media and Communication Equipment Workers, All Other">Media and Communication Equipment Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Media and Communication Workers, All Other"){echo "selected";} ?> value="Media and Communication Workers, All Other">Media and Communication Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Medical and Clinical Laboratory Technicians"){echo "selected";} ?> value="Medical and Clinical Laboratory Technicians">Medical and Clinical Laboratory Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Medical and Clinical Laboratory Technologists"){echo "selected";} ?> value="Medical and Clinical Laboratory Technologists">Medical and Clinical Laboratory Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Medical and Health Services Managers"){echo "selected";} ?> value="Medical and Health Services Managers">Medical and Health Services Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Medical and Public Health Social Workers"){echo "selected";} ?> value="Medical and Public Health Social Workers">Medical and Public Health Social Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Medical Appliance Technicians"){echo "selected";} ?> value="Medical Appliance Technicians">Medical Appliance Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Medical Assistants"){echo "selected";} ?> value="Medical Assistants">Medical Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Medical Equipment Preparers"){echo "selected";} ?> value="Medical Equipment Preparers">Medical Equipment Preparers</option>
										<option <?php if($get_profile_details[0]['profession']=="Medical Equipment Repairers"){echo "selected";} ?> value="Medical Equipment Repairers">Medical Equipment Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Medical Records and Health Information Technicians"){echo "selected";} ?> value="Medical Records and Health Information Technicians">Medical Records and Health Information Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Medical Scientists, Except Epidemiologists"){echo "selected";} ?> value="Medical Scientists, Except Epidemiologists">Medical Scientists, Except Epidemiologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Medical Secretaries"){echo "selected";} ?> value="Medical Secretaries">Medical Secretaries</option>
										<option <?php if($get_profile_details[0]['profession']=="Medical Transcriptionists"){echo "selected";} ?> value="Medical Transcriptionists">Medical Transcriptionists</option>
										<option <?php if($get_profile_details[0]['profession']=="Meeting and Convention Planners"){echo "selected";} ?> value="Meeting and Convention Planners">Meeting and Convention Planners</option>
										<option <?php if($get_profile_details[0]['profession']=="Mental Health and Substance Abuse Social Workers"){echo "selected";} ?> value="Mental Health and Substance Abuse Social Workers">Mental Health and Substance Abuse Social Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Mental Health Counselors"){echo "selected";} ?> value="Mental Health Counselors">Mental Health Counselors</option>
										<option <?php if($get_profile_details[0]['profession']=="Merchandise Displayers and Window Trimmers"){echo "selected";} ?> value="Merchandise Displayers and Window Trimmers">Merchandise Displayers and Window Trimmers</option>
										<option <?php if($get_profile_details[0]['profession']=="Metal Fabricators, Structural Metal Products"){echo "selected";} ?> value="Metal Fabricators, Structural Metal Products">Metal Fabricators, Structural Metal Products</option>
										<option <?php if($get_profile_details[0]['profession']=="Metal Molding, Coremaking, and Casting Machine Operators and Tenders"){echo "selected";} ?> value="Metal Molding, Coremaking, and Casting Machine Operators and Tenders">Metal Molding, Coremaking, and Casting Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Metal Molding, Coremaking, and Casting Machine Setters and Set-Up Operators"){echo "selected";} ?> value="Metal Molding, Coremaking, and Casting Machine Setters and Set-Up Operators">Metal Molding, Coremaking, and Casting Machine Setters and Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Metal Workers and Plastic Workers, All Other"){echo "selected";} ?> value="Metal Workers and Plastic Workers, All Other">Metal Workers and Plastic Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Metal-Refining Furnace Operators and Tenders"){echo "selected";} ?> value="Metal-Refining Furnace Operators and Tenders">Metal-Refining Furnace Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Meter Mechanics"){echo "selected";} ?> value="Meter Mechanics">Meter Mechanics</option>
										<option <?php if($get_profile_details[0]['profession']=="Meter Readers, Utilities"){echo "selected";} ?> value="Meter Readers, Utilities">Meter Readers, Utilities</option>
										<option <?php if($get_profile_details[0]['profession']=="Methane Landfill Gas Generation System Technicians"){echo "selected";} ?> value="Methane Landfill Gas Generation System Technicians">Methane Landfill Gas Generation System Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Methane/Landfill Gas Collection System Operators"){echo "selected";} ?> value="Methane/Landfill Gas Collection System Operators">Methane/Landfill Gas Collection System Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Microbiologists"){echo "selected";} ?> value="Microbiologists">Microbiologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Microsystems Engineers"){echo "selected";} ?> value="Microsystems Engineers">Microsystems Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Middle School Teachers, Except Special and Vocational Education"){echo "selected";} ?> value="Middle School Teachers, Except Special and Vocational Education">Middle School Teachers, Except Special and Vocational Education</option>
										<option <?php if($get_profile_details[0]['profession']=="Midwives"){echo "selected";} ?> value="Midwives">Midwives</option>
										<option <?php if($get_profile_details[0]['profession']=="Military Enlisted Tactical Operations and Air--Weapons Specialists and Crew Members, All Other"){echo "selected";} ?> value="Military Enlisted Tactical Operations and Air--Weapons Specialists and Crew Members, All Other">Military Enlisted Tactical Operations and Air--Weapons Specialists and Crew Members, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Military Officer Special and Tactical Operations Leaders--Managers, All Other"){echo "selected";} ?> value="Military Officer Special and Tactical Operations Leaders--Managers, All Other">Military Officer Special and Tactical Operations Leaders--Managers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Milling and Planing Machine Setters, Operators, and Tenders, Metal and Plastic"){echo "selected";} ?> value="Milling and Planing Machine Setters, Operators, and Tenders, Metal and Plastic">Milling and Planing Machine Setters, Operators, and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Millwrights"){echo "selected";} ?> value="Millwrights">Millwrights</option>
										<option <?php if($get_profile_details[0]['profession']=="Mine Cutting and Channeling Machine Operators"){echo "selected";} ?> value="Mine Cutting and Channeling Machine Operators">Mine Cutting and Channeling Machine Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Mining and Geological Engineers, Including Mining Safety Engineers"){echo "selected";} ?> value="Mining and Geological Engineers, Including Mining Safety Engineers">Mining and Geological Engineers, Including Mining Safety Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Mining Machine Operators, All Other"){echo "selected";} ?> value="Mining Machine Operators, All Other">Mining Machine Operators, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Mixing and Blending Machine Setters, Operators, and Tenders"){echo "selected";} ?> value="Mixing and Blending Machine Setters, Operators, and Tenders">Mixing and Blending Machine Setters, Operators, and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Mobile Heavy Equipment Mechanics, Except Engines"){echo "selected";} ?> value="Mobile Heavy Equipment Mechanics, Except Engines">Mobile Heavy Equipment Mechanics, Except Engines</option>
										<option <?php if($get_profile_details[0]['profession']=="Model and Mold Makers, Jewelry"){echo "selected";} ?> value="Model and Mold Makers, Jewelry">Model and Mold Makers, Jewelry</option>
										<option <?php if($get_profile_details[0]['profession']=="Model Makers, Metal and Plastic"){echo "selected";} ?> value="Model Makers, Metal and Plastic">Model Makers, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Model Makers, Wood"){echo "selected";} ?> value="Model Makers, Wood">Model Makers, Wood</option>
										<option <?php if($get_profile_details[0]['profession']=="Models"){echo "selected";} ?> value="Models">Models</option>
										<option <?php if($get_profile_details[0]['profession']=="Mold Makers, Hand"){echo "selected";} ?> value="Mold Makers, Hand">Mold Makers, Hand</option>
										<option <?php if($get_profile_details[0]['profession']=="Molders, Shapers, and Casters, Except Metal and Plastic"){echo "selected";} ?> value="Molders, Shapers, and Casters, Except Metal and Plastic">Molders, Shapers, and Casters, Except Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Molding and Casting Workers"){echo "selected";} ?> value="Molding and Casting Workers">Molding and Casting Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Molding, Coremaking, and Casting Machine Setters, Operators, and Tenders, Metal and Plastic"){echo "selected";} ?> value="Molding, Coremaking, and Casting Machine Setters, Operators, and Tenders, Metal and Plastic">Molding, Coremaking, and Casting Machine Setters, Operators, and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Molecular and Cellular Biologists"){echo "selected";} ?> value="Molecular and Cellular Biologists">Molecular and Cellular Biologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Morticians, Undertakers, and Funeral Directors"){echo "selected";} ?> value="Morticians, Undertakers, and Funeral Directors">Morticians, Undertakers, and Funeral Directors</option>
										<option <?php if($get_profile_details[0]['profession']=="Motion Picture Projectionists"){echo "selected";} ?> value="Motion Picture Projectionists">Motion Picture Projectionists</option>
										<option <?php if($get_profile_details[0]['profession']=="Motor Vehicle Inspectors"){echo "selected";} ?> value="Motor Vehicle Inspectors">Motor Vehicle Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Motor Vehicle Operators, All Other"){echo "selected";} ?> value="Motor Vehicle Operators, All Other">Motor Vehicle Operators, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Motorboat Mechanics"){echo "selected";} ?> value="Motorboat Mechanics">Motorboat Mechanics</option>
										<option <?php if($get_profile_details[0]['profession']=="Motorboat Operators"){echo "selected";} ?> value="Motorboat Operators">Motorboat Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Motorcycle Mechanics"){echo "selected";} ?> value="Motorcycle Mechanics">Motorcycle Mechanics</option>
										<option <?php if($get_profile_details[0]['profession']=="Multi-Media Artists and Animators"){echo "selected";} ?> value="Multi-Media Artists and Animators">Multi-Media Artists and Animators</option>
										<option <?php if($get_profile_details[0]['profession']=="Multiple Machine Tool Setters, Operators, and Tenders, Metal and Plastic"){echo "selected";} ?> value="Multiple Machine Tool Setters, Operators, and Tenders, Metal and Plastic">Multiple Machine Tool Setters, Operators, and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Municipal Clerks"){echo "selected";} ?> value="Municipal Clerks">Municipal Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Municipal Fire Fighters"){echo "selected";} ?> value="Municipal Fire Fighters">Municipal Fire Fighters</option>
										<option <?php if($get_profile_details[0]['profession']=="Municipal Fire Fighting and Prevention Supervisors"){echo "selected";} ?> value="Municipal Fire Fighting and Prevention Supervisors">Municipal Fire Fighting and Prevention Supervisors</option>
										<option <?php if($get_profile_details[0]['profession']=="Museum Technicians and Conservators"){echo "selected";} ?> value="Museum Technicians and Conservators">Museum Technicians and Conservators</option>
										<option <?php if($get_profile_details[0]['profession']=="Music Arrangers and Orchestrators"){echo "selected";} ?> value="Music Arrangers and Orchestrators">Music Arrangers and Orchestrators</option>
										<option <?php if($get_profile_details[0]['profession']=="Music Composers and Arrangers"){echo "selected";} ?> value="Music Composers and Arrangers">Music Composers and Arrangers</option>
										<option <?php if($get_profile_details[0]['profession']=="Music Directors"){echo "selected";} ?> value="Music Directors">Music Directors</option>
										<option <?php if($get_profile_details[0]['profession']=="Music Directors and Composers"){echo "selected";} ?> value="Music Directors and Composers">Music Directors and Composers</option>
										<option <?php if($get_profile_details[0]['profession']=="Music Therapists"){echo "selected";} ?> value="Music Therapists">Music Therapists</option>
										<option <?php if($get_profile_details[0]['profession']=="Musical Instrument Repairers and Tuners"){echo "selected";} ?> value="Musical Instrument Repairers and Tuners">Musical Instrument Repairers and Tuners</option>
										<option <?php if($get_profile_details[0]['profession']=="Musicians and Singers"){echo "selected";} ?> value="Musicians and Singers">Musicians and Singers</option>
										<option <?php if($get_profile_details[0]['profession']=="Musicians, Instrumental"){echo "selected";} ?> value="Musicians, Instrumental">Musicians, Instrumental</option>
										<option <?php if($get_profile_details[0]['profession']=="Nannies"){echo "selected";} ?> value="Nannies">Nannies</option>
										<option <?php if($get_profile_details[0]['profession']=="Nanosystems Engineers"){echo "selected";} ?> value="Nanosystems Engineers">Nanosystems Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Nanotechnology Engineering Technicians"){echo "selected";} ?> value="Nanotechnology Engineering Technicians">Nanotechnology Engineering Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Nanotechnology Engineering Technologists"){echo "selected";} ?> value="Nanotechnology Engineering Technologists">Nanotechnology Engineering Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Natural Sciences Managers"){echo "selected";} ?> value="Natural Sciences Managers">Natural Sciences Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Naturopathic Physicians"){echo "selected";} ?> value="Naturopathic Physicians">Naturopathic Physicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Network and Computer Systems Administrator"){echo "selected";} ?> value="Network and Computer Systems Administrator">Network and Computer Systems Administrator</option>
										<option <?php if($get_profile_details[0]['profession']=="Network and Computer Systems Administrators"){echo "selected";} ?> value="Network and Computer Systems Administrators">Network and Computer Systems Administrators</option>
										<option <?php if($get_profile_details[0]['profession']=="Network Systems and Data Communications Analysts"){echo "selected";} ?> value="Network Systems and Data Communications Analysts">Network Systems and Data Communications Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Neurodiagnostic Technologists"){echo "selected";} ?> value="Neurodiagnostic Technologists">Neurodiagnostic Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Neurologists"){echo "selected";} ?> value="Neurologists">Neurologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Neuropsychologists and Clinical Neuropsychologists"){echo "selected";} ?> value="Neuropsychologists and Clinical Neuropsychologists">Neuropsychologists and Clinical Neuropsychologists</option>
										<option <?php if($get_profile_details[0]['profession']=="New Accounts Clerks"){echo "selected";} ?> value="New Accounts Clerks">New Accounts Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Non-Destructive Testing Specialists"){echo "selected";} ?> value="Non-Destructive Testing Specialists">Non-Destructive Testing Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Nonelectrolytic Plating and Coating Machine Operators and Tenders, Metal and Plastic"){echo "selected";} ?> value="Nonelectrolytic Plating and Coating Machine Operators and Tenders, Metal and Plastic">Nonelectrolytic Plating and Coating Machine Operators and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Nonelectrolytic Plating and Coating Machine Setters and Set-Up Operators, Metal and Plastic"){echo "selected";} ?> value="Nonelectrolytic Plating and Coating Machine Setters and Set-Up Operators, Metal and Plastic">Nonelectrolytic Plating and Coating Machine Setters and Set-Up Operators, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Nonfarm Animal Caretakers"){echo "selected";} ?> value="Nonfarm Animal Caretakers">Nonfarm Animal Caretakers</option>
										<option <?php if($get_profile_details[0]['profession']=="Nuclear Engineers"){echo "selected";} ?> value="Nuclear Engineers">Nuclear Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Nuclear Equipment Operation Technicians"){echo "selected";} ?> value="Nuclear Equipment Operation Technicians">Nuclear Equipment Operation Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Nuclear Medicine Physicians"){echo "selected";} ?> value="Nuclear Medicine Physicians">Nuclear Medicine Physicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Nuclear Medicine Technologists"){echo "selected";} ?> value="Nuclear Medicine Technologists">Nuclear Medicine Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Nuclear Monitoring Technicians"){echo "selected";} ?> value="Nuclear Monitoring Technicians">Nuclear Monitoring Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Nuclear Power Reactor Operators"){echo "selected";} ?> value="Nuclear Power Reactor Operators">Nuclear Power Reactor Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Nuclear Technicians"){echo "selected";} ?> value="Nuclear Technicians">Nuclear Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Numerical Control Machine Tool Operators and Tenders, Metal and Plastic"){echo "selected";} ?> value="Numerical Control Machine Tool Operators and Tenders, Metal and Plastic">Numerical Control Machine Tool Operators and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Numerical Tool and Process Control Programmers"){echo "selected";} ?> value="Numerical Tool and Process Control Programmers">Numerical Tool and Process Control Programmers</option>
										<option <?php if($get_profile_details[0]['profession']=="Nurse Anesthetists"){echo "selected";} ?> value="Nurse Anesthetists">Nurse Anesthetists</option>
										<option <?php if($get_profile_details[0]['profession']=="Nurse Midwives"){echo "selected";} ?> value="Nurse Midwives">Nurse Midwives</option>
										<option <?php if($get_profile_details[0]['profession']=="Nurse Practitioners"){echo "selected";} ?> value="Nurse Practitioners">Nurse Practitioners</option>
										<option <?php if($get_profile_details[0]['profession']=="Nursery and Greenhouse Manager"){echo "selected";} ?> value="Nursery and Greenhouse Manager">Nursery and Greenhouse Manager</option>
										<option <?php if($get_profile_details[0]['profession']=="Nursery and Greenhouse Managers"){echo "selected";} ?> value="Nursery and Greenhouse Managers">Nursery and Greenhouse Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Nursery Workers"){echo "selected";} ?> value="Nursery Workers">Nursery Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Nursing Aides, Orderlies, and Attendants"){echo "selected";} ?> value="Nursing Aides, Orderlies, and Attendants">Nursing Aides, Orderlies, and Attendants</option>
										<option <?php if($get_profile_details[0]['profession']=="Nursing Assistants"){echo "selected";} ?> value="Nursing Assistants">Nursing Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Nursing Instructors and Teachers, Postsecondary"){echo "selected";} ?> value="Nursing Instructors and Teachers, Postsecondary">Nursing Instructors and Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Obstetricians and Gynecologists"){echo "selected";} ?> value="Obstetricians and Gynecologists">Obstetricians and Gynecologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Occupational Health and Safety Specialists"){echo "selected";} ?> value="Occupational Health and Safety Specialists">Occupational Health and Safety Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Occupational Health and Safety Technicians"){echo "selected";} ?> value="Occupational Health and Safety Technicians">Occupational Health and Safety Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Occupational Therapist Aides"){echo "selected";} ?> value="Occupational Therapist Aides">Occupational Therapist Aides</option>
										<option <?php if($get_profile_details[0]['profession']=="Occupational Therapist Assistants"){echo "selected";} ?> value="Occupational Therapist Assistants">Occupational Therapist Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Occupational Therapists"){echo "selected";} ?> value="Occupational Therapists">Occupational Therapists</option>
										<option <?php if($get_profile_details[0]['profession']=="Office and Administrative Support Workers, All Other"){echo "selected";} ?> value="Office and Administrative Support Workers, All Other">Office and Administrative Support Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Office Clerks, General"){echo "selected";} ?> value="Office Clerks, General">Office Clerks, General</option>
										<option <?php if($get_profile_details[0]['profession']=="Office Machine and Cash Register Servicers"){echo "selected";} ?> value="Office Machine and Cash Register Servicers">Office Machine and Cash Register Servicers</option>
										<option <?php if($get_profile_details[0]['profession']=="Office Machine Operators, Except Computer"){echo "selected";} ?> value="Office Machine Operators, Except Computer">Office Machine Operators, Except Computer</option>
										<option <?php if($get_profile_details[0]['profession']=="Offset Lithographic Press Setters and Set-Up Operators"){echo "selected";} ?> value="Offset Lithographic Press Setters and Set-Up Operators">Offset Lithographic Press Setters and Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Online Merchants"){echo "selected";} ?> value="Online Merchants">Online Merchants</option>
										<option <?php if($get_profile_details[0]['profession']=="Operating Engineers"){echo "selected";} ?> value="Operating Engineers">Operating Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Operating Engineers and Other Construction Equipment Operators"){echo "selected";} ?> value="Operating Engineers and Other Construction Equipment Operators">Operating Engineers and Other Construction Equipment Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Operations Research Analysts"){echo "selected";} ?> value="Operations Research Analysts">Operations Research Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Ophthalmic Laboratory Technicians"){echo "selected";} ?> value="Ophthalmic Laboratory Technicians">Ophthalmic Laboratory Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Ophthalmic Medical Technicians"){echo "selected";} ?> value="Ophthalmic Medical Technicians">Ophthalmic Medical Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Ophthalmic Medical Technologists"){echo "selected";} ?> value="Ophthalmic Medical Technologists">Ophthalmic Medical Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Ophthalmologists"){echo "selected";} ?> value="Ophthalmologists">Ophthalmologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Optical Instrument Assemblers"){echo "selected";} ?> value="Optical Instrument Assemblers">Optical Instrument Assemblers</option>
										<option <?php if($get_profile_details[0]['profession']=="Opticians, Dispensing"){echo "selected";} ?> value="Opticians, Dispensing">Opticians, Dispensing</option>
										<option <?php if($get_profile_details[0]['profession']=="Optometrists"){echo "selected";} ?> value="Optometrists">Optometrists</option>
										<option <?php if($get_profile_details[0]['profession']=="Oral and Maxillofacial Surgeons"){echo "selected";} ?> value="Oral and Maxillofacial Surgeons">Oral and Maxillofacial Surgeons</option>
										<option <?php if($get_profile_details[0]['profession']=="Order Clerks"){echo "selected";} ?> value="Order Clerks">Order Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Order Fillers, Wholesale and Retail Sales"){echo "selected";} ?> value="Order Fillers, Wholesale and Retail Sales">Order Fillers, Wholesale and Retail Sales</option>
										<option <?php if($get_profile_details[0]['profession']=="Orderlies"){echo "selected";} ?> value="Orderlies">Orderlies</option>
										<option <?php if($get_profile_details[0]['profession']=="Ordinary Seamen and Marine Oilers"){echo "selected";} ?> value="Ordinary Seamen and Marine Oilers">Ordinary Seamen and Marine Oilers</option>
										<option <?php if($get_profile_details[0]['profession']=="Orthodontists"){echo "selected";} ?> value="Orthodontists">Orthodontists</option>
										<option <?php if($get_profile_details[0]['profession']=="Orthoptists"){echo "selected";} ?> value="Orthoptists">Orthoptists</option>
										<option <?php if($get_profile_details[0]['profession']=="Orthotists and Prosthetists"){echo "selected";} ?> value="Orthotists and Prosthetists">Orthotists and Prosthetists</option>
										<option <?php if($get_profile_details[0]['profession']=="Outdoor Power Equipment and Other Small Engine Mechanics"){echo "selected";} ?> value="Outdoor Power Equipment and Other Small Engine Mechanics">Outdoor Power Equipment and Other Small Engine Mechanics</option>
										<option <?php if($get_profile_details[0]['profession']=="Packaging and Filling Machine Operators and Tenders"){echo "selected";} ?> value="Packaging and Filling Machine Operators and Tenders">Packaging and Filling Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Packers and Packagers, Hand"){echo "selected";} ?> value="Packers and Packagers, Hand">Packers and Packagers, Hand</option>
										<option <?php if($get_profile_details[0]['profession']=="Painters and Illustrators"){echo "selected";} ?> value="Painters and Illustrators">Painters and Illustrators</option>
										<option <?php if($get_profile_details[0]['profession']=="Painters, Construction and Maintenance"){echo "selected";} ?> value="Painters, Construction and Maintenance">Painters, Construction and Maintenance</option>
										<option <?php if($get_profile_details[0]['profession']=="Painters, Transportation Equipment"){echo "selected";} ?> value="Painters, Transportation Equipment">Painters, Transportation Equipment</option>
										<option <?php if($get_profile_details[0]['profession']=="Painting, Coating, and Decorating Workers"){echo "selected";} ?> value="Painting, Coating, and Decorating Workers">Painting, Coating, and Decorating Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Pantograph Engravers"){echo "selected";} ?> value="Pantograph Engravers">Pantograph Engravers</option>
										<option <?php if($get_profile_details[0]['profession']=="Paper Goods Machine Setters, Operators, and Tenders"){echo "selected";} ?> value="Paper Goods Machine Setters, Operators, and Tenders">Paper Goods Machine Setters, Operators, and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Paperhangers"){echo "selected";} ?> value="Paperhangers">Paperhangers</option>
										<option <?php if($get_profile_details[0]['profession']=="Paralegals and Legal Assistants"){echo "selected";} ?> value="Paralegals and Legal Assistants">Paralegals and Legal Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Park Naturalists"){echo "selected";} ?> value="Park Naturalists">Park Naturalists</option>
										<option <?php if($get_profile_details[0]['profession']=="Parking Enforcement Workers"){echo "selected";} ?> value="Parking Enforcement Workers">Parking Enforcement Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Parking Lot Attendants"){echo "selected";} ?> value="Parking Lot Attendants">Parking Lot Attendants</option>
										<option <?php if($get_profile_details[0]['profession']=="Parts Salespersons"){echo "selected";} ?> value="Parts Salespersons">Parts Salespersons</option>
										<option <?php if($get_profile_details[0]['profession']=="Paste-Up Workers"){echo "selected";} ?> value="Paste-Up Workers">Paste-Up Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Pathologists"){echo "selected";} ?> value="Pathologists">Pathologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Patient Representatives"){echo "selected";} ?> value="Patient Representatives">Patient Representatives</option>
										<option <?php if($get_profile_details[0]['profession']=="Patternmakers, Metal and Plastic"){echo "selected";} ?> value="Patternmakers, Metal and Plastic">Patternmakers, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Patternmakers, Wood"){echo "selected";} ?> value="Patternmakers, Wood">Patternmakers, Wood</option>
										<option <?php if($get_profile_details[0]['profession']=="Paving, Surfacing, and Tamping Equipment Operators"){echo "selected";} ?> value="Paving, Surfacing, and Tamping Equipment Operators">Paving, Surfacing, and Tamping Equipment Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Payroll and Timekeeping Clerks"){echo "selected";} ?> value="Payroll and Timekeeping Clerks">Payroll and Timekeeping Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Pediatricians, General"){echo "selected";} ?> value="Pediatricians, General">Pediatricians, General</option>
										<option <?php if($get_profile_details[0]['profession']=="Percussion Instrument Repairers and Tuners"){echo "selected";} ?> value="Percussion Instrument Repairers and Tuners">Percussion Instrument Repairers and Tuners</option>
										<option <?php if($get_profile_details[0]['profession']=="Personal and Home Care Aides"){echo "selected";} ?> value="Personal and Home Care Aides">Personal and Home Care Aides</option>
										<option <?php if($get_profile_details[0]['profession']=="Personal Care and Service Workers, All Other"){echo "selected";} ?> value="Personal Care and Service Workers, All Other">Personal Care and Service Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Personal Financial Advisors"){echo "selected";} ?> value="Personal Financial Advisors">Personal Financial Advisors</option>
										<option <?php if($get_profile_details[0]['profession']=="Personnel Recruiters"){echo "selected";} ?> value="Personnel Recruiters">Personnel Recruiters</option>
										<option <?php if($get_profile_details[0]['profession']=="Pest Control Workers"){echo "selected";} ?> value="Pest Control Workers">Pest Control Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Pesticide Handlers, Sprayers, and Applicators, Vegetation"){echo "selected";} ?> value="Pesticide Handlers, Sprayers, and Applicators, Vegetation">Pesticide Handlers, Sprayers, and Applicators, Vegetation</option>
										<option <?php if($get_profile_details[0]['profession']=="Petroleum Engineers"){echo "selected";} ?> value="Petroleum Engineers">Petroleum Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Petroleum Pump System Operators"){echo "selected";} ?> value="Petroleum Pump System Operators">Petroleum Pump System Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Petroleum Pump System Operators, Refinery Operators, and Gaugers"){echo "selected";} ?> value="Petroleum Pump System Operators, Refinery Operators, and Gaugers">Petroleum Pump System Operators, Refinery Operators, and Gaugers</option>
										<option <?php if($get_profile_details[0]['profession']=="Petroleum Refinery and Control Panel Operators"){echo "selected";} ?> value="Petroleum Refinery and Control Panel Operators">Petroleum Refinery and Control Panel Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Pewter Casters and Finishers"){echo "selected";} ?> value="Pewter Casters and Finishers">Pewter Casters and Finishers</option>
										<option <?php if($get_profile_details[0]['profession']=="Pharmacists"){echo "selected";} ?> value="Pharmacists">Pharmacists</option>
										<option <?php if($get_profile_details[0]['profession']=="Pharmacy Aides"){echo "selected";} ?> value="Pharmacy Aides">Pharmacy Aides</option>
										<option <?php if($get_profile_details[0]['profession']=="Pharmacy Technicians"){echo "selected";} ?> value="Pharmacy Technicians">Pharmacy Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Philosophy and Religion Teachers, Postsecondary"){echo "selected";} ?> value="Philosophy and Religion Teachers, Postsecondary">Philosophy and Religion Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Phlebotomists"){echo "selected";} ?> value="Phlebotomists">Phlebotomists</option>
										<option <?php if($get_profile_details[0]['profession']=="Photoengravers"){echo "selected";} ?> value="Photoengravers">Photoengravers</option>
										<option <?php if($get_profile_details[0]['profession']=="Photoengraving and Lithographing Machine Operators and Tenders"){echo "selected";} ?> value="Photoengraving and Lithographing Machine Operators and Tenders">Photoengraving and Lithographing Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Photographers"){echo "selected";} ?> value="Photographers">Photographers</option>
										<option <?php if($get_profile_details[0]['profession']=="Photographers, Scientific"){echo "selected";} ?> value="Photographers, Scientific">Photographers, Scientific</option>
										<option <?php if($get_profile_details[0]['profession']=="Photographic Hand Developers"){echo "selected";} ?> value="Photographic Hand Developers">Photographic Hand Developers</option>
										<option <?php if($get_profile_details[0]['profession']=="Photographic Process Workers"){echo "selected";} ?> value="Photographic Process Workers">Photographic Process Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Photographic Process Workers and Processing Machine Operators"){echo "selected";} ?> value="Photographic Process Workers and Processing Machine Operators">Photographic Process Workers and Processing Machine Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Photographic Processing Machine Operators"){echo "selected";} ?> value="Photographic Processing Machine Operators">Photographic Processing Machine Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Photographic Reproduction Technicians"){echo "selected";} ?> value="Photographic Reproduction Technicians">Photographic Reproduction Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Photographic Retouchers and Restorers"){echo "selected";} ?> value="Photographic Retouchers and Restorers">Photographic Retouchers and Restorers</option>
										<option <?php if($get_profile_details[0]['profession']=="Photonics Engineers"){echo "selected";} ?> value="Photonics Engineers">Photonics Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Photonics Technicians"){echo "selected";} ?> value="Photonics Technicians">Photonics Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Physical Medicine and Rehabilitation Physicians"){echo "selected";} ?> value="Physical Medicine and Rehabilitation Physicians">Physical Medicine and Rehabilitation Physicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Physical Scientists, All Other"){echo "selected";} ?> value="Physical Scientists, All Other">Physical Scientists, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Physical Therapist Aides"){echo "selected";} ?> value="Physical Therapist Aides">Physical Therapist Aides</option>
										<option <?php if($get_profile_details[0]['profession']=="Physical Therapist Assistants"){echo "selected";} ?> value="Physical Therapist Assistants">Physical Therapist Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Physical Therapists"){echo "selected";} ?> value="Physical Therapists">Physical Therapists</option>
										<option <?php if($get_profile_details[0]['profession']=="Physician Assistants"){echo "selected";} ?> value="Physician Assistants">Physician Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Physicians and Surgeons, All Other"){echo "selected";} ?> value="Physicians and Surgeons, All Other">Physicians and Surgeons, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Physicists"){echo "selected";} ?> value="Physicists">Physicists</option>
										<option <?php if($get_profile_details[0]['profession']=="Physics Teachers, Postsecondary"){echo "selected";} ?> value="Physics Teachers, Postsecondary">Physics Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Pile-Driver Operators"){echo "selected";} ?> value="Pile-Driver Operators">Pile-Driver Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Pilots, Ship"){echo "selected";} ?> value="Pilots, Ship">Pilots, Ship</option>
										<option <?php if($get_profile_details[0]['profession']=="Pipe Fitters"){echo "selected";} ?> value="Pipe Fitters">Pipe Fitters</option>
										<option <?php if($get_profile_details[0]['profession']=="Pipelayers"){echo "selected";} ?> value="Pipelayers">Pipelayers</option>
										<option <?php if($get_profile_details[0]['profession']=="Pipelaying Fitters"){echo "selected";} ?> value="Pipelaying Fitters">Pipelaying Fitters</option>
										<option <?php if($get_profile_details[0]['profession']=="Plant and System Operators, All Other"){echo "selected";} ?> value="Plant and System Operators, All Other">Plant and System Operators, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Plant Scientists"){echo "selected";} ?> value="Plant Scientists">Plant Scientists</option>
										<option <?php if($get_profile_details[0]['profession']=="Plasterers and Stucco Masons"){echo "selected";} ?> value="Plasterers and Stucco Masons">Plasterers and Stucco Masons</option>
										<option <?php if($get_profile_details[0]['profession']=="Plastic Molding and Casting Machine Operators and Tenders"){echo "selected";} ?> value="Plastic Molding and Casting Machine Operators and Tenders">Plastic Molding and Casting Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Plastic Molding and Casting Machine Setters and Set-Up Operators"){echo "selected";} ?> value="Plastic Molding and Casting Machine Setters and Set-Up Operators">Plastic Molding and Casting Machine Setters and Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Plate Finishers"){echo "selected";} ?> value="Plate Finishers">Plate Finishers</option>
										<option <?php if($get_profile_details[0]['profession']=="Platemakers"){echo "selected";} ?> value="Platemakers">Platemakers</option>
										<option <?php if($get_profile_details[0]['profession']=="Plating and Coating Machine Setters, Operators, and Tenders, Metal and Plastic"){echo "selected";} ?> value="Plating and Coating Machine Setters, Operators, and Tenders, Metal and Plastic">Plating and Coating Machine Setters, Operators, and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Plumbers"){echo "selected";} ?> value="Plumbers">Plumbers</option>
										<option <?php if($get_profile_details[0]['profession']=="Plumbers, Pipefitters, and Steamfitters"){echo "selected";} ?> value="Plumbers, Pipefitters, and Steamfitters">Plumbers, Pipefitters, and Steamfitters</option>
										<option <?php if($get_profile_details[0]['profession']=="Podiatrists"){echo "selected";} ?> value="Podiatrists">Podiatrists</option>
										<option <?php if($get_profile_details[0]['profession']=="Poets and Lyricists"){echo "selected";} ?> value="Poets and Lyricists">Poets and Lyricists</option>
										<option <?php if($get_profile_details[0]['profession']=="Poets, Lyricists and Creative Writers"){echo "selected";} ?> value="Poets, Lyricists and Creative Writers">Poets, Lyricists and Creative Writers</option>
										<option <?php if($get_profile_details[0]['profession']=="Police and Sheriffs Patrol Officers"){echo "selected";} ?> value="Police and Sheriffs Patrol Officers">Police and Sheriffs Patrol Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="Police Detectives"){echo "selected";} ?> value="Police Detectives">Police Detectives</option>
										<option <?php if($get_profile_details[0]['profession']=="Police Identification and Records Officers"){echo "selected";} ?> value="Police Identification and Records Officers">Police Identification and Records Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="Police Patrol Officers"){echo "selected";} ?> value="Police Patrol Officers">Police Patrol Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="Police, Fire, and Ambulance Dispatchers"){echo "selected";} ?> value="Police, Fire, and Ambulance Dispatchers">Police, Fire, and Ambulance Dispatchers</option>
										<option <?php if($get_profile_details[0]['profession']=="Political Science Teachers, Postsecondary"){echo "selected";} ?> value="Political Science Teachers, Postsecondary">Political Science Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Political Scientists"){echo "selected";} ?> value="Political Scientists">Political Scientists</option>
										<option <?php if($get_profile_details[0]['profession']=="Postal Service Clerks"){echo "selected";} ?> value="Postal Service Clerks">Postal Service Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Postal Service Mail Carriers"){echo "selected";} ?> value="Postal Service Mail Carriers">Postal Service Mail Carriers</option>
										<option <?php if($get_profile_details[0]['profession']=="Postal Service Mail Sorters, Processors, and Processing Machine Operators"){echo "selected";} ?> value="Postal Service Mail Sorters, Processors, and Processing Machine Operators">Postal Service Mail Sorters, Processors, and Processing Machine Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Postmasters and Mail Superintendents"){echo "selected";} ?> value="Postmasters and Mail Superintendents">Postmasters and Mail Superintendents</option>
										<option <?php if($get_profile_details[0]['profession']=="Postsecondary Teachers, All Other"){echo "selected";} ?> value="Postsecondary Teachers, All Other">Postsecondary Teachers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Potters"){echo "selected";} ?> value="Potters">Potters</option>
										<option <?php if($get_profile_details[0]['profession']=="Pourers and Casters, Metal"){echo "selected";} ?> value="Pourers and Casters, Metal">Pourers and Casters, Metal</option>
										<option <?php if($get_profile_details[0]['profession']=="Power Distributors and Dispatchers"){echo "selected";} ?> value="Power Distributors and Dispatchers">Power Distributors and Dispatchers</option>
										<option <?php if($get_profile_details[0]['profession']=="Power Generating Plant Operators, Except Auxiliary Equipment Operators"){echo "selected";} ?> value="Power Generating Plant Operators, Except Auxiliary Equipment Operators">Power Generating Plant Operators, Except Auxiliary Equipment Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Power Plant Operators"){echo "selected";} ?> value="Power Plant Operators">Power Plant Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Precious Metal Workers"){echo "selected";} ?> value="Precious Metal Workers">Precious Metal Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Precision Agriculture Technicians"){echo "selected";} ?> value="Precision Agriculture Technicians">Precision Agriculture Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Precision Devices Inspectors and Testers"){echo "selected";} ?> value="Precision Devices Inspectors and Testers">Precision Devices Inspectors and Testers</option>
										<option <?php if($get_profile_details[0]['profession']=="Precision Dyers"){echo "selected";} ?> value="Precision Dyers">Precision Dyers</option>
										<option <?php if($get_profile_details[0]['profession']=="Precision Etchers and Engravers, Hand or Machine"){echo "selected";} ?> value="Precision Etchers and Engravers, Hand or Machine">Precision Etchers and Engravers, Hand or Machine</option>
										<option <?php if($get_profile_details[0]['profession']=="Precision Instrument and Equipment Repairers, All Other"){echo "selected";} ?> value="Precision Instrument and Equipment Repairers, All Other">Precision Instrument and Equipment Repairers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Precision Lens Grinders and Polishers"){echo "selected";} ?> value="Precision Lens Grinders and Polishers">Precision Lens Grinders and Polishers</option>
										<option <?php if($get_profile_details[0]['profession']=="Precision Mold and Pattern Casters, except Nonferrous Metals"){echo "selected";} ?> value="Precision Mold and Pattern Casters, except Nonferrous Metals">Precision Mold and Pattern Casters, except Nonferrous Metals</option>
										<option <?php if($get_profile_details[0]['profession']=="Precision Pattern and Die Casters, Nonferrous Metals"){echo "selected";} ?> value="Precision Pattern and Die Casters, Nonferrous Metals">Precision Pattern and Die Casters, Nonferrous Metals</option>
										<option <?php if($get_profile_details[0]['profession']=="Precision Printing Workers"){echo "selected";} ?> value="Precision Printing Workers">Precision Printing Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Prepress Technician"){echo "selected";} ?> value="Prepress Technician">Prepress Technician</option>
										<option <?php if($get_profile_details[0]['profession']=="Prepress Technicians and Workers"){echo "selected";} ?> value="Prepress Technicians and Workers">Prepress Technicians and Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Preschool Teachers, Except Special Education"){echo "selected";} ?> value="Preschool Teachers, Except Special Education">Preschool Teachers, Except Special Education</option>
										<option <?php if($get_profile_details[0]['profession']=="Press and Press Brake Machine Setters and Set-Up Operators, Metal and Plastic"){echo "selected";} ?> value="Press and Press Brake Machine Setters and Set-Up Operators, Metal and Plastic">Press and Press Brake Machine Setters and Set-Up Operators, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Pressers, Delicate Fabrics"){echo "selected";} ?> value="Pressers, Delicate Fabrics">Pressers, Delicate Fabrics</option>
										<option <?php if($get_profile_details[0]['profession']=="Pressers, Hand"){echo "selected";} ?> value="Pressers, Hand">Pressers, Hand</option>
										<option <?php if($get_profile_details[0]['profession']=="Pressers, Textile, Garment, and Related Materials"){echo "selected";} ?> value="Pressers, Textile, Garment, and Related Materials">Pressers, Textile, Garment, and Related Materials</option>
										<option <?php if($get_profile_details[0]['profession']=="Pressing Machine Operators and Tenders- Textile, Garment, and Related Materials"){echo "selected";} ?> value="Pressing Machine Operators and Tenders- Textile, Garment, and Related Materials">Pressing Machine Operators and Tenders- Textile, Garment, and Related Materials</option>
										<option <?php if($get_profile_details[0]['profession']=="Pressure Vessel Inspectors"){echo "selected";} ?> value="Pressure Vessel Inspectors">Pressure Vessel Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Preventive Medicine Physicians"){echo "selected";} ?> value="Preventive Medicine Physicians">Preventive Medicine Physicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Print Binding and Finishing Workers"){echo "selected";} ?> value="Print Binding and Finishing Workers">Print Binding and Finishing Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Printing Machine Operators"){echo "selected";} ?> value="Printing Machine Operators">Printing Machine Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Printing Press Machine Operators and Tenders"){echo "selected";} ?> value="Printing Press Machine Operators and Tenders">Printing Press Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Printing Press Operators"){echo "selected";} ?> value="Printing Press Operators">Printing Press Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Private Detectives and Investigators"){echo "selected";} ?> value="Private Detectives and Investigators">Private Detectives and Investigators</option>
										<option <?php if($get_profile_details[0]['profession']=="Private Sector Executives"){echo "selected";} ?> value="Private Sector Executives">Private Sector Executives</option>
										<option <?php if($get_profile_details[0]['profession']=="Probation Officers and Correctional Treatment Specialists"){echo "selected";} ?> value="Probation Officers and Correctional Treatment Specialists">Probation Officers and Correctional Treatment Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Procurement Clerks"){echo "selected";} ?> value="Procurement Clerks">Procurement Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Producers"){echo "selected";} ?> value="Producers">Producers</option>
										<option <?php if($get_profile_details[0]['profession']=="Producers and Directors"){echo "selected";} ?> value="Producers and Directors">Producers and Directors</option>
										<option <?php if($get_profile_details[0]['profession']=="Product Safety Engineers"){echo "selected";} ?> value="Product Safety Engineers">Product Safety Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Production Helpers"){echo "selected";} ?> value="Production Helpers">Production Helpers</option>
										<option <?php if($get_profile_details[0]['profession']=="Production Inspectors, Testers, Graders, Sorters, Samplers, Weighers"){echo "selected";} ?> value="Production Inspectors, Testers, Graders, Sorters, Samplers, Weighers">Production Inspectors, Testers, Graders, Sorters, Samplers, Weighers</option>
										<option <?php if($get_profile_details[0]['profession']=="Production Laborers"){echo "selected";} ?> value="Production Laborers">Production Laborers</option>
										<option <?php if($get_profile_details[0]['profession']=="Production Workers, All Other"){echo "selected";} ?> value="Production Workers, All Other">Production Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Production, Planning, and Expediting Clerks"){echo "selected";} ?> value="Production, Planning, and Expediting Clerks">Production, Planning, and Expediting Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Professional Photographers"){echo "selected";} ?> value="Professional Photographers">Professional Photographers</option>
										<option <?php if($get_profile_details[0]['profession']=="Program Directors"){echo "selected";} ?> value="Program Directors">Program Directors</option>
										<option <?php if($get_profile_details[0]['profession']=="Proofreaders and Copy Markers"){echo "selected";} ?> value="Proofreaders and Copy Markers">Proofreaders and Copy Markers</option>
										<option <?php if($get_profile_details[0]['profession']=="Property, Real Estate, and Community Association Managers"){echo "selected";} ?> value="Property, Real Estate, and Community Association Managers">Property, Real Estate, and Community Association Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Prosthodontists"){echo "selected";} ?> value="Prosthodontists">Prosthodontists</option>
										<option <?php if($get_profile_details[0]['profession']=="Protective Service Workers, All Other"){echo "selected";} ?> value="Protective Service Workers, All Other">Protective Service Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Psychiatric Aides"){echo "selected";} ?> value="Psychiatric Aides">Psychiatric Aides</option>
										<option <?php if($get_profile_details[0]['profession']=="Psychiatric Technicians"){echo "selected";} ?> value="Psychiatric Technicians">Psychiatric Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Psychiatrists"){echo "selected";} ?> value="Psychiatrists">Psychiatrists</option>
										<option <?php if($get_profile_details[0]['profession']=="Psychologists, All Other"){echo "selected";} ?> value="Psychologists, All Other">Psychologists, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Psychology Teachers, Postsecondary"){echo "selected";} ?> value="Psychology Teachers, Postsecondary">Psychology Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Public Address System and Other Announcers"){echo "selected";} ?> value="Public Address System and Other Announcers">Public Address System and Other Announcers</option>
										<option <?php if($get_profile_details[0]['profession']=="Public Relations Managers"){echo "selected";} ?> value="Public Relations Managers">Public Relations Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Public Relations Specialists"){echo "selected";} ?> value="Public Relations Specialists">Public Relations Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Public Transportation Inspectors"){echo "selected";} ?> value="Public Transportation Inspectors">Public Transportation Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Pump Operators, Except Wellhead Pumpers"){echo "selected";} ?> value="Pump Operators, Except Wellhead Pumpers">Pump Operators, Except Wellhead Pumpers</option>
										<option <?php if($get_profile_details[0]['profession']=="Punching Machine Setters and Set-Up Operators, Metal and Plastic"){echo "selected";} ?> value="Punching Machine Setters and Set-Up Operators, Metal and Plastic">Punching Machine Setters and Set-Up Operators, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Purchasing Agents and Buyers, Farm Products"){echo "selected";} ?> value="Purchasing Agents and Buyers, Farm Products">Purchasing Agents and Buyers, Farm Products</option>
										<option <?php if($get_profile_details[0]['profession']=="Purchasing Agents, Except Wholesale, Retail, and Farm Products"){echo "selected";} ?> value="Purchasing Agents, Except Wholesale, Retail, and Farm Products">Purchasing Agents, Except Wholesale, Retail, and Farm Products</option>
										<option <?php if($get_profile_details[0]['profession']=="Purchasing Managers"){echo "selected";} ?> value="Purchasing Managers">Purchasing Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Quality Control Analysts"){echo "selected";} ?> value="Quality Control Analysts">Quality Control Analysts</option>
										<option <?php if($get_profile_details[0]['profession']=="Quality Control Systems Managers"){echo "selected";} ?> value="Quality Control Systems Managers">Quality Control Systems Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Radar and Sonar Technicians"){echo "selected";} ?> value="Radar and Sonar Technicians">Radar and Sonar Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Radiation Therapists"){echo "selected";} ?> value="Radiation Therapists">Radiation Therapists</option>
										<option <?php if($get_profile_details[0]['profession']=="Radio and Television Announcers"){echo "selected";} ?> value="Radio and Television Announcers">Radio and Television Announcers</option>
										<option <?php if($get_profile_details[0]['profession']=="Radio Frequency Identification Device Specialists"){echo "selected";} ?> value="Radio Frequency Identification Device Specialists">Radio Frequency Identification Device Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Radio Mechanic"){echo "selected";} ?> value="Radio Mechanic">Radio Mechanic</option>
										<option <?php if($get_profile_details[0]['profession']=="Radio Mechanics"){echo "selected";} ?> value="Radio Mechanics">Radio Mechanics</option>
										<option <?php if($get_profile_details[0]['profession']=="Radio Operators"){echo "selected";} ?> value="Radio Operators">Radio Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Radiologic Technician"){echo "selected";} ?> value="Radiologic Technician">Radiologic Technician</option>
										<option <?php if($get_profile_details[0]['profession']=="Radiologic Technicians"){echo "selected";} ?> value="Radiologic Technicians">Radiologic Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Radiologic Technologists"){echo "selected";} ?> value="Radiologic Technologists">Radiologic Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Radiologic Technologists and Technicians"){echo "selected";} ?> value="Radiologic Technologists and Technicians">Radiologic Technologists and Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Radiologists"){echo "selected";} ?> value="Radiologists">Radiologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Rail Car Repairers"){echo "selected";} ?> value="Rail Car Repairers">Rail Car Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Rail Transportation Workers, All Other"){echo "selected";} ?> value="Rail Transportation Workers, All Other">Rail Transportation Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Rail Yard Engineers, Dinkey Operators, and Hostlers"){echo "selected";} ?> value="Rail Yard Engineers, Dinkey Operators, and Hostlers">Rail Yard Engineers, Dinkey Operators, and Hostlers</option>
										<option <?php if($get_profile_details[0]['profession']=="Railroad Brake, Signal, and Switch Operators"){echo "selected";} ?> value="Railroad Brake, Signal, and Switch Operators">Railroad Brake, Signal, and Switch Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Railroad Conductors and Yardmasters"){echo "selected";} ?> value="Railroad Conductors and Yardmasters">Railroad Conductors and Yardmasters</option>
										<option <?php if($get_profile_details[0]['profession']=="Railroad Inspectors"){echo "selected";} ?> value="Railroad Inspectors">Railroad Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Railroad Yard Workers"){echo "selected";} ?> value="Railroad Yard Workers">Railroad Yard Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Rail-Track Laying and Maintenance Equipment Operators"){echo "selected";} ?> value="Rail-Track Laying and Maintenance Equipment Operators">Rail-Track Laying and Maintenance Equipment Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Range Managers"){echo "selected";} ?> value="Range Managers">Range Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Real Estate Brokers"){echo "selected";} ?> value="Real Estate Brokers">Real Estate Brokers</option>
										<option <?php if($get_profile_details[0]['profession']=="Real Estate Sales Agents"){echo "selected";} ?> value="Real Estate Sales Agents">Real Estate Sales Agents</option>
										<option <?php if($get_profile_details[0]['profession']=="Receptionists and Information Clerks"){echo "selected";} ?> value="Receptionists and Information Clerks">Receptionists and Information Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Recreation and Fitness Studies Teachers, Postsecondary"){echo "selected";} ?> value="Recreation and Fitness Studies Teachers, Postsecondary">Recreation and Fitness Studies Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Recreation Workers"){echo "selected";} ?> value="Recreation Workers">Recreation Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Recreational Therapists"){echo "selected";} ?> value="Recreational Therapists">Recreational Therapists</option>
										<option <?php if($get_profile_details[0]['profession']=="Recreational Vehicle Service Technicians"){echo "selected";} ?> value="Recreational Vehicle Service Technicians">Recreational Vehicle Service Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Recycling and Reclamation Workers"){echo "selected";} ?> value="Recycling and Reclamation Workers">Recycling and Reclamation Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Recycling Coordinators"){echo "selected";} ?> value="Recycling Coordinators">Recycling Coordinators</option>
										<option <?php if($get_profile_details[0]['profession']=="Reed or Wind Instrument Repairers and Tuners"){echo "selected";} ?> value="Reed or Wind Instrument Repairers and Tuners">Reed or Wind Instrument Repairers and Tuners</option>
										<option <?php if($get_profile_details[0]['profession']=="Refractory Materials Repairers, Except Brickmasons"){echo "selected";} ?> value="Refractory Materials Repairers, Except Brickmasons">Refractory Materials Repairers, Except Brickmasons</option>
										<option <?php if($get_profile_details[0]['profession']=="Refrigeration Mechanics"){echo "selected";} ?> value="Refrigeration Mechanics">Refrigeration Mechanics</option>
										<option <?php if($get_profile_details[0]['profession']=="Refuse and Recyclable Material Collectors"){echo "selected";} ?> value="Refuse and Recyclable Material Collectors">Refuse and Recyclable Material Collectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Registered Nurses"){echo "selected";} ?> value="Registered Nurses">Registered Nurses</option>
										<option <?php if($get_profile_details[0]['profession']=="Registered Nurses"){echo "selected";} ?> value="Registered Nurses">Registered Nurses</option>
										<option <?php if($get_profile_details[0]['profession']=="Regulatory Affairs Managers"){echo "selected";} ?> value="Regulatory Affairs Managers">Regulatory Affairs Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Regulatory Affairs Specialists"){echo "selected";} ?> value="Regulatory Affairs Specialists">Regulatory Affairs Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Rehabilitation Counselors"){echo "selected";} ?> value="Rehabilitation Counselors">Rehabilitation Counselors</option>
										<option <?php if($get_profile_details[0]['profession']=="Reinforcing Iron and Rebar Workers"){echo "selected";} ?> value="Reinforcing Iron and Rebar Workers">Reinforcing Iron and Rebar Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Religious Workers, All Other"){echo "selected";} ?> value="Religious Workers, All Other">Religious Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Remote Sensing Scientists and Technologists"){echo "selected";} ?> value="Remote Sensing Scientists and Technologists">Remote Sensing Scientists and Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Remote Sensing Technicians"){echo "selected";} ?> value="Remote Sensing Technicians">Remote Sensing Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Reporters and Correspondents"){echo "selected";} ?> value="Reporters and Correspondents">Reporters and Correspondents</option>
										<option <?php if($get_profile_details[0]['profession']=="Reservation and Transportation Ticket Agents"){echo "selected";} ?> value="Reservation and Transportation Ticket Agents">Reservation and Transportation Ticket Agents</option>
										<option <?php if($get_profile_details[0]['profession']=="Reservation and Transportation Ticket Agents and Travel Clerks"){echo "selected";} ?> value="Reservation and Transportation Ticket Agents and Travel Clerks">Reservation and Transportation Ticket Agents and Travel Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Residential Advisors"){echo "selected";} ?> value="Residential Advisors">Residential Advisors</option>
										<option <?php if($get_profile_details[0]['profession']=="Respiratory Therapists"){echo "selected";} ?> value="Respiratory Therapists">Respiratory Therapists</option>
										<option <?php if($get_profile_details[0]['profession']=="Respiratory Therapy Technicians"){echo "selected";} ?> value="Respiratory Therapy Technicians">Respiratory Therapy Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Retail Loss Prevention Specialists"){echo "selected";} ?> value="Retail Loss Prevention Specialists">Retail Loss Prevention Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Retail Salespersons"){echo "selected";} ?> value="Retail Salespersons">Retail Salespersons</option>
										<option <?php if($get_profile_details[0]['profession']=="Riggers"){echo "selected";} ?> value="Riggers">Riggers</option>
										<option <?php if($get_profile_details[0]['profession']=="Risk Management Specialists"){echo "selected";} ?> value="Risk Management Specialists">Risk Management Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Robotics Engineers"){echo "selected";} ?> value="Robotics Engineers">Robotics Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Robotics Technicians"){echo "selected";} ?> value="Robotics Technicians">Robotics Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Rock Splitters, Quarry"){echo "selected";} ?> value="Rock Splitters, Quarry">Rock Splitters, Quarry</option>
										<option <?php if($get_profile_details[0]['profession']=="Rolling Machine Setters, Operators, and Tenders, Metal and Plastic"){echo "selected";} ?> value="Rolling Machine Setters, Operators, and Tenders, Metal and Plastic">Rolling Machine Setters, Operators, and Tenders, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Roof Bolters, Mining"){echo "selected";} ?> value="Roof Bolters, Mining">Roof Bolters, Mining</option>
										<option <?php if($get_profile_details[0]['profession']=="Roofers"){echo "selected";} ?> value="Roofers">Roofers</option>
										<option <?php if($get_profile_details[0]['profession']=="Rotary Drill Operators, Oil and Gas"){echo "selected";} ?> value="Rotary Drill Operators, Oil and Gas">Rotary Drill Operators, Oil and Gas</option>
										<option <?php if($get_profile_details[0]['profession']=="Rough Carpenters"){echo "selected";} ?> value="Rough Carpenters">Rough Carpenters</option>
										<option <?php if($get_profile_details[0]['profession']=="Roustabouts, Oil and Gas"){echo "selected";} ?> value="Roustabouts, Oil and Gas">Roustabouts, Oil and Gas</option>
										<option <?php if($get_profile_details[0]['profession']=="Sailors and Marine Oilers"){echo "selected";} ?> value="Sailors and Marine Oilers">Sailors and Marine Oilers</option>
										<option <?php if($get_profile_details[0]['profession']=="Sales Agents, Financial Services"){echo "selected";} ?> value="Sales Agents, Financial Services">Sales Agents, Financial Services</option>
										<option <?php if($get_profile_details[0]['profession']=="Sales Agents, Securities and Commodities"){echo "selected";} ?> value="Sales Agents, Securities and Commodities">Sales Agents, Securities and Commodities</option>
										<option <?php if($get_profile_details[0]['profession']=="Sales and Related Workers, All Other"){echo "selected";} ?> value="Sales and Related Workers, All Other">Sales and Related Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Sales Engineers"){echo "selected";} ?> value="Sales Engineers">Sales Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Sales Managers"){echo "selected";} ?> value="Sales Managers">Sales Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Sales Representatives, Agricultural"){echo "selected";} ?> value="Sales Representatives, Agricultural">Sales Representatives, Agricultural</option>
										<option <?php if($get_profile_details[0]['profession']=="Sales Representatives, Chemical and Pharmaceutical"){echo "selected";} ?> value="Sales Representatives, Chemical and Pharmaceutical">Sales Representatives, Chemical and Pharmaceutical</option>
										<option <?php if($get_profile_details[0]['profession']=="Sales Representatives, Electrical--Electronic"){echo "selected";} ?> value="Sales Representatives, Electrical--Electronic">Sales Representatives, Electrical--Electronic</option>
										<option <?php if($get_profile_details[0]['profession']=="Sales Representatives, Instruments"){echo "selected";} ?> value="Sales Representatives, Instruments">Sales Representatives, Instruments</option>
										<option <?php if($get_profile_details[0]['profession']=="Sales Representatives, Mechanical Equipment and Supplies"){echo "selected";} ?> value="Sales Representatives, Mechanical Equipment and Supplies">Sales Representatives, Mechanical Equipment and Supplies</option>
										<option <?php if($get_profile_details[0]['profession']=="Sales Representatives, Medical"){echo "selected";} ?> value="Sales Representatives, Medical">Sales Representatives, Medical</option>
										<option <?php if($get_profile_details[0]['profession']=="Sales Representatives, Services, All Other"){echo "selected";} ?> value="Sales Representatives, Services, All Other">Sales Representatives, Services, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Sales Representatives, Wholesale and Manufacturing, Except Technical and Scientific Products"){echo "selected";} ?> value="Sales Representatives, Wholesale and Manufacturing, Except Technical and Scientific Products">Sales Representatives, Wholesale and Manufacturing, Except Technical and Scientific Products</option>
										<option <?php if($get_profile_details[0]['profession']=="Sales Representatives, Wholesale and Manufacturing, Technical and Scientific Products"){echo "selected";} ?> value="Sales Representatives, Wholesale and Manufacturing, Technical and Scientific Products">Sales Representatives, Wholesale and Manufacturing, Technical and Scientific Products</option>
										<option <?php if($get_profile_details[0]['profession']=="Sawing Machine Operators and Tenders"){echo "selected";} ?> value="Sawing Machine Operators and Tenders">Sawing Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Sawing Machine Setters and Set-Up Operators"){echo "selected";} ?> value="Sawing Machine Setters and Set-Up Operators">Sawing Machine Setters and Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Sawing Machine Setters, Operators, and Tenders, Wood"){echo "selected";} ?> value="Sawing Machine Setters, Operators, and Tenders, Wood">Sawing Machine Setters, Operators, and Tenders, Wood</option>
										<option <?php if($get_profile_details[0]['profession']=="Sawing Machine Tool Setters and Set-Up Operators, Metal and Plastic"){echo "selected";} ?> value="Sawing Machine Tool Setters and Set-Up Operators, Metal and Plastic">Sawing Machine Tool Setters and Set-Up Operators, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Scanner Operators"){echo "selected";} ?> value="Scanner Operators">Scanner Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Screen Printing Machine Setters and Set-Up Operators"){echo "selected";} ?> value="Screen Printing Machine Setters and Set-Up Operators">Screen Printing Machine Setters and Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Sculptors"){echo "selected";} ?> value="Sculptors">Sculptors</option>
										<option <?php if($get_profile_details[0]['profession']=="Search Marketing Strategists"){echo "selected";} ?> value="Search Marketing Strategists">Search Marketing Strategists</option>
										<option <?php if($get_profile_details[0]['profession']=="Secondary School Teachers, Except Special and Vocational Education"){echo "selected";} ?> value="Secondary School Teachers, Except Special and Vocational Education">Secondary School Teachers, Except Special and Vocational Education</option>
										<option <?php if($get_profile_details[0]['profession']=="Secretaries, Except Legal, Medical, and Executive"){echo "selected";} ?> value="Secretaries, Except Legal, Medical, and Executive">Secretaries, Except Legal, Medical, and Executive</option>
										<option <?php if($get_profile_details[0]['profession']=="Securities and Commodities Traders"){echo "selected";} ?> value="Securities and Commodities Traders">Securities and Commodities Traders</option>
										<option <?php if($get_profile_details[0]['profession']=="Securities, Commodities, and Financial Services Sales Agents"){echo "selected";} ?> value="Securities, Commodities, and Financial Services Sales Agents">Securities, Commodities, and Financial Services Sales Agents</option>
										<option <?php if($get_profile_details[0]['profession']=="Security and Fire Alarm Systems Installers"){echo "selected";} ?> value="Security and Fire Alarm Systems Installers">Security and Fire Alarm Systems Installers</option>
										<option <?php if($get_profile_details[0]['profession']=="Security Guards"){echo "selected";} ?> value="Security Guards">Security Guards</option>
										<option <?php if($get_profile_details[0]['profession']=="Security Management Specialists"){echo "selected";} ?> value="Security Management Specialists">Security Management Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Security Managers"){echo "selected";} ?> value="Security Managers">Security Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Segmental Pavers"){echo "selected";} ?> value="Segmental Pavers">Segmental Pavers</option>
										<option <?php if($get_profile_details[0]['profession']=="Self-Enrichment Education Teachers"){echo "selected";} ?> value="Self-Enrichment Education Teachers">Self-Enrichment Education Teachers</option>
										<option <?php if($get_profile_details[0]['profession']=="Semiconductor Processors"){echo "selected";} ?> value="Semiconductor Processors">Semiconductor Processors</option>
										<option <?php if($get_profile_details[0]['profession']=="Separating, Filtering, Clarifying, Precipitating, and Still Machine Setters, Operators, and Tenders"){echo "selected";} ?> value="Separating, Filtering, Clarifying, Precipitating, and Still Machine Setters, Operators, and Tenders">Separating, Filtering, Clarifying, Precipitating, and Still Machine Setters, Operators, and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Septic Tank Servicers and Sewer Pipe Cleaners"){echo "selected";} ?> value="Septic Tank Servicers and Sewer Pipe Cleaners">Septic Tank Servicers and Sewer Pipe Cleaners</option>
										<option <?php if($get_profile_details[0]['profession']=="Service Station Attendants"){echo "selected";} ?> value="Service Station Attendants">Service Station Attendants</option>
										<option <?php if($get_profile_details[0]['profession']=="Service Unit Operators, Oil, Gas, and Mining"){echo "selected";} ?> value="Service Unit Operators, Oil, Gas, and Mining">Service Unit Operators, Oil, Gas, and Mining</option>
										<option <?php if($get_profile_details[0]['profession']=="Set and Exhibit Designers"){echo "selected";} ?> value="Set and Exhibit Designers">Set and Exhibit Designers</option>
										<option <?php if($get_profile_details[0]['profession']=="Set Designers"){echo "selected";} ?> value="Set Designers">Set Designers</option>
										<option <?php if($get_profile_details[0]['profession']=="Sewers, Hand"){echo "selected";} ?> value="Sewers, Hand">Sewers, Hand</option>
										<option <?php if($get_profile_details[0]['profession']=="Sewing Machine Operators"){echo "selected";} ?> value="Sewing Machine Operators">Sewing Machine Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Sewing Machine Operators, Garment"){echo "selected";} ?> value="Sewing Machine Operators, Garment">Sewing Machine Operators, Garment</option>
										<option <?php if($get_profile_details[0]['profession']=="Sewing Machine Operators, Non-Garment"){echo "selected";} ?> value="Sewing Machine Operators, Non-Garment">Sewing Machine Operators, Non-Garment</option>
										<option <?php if($get_profile_details[0]['profession']=="Shampooers"){echo "selected";} ?> value="Shampooers">Shampooers</option>
										<option <?php if($get_profile_details[0]['profession']=="Shear and Slitter Machine Setters and Set-Up Operators, Metal and Plastic"){echo "selected";} ?> value="Shear and Slitter Machine Setters and Set-Up Operators, Metal and Plastic">Shear and Slitter Machine Setters and Set-Up Operators, Metal and Plastic</option>
										<option <?php if($get_profile_details[0]['profession']=="Sheet Metal Workers"){echo "selected";} ?> value="Sheet Metal Workers">Sheet Metal Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Sheriffs and Deputy Sheriffs"){echo "selected";} ?> value="Sheriffs and Deputy Sheriffs">Sheriffs and Deputy Sheriffs</option>
										<option <?php if($get_profile_details[0]['profession']=="Ship and Boat Captains"){echo "selected";} ?> value="Ship and Boat Captains">Ship and Boat Captains</option>
										<option <?php if($get_profile_details[0]['profession']=="Ship Carpenters and Joiners"){echo "selected";} ?> value="Ship Carpenters and Joiners">Ship Carpenters and Joiners</option>
										<option <?php if($get_profile_details[0]['profession']=="Ship Engineers"){echo "selected";} ?> value="Ship Engineers">Ship Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Shipping, Receiving, and Traffic Clerks"){echo "selected";} ?> value="Shipping, Receiving, and Traffic Clerks">Shipping, Receiving, and Traffic Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Shoe and Leather Workers and Repairers"){echo "selected";} ?> value="Shoe and Leather Workers and Repairers">Shoe and Leather Workers and Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Shoe Machine Operators and Tenders"){echo "selected";} ?> value="Shoe Machine Operators and Tenders">Shoe Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Shop and Alteration Tailors"){echo "selected";} ?> value="Shop and Alteration Tailors">Shop and Alteration Tailors</option>
										<option <?php if($get_profile_details[0]['profession']=="Shuttle Car Operators"){echo "selected";} ?> value="Shuttle Car Operators">Shuttle Car Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Signal and Track Switch Repairers"){echo "selected";} ?> value="Signal and Track Switch Repairers">Signal and Track Switch Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Silversmiths"){echo "selected";} ?> value="Silversmiths">Silversmiths</option>
										<option <?php if($get_profile_details[0]['profession']=="Singers"){echo "selected";} ?> value="Singers">Singers</option>
										<option <?php if($get_profile_details[0]['profession']=="Sketch Artists"){echo "selected";} ?> value="Sketch Artists">Sketch Artists</option>
										<option <?php if($get_profile_details[0]['profession']=="Skin Care Specialists"){echo "selected";} ?> value="Skin Care Specialists">Skin Care Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Slaughterers and Meat Packers"){echo "selected";} ?> value="Slaughterers and Meat Packers">Slaughterers and Meat Packers</option>
										<option <?php if($get_profile_details[0]['profession']=="Slot Key Persons"){echo "selected";} ?> value="Slot Key Persons">Slot Key Persons</option>
										<option <?php if($get_profile_details[0]['profession']=="Social and Community Service Managers"){echo "selected";} ?> value="Social and Community Service Managers">Social and Community Service Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Social and Human Service Assistants"){echo "selected";} ?> value="Social and Human Service Assistants">Social and Human Service Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Social Science Research Assistants"){echo "selected";} ?> value="Social Science Research Assistants">Social Science Research Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Social Sciences Teachers, Postsecondary, All Other"){echo "selected";} ?> value="Social Sciences Teachers, Postsecondary, All Other">Social Sciences Teachers, Postsecondary, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Social Scientists and Related Workers, All Other"){echo "selected";} ?> value="Social Scientists and Related Workers, All Other">Social Scientists and Related Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Social Work Teachers, Postsecondary"){echo "selected";} ?> value="Social Work Teachers, Postsecondary">Social Work Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Social Workers, All Other"){echo "selected";} ?> value="Social Workers, All Other">Social Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Sociologists"){echo "selected";} ?> value="Sociologists">Sociologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Sociology Teachers, Postsecondary"){echo "selected";} ?> value="Sociology Teachers, Postsecondary">Sociology Teachers, Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Software Developers, Applications"){echo "selected";} ?> value="Software Developers, Applications">Software Developers, Applications</option>
										<option <?php if($get_profile_details[0]['profession']=="Software Developers, Systems Software"){echo "selected";} ?> value="Software Developers, Systems Software">Software Developers, Systems Software</option>
										<option <?php if($get_profile_details[0]['profession']=="Software Quality Assurance Engineers and Testers"){echo "selected";} ?> value="Software Quality Assurance Engineers and Testers">Software Quality Assurance Engineers and Testers</option>
										<option <?php if($get_profile_details[0]['profession']=="Soil and Plant Scientists"){echo "selected";} ?> value="Soil and Plant Scientists">Soil and Plant Scientists</option>
										<option <?php if($get_profile_details[0]['profession']=="Soil Conservationists"){echo "selected";} ?> value="Soil Conservationists">Soil Conservationists</option>
										<option <?php if($get_profile_details[0]['profession']=="Soil Scientists"){echo "selected";} ?> value="Soil Scientists">Soil Scientists</option>
										<option <?php if($get_profile_details[0]['profession']=="Solar Energy Installation Managers"){echo "selected";} ?> value="Solar Energy Installation Managers">Solar Energy Installation Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Solar Energy Systems Engineers"){echo "selected";} ?> value="Solar Energy Systems Engineers">Solar Energy Systems Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Solar Photovoltaic Installers"){echo "selected";} ?> value="Solar Photovoltaic Installers">Solar Photovoltaic Installers</option>
										<option <?php if($get_profile_details[0]['profession']=="Solar Sales Representatives and Assessors"){echo "selected";} ?> value="Solar Sales Representatives and Assessors">Solar Sales Representatives and Assessors</option>
										<option <?php if($get_profile_details[0]['profession']=="Solar Thermal Installers and Technicians"){echo "selected";} ?> value="Solar Thermal Installers and Technicians">Solar Thermal Installers and Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Solderers"){echo "selected";} ?> value="Solderers">Solderers</option>
										<option <?php if($get_profile_details[0]['profession']=="Solderers and Brazers"){echo "selected";} ?> value="Solderers and Brazers">Solderers and Brazers</option>
										<option <?php if($get_profile_details[0]['profession']=="Soldering and Brazing Machine Operators and Tenders"){echo "selected";} ?> value="Soldering and Brazing Machine Operators and Tenders">Soldering and Brazing Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Soldering and Brazing Machine Setters and Set-Up Operators"){echo "selected";} ?> value="Soldering and Brazing Machine Setters and Set-Up Operators">Soldering and Brazing Machine Setters and Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Sound Engineering Technicians"){echo "selected";} ?> value="Sound Engineering Technicians">Sound Engineering Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Spa Managers"){echo "selected";} ?> value="Spa Managers">Spa Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Special Education Teacher, Secondary School"){echo "selected";} ?> value="Special Education Teacher, Secondary School">Special Education Teacher, Secondary School</option>
										<option <?php if($get_profile_details[0]['profession']=="Special Education Teachers, Kindergarten and Elementary School"){echo "selected";} ?> value="Special Education Teachers, Kindergarten and Elementary School">Special Education Teachers, Kindergarten and Elementary School</option>
										<option <?php if($get_profile_details[0]['profession']=="Special Education Teachers, Middle School"){echo "selected";} ?> value="Special Education Teachers, Middle School">Special Education Teachers, Middle School</option>
										<option <?php if($get_profile_details[0]['profession']=="Special Education Teachers, Middle School"){echo "selected";} ?> value="Special Education Teachers, Middle School">Special Education Teachers, Middle School</option>
										<option <?php if($get_profile_details[0]['profession']=="Special Education Teachers, Preschool"){echo "selected";} ?> value="Special Education Teachers, Preschool">Special Education Teachers, Preschool</option>
										<option <?php if($get_profile_details[0]['profession']=="Special Education Teachers, Preschool, Kindergarten, and Elementary School"){echo "selected";} ?> value="Special Education Teachers, Preschool, Kindergarten, and Elementary School">Special Education Teachers, Preschool, Kindergarten, and Elementary School</option>
										<option <?php if($get_profile_details[0]['profession']=="Special Education Teachers, Secondary School"){echo "selected";} ?> value="Special Education Teachers, Secondary School">Special Education Teachers, Secondary School</option>
										<option <?php if($get_profile_details[0]['profession']=="Special Forces"){echo "selected";} ?> value="Special Forces">Special Forces</option>
										<option <?php if($get_profile_details[0]['profession']=="Special Forces Officers"){echo "selected";} ?> value="Special Forces Officers">Special Forces Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="Speech-Language Pathologists"){echo "selected";} ?> value="Speech-Language Pathologists">Speech-Language Pathologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Speech-Language Pathology Assistants"){echo "selected";} ?> value="Speech-Language Pathology Assistants">Speech-Language Pathology Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Sports Medicine Physicians"){echo "selected";} ?> value="Sports Medicine Physicians">Sports Medicine Physicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Spotters, Dry Cleaning"){echo "selected";} ?> value="Spotters, Dry Cleaning">Spotters, Dry Cleaning</option>
										<option <?php if($get_profile_details[0]['profession']=="Statement Clerks"){echo "selected";} ?> value="Statement Clerks">Statement Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Station Installers and Repairers, Telephone"){echo "selected";} ?> value="Station Installers and Repairers, Telephone">Station Installers and Repairers, Telephone</option>
										<option <?php if($get_profile_details[0]['profession']=="Stationary Engineers"){echo "selected";} ?> value="Stationary Engineers">Stationary Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Stationary Engineers and Boiler Operators"){echo "selected";} ?> value="Stationary Engineers and Boiler Operators">Stationary Engineers and Boiler Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Statistical Assistants"){echo "selected";} ?> value="Statistical Assistants">Statistical Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Statisticians"){echo "selected";} ?> value="Statisticians">Statisticians</option>
										<option <?php if($get_profile_details[0]['profession']=="Stevedores, Except Equipment Operators"){echo "selected";} ?> value="Stevedores, Except Equipment Operators">Stevedores, Except Equipment Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Stock Clerks and Order Fillers"){echo "selected";} ?> value="Stock Clerks and Order Fillers">Stock Clerks and Order Fillers</option>
										<option <?php if($get_profile_details[0]['profession']=="Stock Clerks- Stockroom, Warehouse, or Storage Yard"){echo "selected";} ?> value="Stock Clerks- Stockroom, Warehouse, or Storage Yard">Stock Clerks- Stockroom, Warehouse, or Storage Yard</option>
										<option <?php if($get_profile_details[0]['profession']=="Stock Clerks, Sales Floor"){echo "selected";} ?> value="Stock Clerks, Sales Floor">Stock Clerks, Sales Floor</option>
										<option <?php if($get_profile_details[0]['profession']=="Stone Cutters and Carvers"){echo "selected";} ?> value="Stone Cutters and Carvers">Stone Cutters and Carvers</option>
										<option <?php if($get_profile_details[0]['profession']=="Stone Sawyers"){echo "selected";} ?> value="Stone Sawyers">Stone Sawyers</option>
										<option <?php if($get_profile_details[0]['profession']=="Stonemasons"){echo "selected";} ?> value="Stonemasons">Stonemasons</option>
										<option <?php if($get_profile_details[0]['profession']=="Storage and Distribution Managers"){echo "selected";} ?> value="Storage and Distribution Managers">Storage and Distribution Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Stringed Instrument Repairers and Tuners"){echo "selected";} ?> value="Stringed Instrument Repairers and Tuners">Stringed Instrument Repairers and Tuners</option>
										<option <?php if($get_profile_details[0]['profession']=="Strippers"){echo "selected";} ?> value="Strippers">Strippers</option>
										<option <?php if($get_profile_details[0]['profession']=="Structural Iron and Steel Workers"){echo "selected";} ?> value="Structural Iron and Steel Workers">Structural Iron and Steel Workers</option>
										<option <?php if($get_profile_details[0]['profession']=="Structural Metal Fabricators and Fitters"){echo "selected";} ?> value="Structural Metal Fabricators and Fitters">Structural Metal Fabricators and Fitters</option>
										<option <?php if($get_profile_details[0]['profession']=="Substance Abuse and Behavioral Disorder Counselors"){echo "selected";} ?> value="Substance Abuse and Behavioral Disorder Counselors">Substance Abuse and Behavioral Disorder Counselors</option>
										<option <?php if($get_profile_details[0]['profession']=="Subway and Streetcar Operators"){echo "selected";} ?> value="Subway and Streetcar Operators">Subway and Streetcar Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Supply Chain Managers"){echo "selected";} ?> value="Supply Chain Managers">Supply Chain Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Surgeons"){echo "selected";} ?> value="Surgeons">Surgeons</option>
										<option <?php if($get_profile_details[0]['profession']=="Surgical Assistants"){echo "selected";} ?> value="Surgical Assistants">Surgical Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Surgical Technologists"){echo "selected";} ?> value="Surgical Technologists">Surgical Technologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Survey Researchers"){echo "selected";} ?> value="Survey Researchers">Survey Researchers</option>
										<option <?php if($get_profile_details[0]['profession']=="Surveying and Mapping Technicians"){echo "selected";} ?> value="Surveying and Mapping Technicians">Surveying and Mapping Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Surveying Technicians"){echo "selected";} ?> value="Surveying Technicians">Surveying Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Surveyors"){echo "selected";} ?> value="Surveyors">Surveyors</option>
										<option <?php if($get_profile_details[0]['profession']=="Sustainability Specialists"){echo "selected";} ?> value="Sustainability Specialists">Sustainability Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Switchboard Operators, Including Answering Service"){echo "selected";} ?> value="Switchboard Operators, Including Answering Service">Switchboard Operators, Including Answering Service</option>
										<option <?php if($get_profile_details[0]['profession']=="Tailors, Dressmakers, and Custom Sewers"){echo "selected";} ?> value="Tailors, Dressmakers, and Custom Sewers">Tailors, Dressmakers, and Custom Sewers</option>
										<option <?php if($get_profile_details[0]['profession']=="Talent Directors"){echo "selected";} ?> value="Talent Directors">Talent Directors</option>
										<option <?php if($get_profile_details[0]['profession']=="Tank Car, Truck, and Ship Loaders"){echo "selected";} ?> value="Tank Car, Truck, and Ship Loaders">Tank Car, Truck, and Ship Loaders</option>
										<option <?php if($get_profile_details[0]['profession']=="Tapers"){echo "selected";} ?> value="Tapers">Tapers</option>
										<option <?php if($get_profile_details[0]['profession']=="Tax Examiners, Collectors, and Revenue Agents"){echo "selected";} ?> value="Tax Examiners, Collectors, and Revenue Agents">Tax Examiners, Collectors, and Revenue Agents</option>
										<option <?php if($get_profile_details[0]['profession']=="Tax Preparers"){echo "selected";} ?> value="Tax Preparers">Tax Preparers</option>
										<option <?php if($get_profile_details[0]['profession']=="Taxi Drivers and Chauffeurs"){echo "selected";} ?> value="Taxi Drivers and Chauffeurs">Taxi Drivers and Chauffeurs</option>
										<option <?php if($get_profile_details[0]['profession']=="Teacher Assistants"){echo "selected";} ?> value="Teacher Assistants">Teacher Assistants</option>
										<option <?php if($get_profile_details[0]['profession']=="Teachers and Instructors, All Other"){echo "selected";} ?> value="Teachers and Instructors, All Other">Teachers and Instructors, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Team Assemblers"){echo "selected";} ?> value="Team Assemblers">Team Assemblers</option>
										<option <?php if($get_profile_details[0]['profession']=="Technical Directors--Managers"){echo "selected";} ?> value="Technical Directors--Managers">Technical Directors--Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Technical Writers"){echo "selected";} ?> value="Technical Writers">Technical Writers</option>
										<option <?php if($get_profile_details[0]['profession']=="Telecommunications Engineering Specialists"){echo "selected";} ?> value="Telecommunications Engineering Specialists">Telecommunications Engineering Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Telecommunications Equipment Installers and Repairers, Except Line Installers"){echo "selected";} ?> value="Telecommunications Equipment Installers and Repairers, Except Line Installers">Telecommunications Equipment Installers and Repairers, Except Line Installers</option>
										<option <?php if($get_profile_details[0]['profession']=="Telecommunications Facility Examiners"){echo "selected";} ?> value="Telecommunications Facility Examiners">Telecommunications Facility Examiners</option>
										<option <?php if($get_profile_details[0]['profession']=="Telecommunications Line Installers and Repairers"){echo "selected";} ?> value="Telecommunications Line Installers and Repairers">Telecommunications Line Installers and Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Telemarketers"){echo "selected";} ?> value="Telemarketers">Telemarketers</option>
										<option <?php if($get_profile_details[0]['profession']=="Telephone Operators"){echo "selected";} ?> value="Telephone Operators">Telephone Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Tellers"){echo "selected";} ?> value="Tellers">Tellers</option>
										<option <?php if($get_profile_details[0]['profession']=="Terrazzo Workers and Finishers"){echo "selected";} ?> value="Terrazzo Workers and Finishers">Terrazzo Workers and Finishers</option>
										<option <?php if($get_profile_details[0]['profession']=="Textile Bleaching and Dyeing Machine Operators and Tenders"){echo "selected";} ?> value="Textile Bleaching and Dyeing Machine Operators and Tenders">Textile Bleaching and Dyeing Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Textile Cutting Machine Setters, Operators, and Tenders"){echo "selected";} ?> value="Textile Cutting Machine Setters, Operators, and Tenders">Textile Cutting Machine Setters, Operators, and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Textile Knitting and Weaving Machine Setters, Operators, and Tenders"){echo "selected";} ?> value="Textile Knitting and Weaving Machine Setters, Operators, and Tenders">Textile Knitting and Weaving Machine Setters, Operators, and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Textile Winding, Twisting, and Drawing Out Machine Setters, Operators, and Tenders"){echo "selected";} ?> value="Textile Winding, Twisting, and Drawing Out Machine Setters, Operators, and Tenders">Textile Winding, Twisting, and Drawing Out Machine Setters, Operators, and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Textile, Apparel, and Furnishings Workers, All Other"){echo "selected";} ?> value="Textile, Apparel, and Furnishings Workers, All Other">Textile, Apparel, and Furnishings Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Therapists, All Other"){echo "selected";} ?> value="Therapists, All Other">Therapists, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Tile and Marble Setters"){echo "selected";} ?> value="Tile and Marble Setters">Tile and Marble Setters</option>
										<option <?php if($get_profile_details[0]['profession']=="Timing Device Assemblers, Adjusters, and Calibrators"){echo "selected";} ?> value="Timing Device Assemblers, Adjusters, and Calibrators">Timing Device Assemblers, Adjusters, and Calibrators</option>
										<option <?php if($get_profile_details[0]['profession']=="Tire Builders"){echo "selected";} ?> value="Tire Builders">Tire Builders</option>
										<option <?php if($get_profile_details[0]['profession']=="Tire Repairers and Changers"){echo "selected";} ?> value="Tire Repairers and Changers">Tire Repairers and Changers</option>
										<option <?php if($get_profile_details[0]['profession']=="Title Examiners and Abstractors"){echo "selected";} ?> value="Title Examiners and Abstractors">Title Examiners and Abstractors</option>
										<option <?php if($get_profile_details[0]['profession']=="Title Examiners, Abstractors, and Searchers"){echo "selected";} ?> value="Title Examiners, Abstractors, and Searchers">Title Examiners, Abstractors, and Searchers</option>
										<option <?php if($get_profile_details[0]['profession']=="Title Searchers"){echo "selected";} ?> value="Title Searchers">Title Searchers</option>
										<option <?php if($get_profile_details[0]['profession']=="Tool and Die Makers"){echo "selected";} ?> value="Tool and Die Makers">Tool and Die Makers</option>
										<option <?php if($get_profile_details[0]['profession']=="Tool Grinders, Filers, and Sharpeners"){echo "selected";} ?> value="Tool Grinders, Filers, and Sharpeners">Tool Grinders, Filers, and Sharpeners</option>
										<option <?php if($get_profile_details[0]['profession']=="Tour Guides and Escorts"){echo "selected";} ?> value="Tour Guides and Escorts">Tour Guides and Escorts</option>
										<option <?php if($get_profile_details[0]['profession']=="Tour Guides and Escorts"){echo "selected";} ?> value="Tour Guides and Escorts">Tour Guides and Escorts</option>
										<option <?php if($get_profile_details[0]['profession']=="Tractor-Trailer Truck Drivers"){echo "selected";} ?> value="Tractor-Trailer Truck Drivers">Tractor-Trailer Truck Drivers</option>
										<option <?php if($get_profile_details[0]['profession']=="Traffic Technicians"){echo "selected";} ?> value="Traffic Technicians">Traffic Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Train Crew Members"){echo "selected";} ?> value="Train Crew Members">Train Crew Members</option>
										<option <?php if($get_profile_details[0]['profession']=="Training and Development Manager"){echo "selected";} ?> value="Training and Development Manager">Training and Development Manager</option>
										<option <?php if($get_profile_details[0]['profession']=="Training and Development Managers"){echo "selected";} ?> value="Training and Development Managers">Training and Development Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Training and Development Specialists"){echo "selected";} ?> value="Training and Development Specialists">Training and Development Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Training and Development Specialists"){echo "selected";} ?> value="Training and Development Specialists">Training and Development Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Transformer Repairers"){echo "selected";} ?> value="Transformer Repairers">Transformer Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Transit and Railroad Police"){echo "selected";} ?> value="Transit and Railroad Police">Transit and Railroad Police</option>
										<option <?php if($get_profile_details[0]['profession']=="Transportation Attendants, Except Flight Attendants"){echo "selected";} ?> value="Transportation Attendants, Except Flight Attendants">Transportation Attendants, Except Flight Attendants</option>
										<option <?php if($get_profile_details[0]['profession']=="Transportation Attendants, Except Flight Attendants and Baggage Porters"){echo "selected";} ?> value="Transportation Attendants, Except Flight Attendants and Baggage Porters">Transportation Attendants, Except Flight Attendants and Baggage Porters</option>
										<option <?php if($get_profile_details[0]['profession']=="Transportation Engineers"){echo "selected";} ?> value="Transportation Engineers">Transportation Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Transportation Inspectors"){echo "selected";} ?> value="Transportation Inspectors">Transportation Inspectors</option>
										<option <?php if($get_profile_details[0]['profession']=="Transportation Managers"){echo "selected";} ?> value="Transportation Managers">Transportation Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Transportation Planners"){echo "selected";} ?> value="Transportation Planners">Transportation Planners</option>
										<option <?php if($get_profile_details[0]['profession']=="Transportation Security Screeners"){echo "selected";} ?> value="Transportation Security Screeners">Transportation Security Screeners</option>
										<option <?php if($get_profile_details[0]['profession']=="Transportation Vehicle, Equipment and Systems Inspectors, Except Aviation"){echo "selected";} ?> value="Transportation Vehicle, Equipment and Systems Inspectors, Except Aviation">Transportation Vehicle, Equipment and Systems Inspectors, Except Aviation</option>
										<option <?php if($get_profile_details[0]['profession']=="Transportation Workers, All Other"){echo "selected";} ?> value="Transportation Workers, All Other">Transportation Workers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Transportation, Storage, and Distribution Managers"){echo "selected";} ?> value="Transportation, Storage, and Distribution Managers">Transportation, Storage, and Distribution Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Travel Agents"){echo "selected";} ?> value="Travel Agents">Travel Agents</option>
										<option <?php if($get_profile_details[0]['profession']=="Travel Clerks"){echo "selected";} ?> value="Travel Clerks">Travel Clerks</option>
										<option <?php if($get_profile_details[0]['profession']=="Travel Guide"){echo "selected";} ?> value="Travel Guide">Travel Guide</option>
										<option <?php if($get_profile_details[0]['profession']=="Travel Guides"){echo "selected";} ?> value="Travel Guides">Travel Guides</option>
										<option <?php if($get_profile_details[0]['profession']=="Treasurers, Controllers, and Chief Financial Officers"){echo "selected";} ?> value="Treasurers, Controllers, and Chief Financial Officers">Treasurers, Controllers, and Chief Financial Officers</option>
										<option <?php if($get_profile_details[0]['profession']=="Tree Trimmers and Pruners"){echo "selected";} ?> value="Tree Trimmers and Pruners">Tree Trimmers and Pruners</option>
										<option <?php if($get_profile_details[0]['profession']=="Truck Drivers, Heavy"){echo "selected";} ?> value="Truck Drivers, Heavy">Truck Drivers, Heavy</option>
										<option <?php if($get_profile_details[0]['profession']=="Truck Drivers, Heavy and Tractor-Trailer"){echo "selected";} ?> value="Truck Drivers, Heavy and Tractor-Trailer">Truck Drivers, Heavy and Tractor-Trailer</option>
										<option <?php if($get_profile_details[0]['profession']=="Truck Drivers, Light or Delivery Services"){echo "selected";} ?> value="Truck Drivers, Light or Delivery Services">Truck Drivers, Light or Delivery Services</option>
										<option <?php if($get_profile_details[0]['profession']=="Tutors"){echo "selected";} ?> value="Tutors">Tutors</option>
										<option <?php if($get_profile_details[0]['profession']=="Typesetting and Composing Machine Operators and Tenders"){echo "selected";} ?> value="Typesetting and Composing Machine Operators and Tenders">Typesetting and Composing Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Umpires, Referees, and Other Sports Officials"){echo "selected";} ?> value="Umpires, Referees, and Other Sports Officials">Umpires, Referees, and Other Sports Officials</option>
										<option <?php if($get_profile_details[0]['profession']=="Upholsterers"){echo "selected";} ?> value="Upholsterers">Upholsterers</option>
										<option <?php if($get_profile_details[0]['profession']=="Urban and Regional Planners"){echo "selected";} ?> value="Urban and Regional Planners">Urban and Regional Planners</option>
										<option <?php if($get_profile_details[0]['profession']=="Urologists"){echo "selected";} ?> value="Urologists">Urologists</option>
										<option <?php if($get_profile_details[0]['profession']=="Ushers, Lobby Attendants, and Ticket Takers"){echo "selected";} ?> value="Ushers, Lobby Attendants, and Ticket Takers">Ushers, Lobby Attendants, and Ticket Takers</option>
										<option <?php if($get_profile_details[0]['profession']=="Validation Engineers"){echo "selected";} ?> value="Validation Engineers">Validation Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Valve and Regulator Repairers"){echo "selected";} ?> value="Valve and Regulator Repairers">Valve and Regulator Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Veterinarians"){echo "selected";} ?> value="Veterinarians">Veterinarians</option>
										<option <?php if($get_profile_details[0]['profession']=="Veterinary Assistants and Laboratory Animal Caretakers"){echo "selected";} ?> value="Veterinary Assistants and Laboratory Animal Caretakers">Veterinary Assistants and Laboratory Animal Caretakers</option>
										<option <?php if($get_profile_details[0]['profession']=="Veterinary Technologists and Technicians"){echo "selected";} ?> value="Veterinary Technologists and Technicians">Veterinary Technologists and Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Video Game Designers"){echo "selected";} ?> value="Video Game Designers">Video Game Designers</option>
										<option <?php if($get_profile_details[0]['profession']=="Vocational Education Teachers Postsecondary"){echo "selected";} ?> value="Vocational Education Teachers Postsecondary">Vocational Education Teachers Postsecondary</option>
										<option <?php if($get_profile_details[0]['profession']=="Vocational Education Teachers, Middle School"){echo "selected";} ?> value="Vocational Education Teachers, Middle School">Vocational Education Teachers, Middle School</option>
										<option <?php if($get_profile_details[0]['profession']=="Vocational Education Teachers, Secondary School"){echo "selected";} ?> value="Vocational Education Teachers, Secondary School">Vocational Education Teachers, Secondary School</option>
										<option <?php if($get_profile_details[0]['profession']=="Waiters and Waitresses"){echo "selected";} ?> value="Waiters and Waitresses">Waiters and Waitresses</option>
										<option <?php if($get_profile_details[0]['profession']=="Watch Repairers"){echo "selected";} ?> value="Watch Repairers">Watch Repairers</option>
										<option <?php if($get_profile_details[0]['profession']=="Water and Liquid Waste Treatment Plant and System Operators"){echo "selected";} ?> value="Water and Liquid Waste Treatment Plant and System Operators">Water and Liquid Waste Treatment Plant and System Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Water Resource Specialists"){echo "selected";} ?> value="Water Resource Specialists">Water Resource Specialists</option>
										<option <?php if($get_profile_details[0]['profession']=="Water/Wastewater Engineers"){echo "selected";} ?> value="Water/Wastewater Engineers">Water/Wastewater Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Weatherization Installers and Technicians"){echo "selected";} ?> value="Weatherization Installers and Technicians">Weatherization Installers and Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Web Administrators"){echo "selected";} ?> value="Web Administrators">Web Administrators</option>
										<option <?php if($get_profile_details[0]['profession']=="Web Developers"){echo "selected";} ?> value="Web Developers">Web Developers</option>
										<option <?php if($get_profile_details[0]['profession']=="Weighers, Measurers, Checkers, and Samplers, Recordkeeping"){echo "selected";} ?> value="Weighers, Measurers, Checkers, and Samplers, Recordkeeping">Weighers, Measurers, Checkers, and Samplers, Recordkeeping</option>
										<option <?php if($get_profile_details[0]['profession']=="Welder-Fitters"){echo "selected";} ?> value="Welder-Fitters">Welder-Fitters</option>
										<option <?php if($get_profile_details[0]['profession']=="Welders and Cutters"){echo "selected";} ?> value="Welders and Cutters">Welders and Cutters</option>
										<option <?php if($get_profile_details[0]['profession']=="Welders, Cutters, and Welder Fitters"){echo "selected";} ?> value="Welders, Cutters, and Welder Fitters">Welders, Cutters, and Welder Fitters</option>
										<option <?php if($get_profile_details[0]['profession']=="Welders, Cutters, Solderers, and Brazers"){echo "selected";} ?> value="Welders, Cutters, Solderers, and Brazers">Welders, Cutters, Solderers, and Brazers</option>
										<option <?php if($get_profile_details[0]['profession']=="Welders, Production"){echo "selected";} ?> value="Welders, Production">Welders, Production</option>
										<option <?php if($get_profile_details[0]['profession']=="Welding Machine Operators and Tenders"){echo "selected";} ?> value="Welding Machine Operators and Tenders">Welding Machine Operators and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Welding Machine Setters and Set-Up Operators"){echo "selected";} ?> value="Welding Machine Setters and Set-Up Operators">Welding Machine Setters and Set-Up Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Welding, Soldering, and Brazing Machine Setters, Operators, and Tenders"){echo "selected";} ?> value="Welding, Soldering, and Brazing Machine Setters, Operators, and Tenders">Welding, Soldering, and Brazing Machine Setters, Operators, and Tenders</option>
										<option <?php if($get_profile_details[0]['profession']=="Welfare Eligibility Workers and Interviewers"){echo "selected";} ?> value="Welfare Eligibility Workers and Interviewers">Welfare Eligibility Workers and Interviewers</option>
										<option <?php if($get_profile_details[0]['profession']=="Well and Core Drill Operators"){echo "selected";} ?> value="Well and Core Drill Operators">Well and Core Drill Operators</option>
										<option <?php if($get_profile_details[0]['profession']=="Wellhead Pumpers"){echo "selected";} ?> value="Wellhead Pumpers">Wellhead Pumpers</option>
										<option <?php if($get_profile_details[0]['profession']=="Wholesale and Retail Buyers, Except Farm Products"){echo "selected";} ?> value="Wholesale and Retail Buyers, Except Farm Products">Wholesale and Retail Buyers, Except Farm Products</option>
										<option <?php if($get_profile_details[0]['profession']=="Wind Energy Engineers"){echo "selected";} ?> value="Wind Energy Engineers">Wind Energy Engineers</option>
										<option <?php if($get_profile_details[0]['profession']=="Wind Energy Operations Managers"){echo "selected";} ?> value="Wind Energy Operations Managers">Wind Energy Operations Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Wind Energy Project Managers"){echo "selected";} ?> value="Wind Energy Project Managers">Wind Energy Project Managers</option>
										<option <?php if($get_profile_details[0]['profession']=="Wind Turbine Service Technicians"){echo "selected";} ?> value="Wind Turbine Service Technicians">Wind Turbine Service Technicians</option>
										<option <?php if($get_profile_details[0]['profession']=="Woodworkers, All Other"){echo "selected";} ?> value="Woodworkers, All Other">Woodworkers, All Other</option>
										<option <?php if($get_profile_details[0]['profession']=="Woodworking Machine Operators and Tenders, Except Sawing"){echo "selected";} ?> value="Woodworking Machine Operators and Tenders, Except Sawing">Woodworking Machine Operators and Tenders, Except Sawing</option>
										<option <?php if($get_profile_details[0]['profession']=="Woodworking Machine Setters and Set-Up Operators, Except Sawing"){echo "selected";} ?> value="Woodworking Machine Setters and Set-Up Operators, Except Sawing">Woodworking Machine Setters and Set-Up Operators, Except Sawing</option>
										<option <?php if($get_profile_details[0]['profession']=="Woodworking Machine Setters, Operators, and Tenders, Except Sawing"){echo "selected";} ?> value="Woodworking Machine Setters, Operators, and Tenders, Except Sawing">Woodworking Machine Setters, Operators, and Tenders, Except Sawing</option>
										<option <?php if($get_profile_details[0]['profession']=="Word Processors and Typists"){echo "selected";} ?> value="Word Processors and Typists">Word Processors and Typists</option>
										<option <?php if($get_profile_details[0]['profession']=="Writers and Authors"){echo "selected";} ?> value="Writers and Authors">Writers and Authors</option>
										<option <?php if($get_profile_details[0]['profession']=="Zoologists and Wildlife Biologists"){echo "selected";} ?> value="Zoologists and Wildlife Biologists">Zoologists and Wildlife Biologists</option>
									</select>
									<?php */ ?>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-12">
									<label class="control-label">Income:</label>
								</div>
								<div class="col-lg-12">
									<input type="text" name="income" class="form-control" value="<?php echo $get_profile_details[0]['income']; ?>">
									<?php /* ?>
									<select class="form-control dropdown-search" name="income">
										<option selected="selected" value="">--- Select Income ---</option>
										<option <?php if($get_profile_details[0]['income']=="10,000 to 20,000"){echo "selected";} ?> value="10,000 to 20,000">10,000 to 20,000</option>
										<option <?php if($get_profile_details[0]['income']=="20,000 to 30,000"){echo "selected";} ?> value="20,000 to 30,000">20,000 to 30,000</option>
										<option <?php if($get_profile_details[0]['income']=="30,000 to 40,000"){echo "selected";} ?> value="30,000 to 40,000">30,000 to 40,000</option>
										<option <?php if($get_profile_details[0]['income']=="40,000 to 50,000"){echo "selected";} ?> value="40,000 to 50,000">40,000 to 50,000</option>
										<option <?php if($get_profile_details[0]['income']=="50,000 to 60,000"){echo "selected";} ?> value="50,000 to 60,000">50,000 to 60,000</option>
										<option <?php if($get_profile_details[0]['income']=="60,000 to 70,000"){echo "selected";} ?> value="60,000 to 70,000">60,000 to 70,000</option>
										<option <?php if($get_profile_details[0]['income']=="70,000 to 80,000"){echo "selected";} ?> value="70,000 to 80,000">70,000 to 80,000</option>
										<option <?php if($get_profile_details[0]['income']=="80,000 to 90,000"){echo "selected";} ?> value="80,000 to 90,000">80,000 to 90,000</option>
										<option <?php if($get_profile_details[0]['income']=="90,000 to 100,000"){echo "selected";} ?> value="90,000 to 100,000">90,000 to 100,000</option>
									</select>
									<?php */ ?>
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
								<option <?php if($get_profile_details[0]['employed_in']=="Government"){echo "checked";} ?> value="Government">Government</option>
								<option <?php if($get_profile_details[0]['employed_in']=="Defence"){echo "checked";} ?> value="Defence">Defence</option>
								<option <?php if($get_profile_details[0]['employed_in']=="Private"){echo "checked";} ?> value="Private">Private</option>
								<option <?php if($get_profile_details[0]['employed_in']=="Business"){echo "checked";} ?> value="Business">Business</option>
								<option <?php if($get_profile_details[0]['employed_in']=="Self Employed"){echo "checked";} ?> value="Self Employed">Self Employed</option>
								<option <?php if($get_profile_details[0]['employed_in']=="Not Working"){echo "checked";} ?> value="Not Working">Not Working</option>
							</select>
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
										<option <?php if($get_profile_details[0]['religion']=="Muslim - Syed"){echo "selected";} ?> value="Muslim - Syed">Muslim - Syed</option>
										<option <?php if($get_profile_details[0]['religion']=="Muslim - Sunnis"){echo "selected";} ?> value="Muslim - Sunnis">Muslim - Sunnis</option>
										<option <?php if($get_profile_details[0]['religion']=="Muslim - Brailvi"){echo "selected";} ?> value="Muslim - Brailvi">Muslim - Brailvi</option>
										<option <?php if($get_profile_details[0]['religion']=="Muslim - Deobandi"){echo "selected";} ?> value="Muslim - Deobandi">Muslim - Deobandi</option>
										<option <?php if($get_profile_details[0]['religion']=="Muslim - Wahabi"){echo "selected";} ?> value="Muslim - Wahabi">Muslim - Wahabi</option>
										<option <?php if($get_profile_details[0]['religion']=="Muslim - Abbasi"){echo "selected";} ?> value="Muslim - Abbasi">Muslim - Abbasi</option>
										<option <?php if($get_profile_details[0]['religion']=="Muslim - Shia"){echo "selected";} ?> value="Muslim - Shia">Muslim - Shia</option>
										<option <?php if($get_profile_details[0]['religion']=="Muslim - Others"){echo "selected";} ?> value="Muslim - Others">Muslim - Others</option>			
									</select>
									
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
										<option <?php if($get_profile_details[0]['cast']=="Aheer"){echo "selected";} ?> value="Aheer">Aheer</option>
										<option <?php if($get_profile_details[0]['cast']=="Ansari"){echo "selected";} ?> value="Ansari">Ansari</option>
										<option <?php if($get_profile_details[0]['cast']=="Arain"){echo "selected";} ?> value="Arain">Arain</option>
										<option <?php if($get_profile_details[0]['cast']=="Awan"){echo "selected";} ?> value="Awan">Awan</option>
										<option <?php if($get_profile_details[0]['cast']=="Baloch"){echo "selected";} ?> value="Baloch">Baloch</option>
										<option <?php if($get_profile_details[0]['cast']=="Butt"){echo "selected";} ?> value="Butt">Butt</option>
										<option <?php if($get_profile_details[0]['cast']=="Chaudary"){echo "selected";} ?> value="Chaudary">Chaudary</option>
										<option <?php if($get_profile_details[0]['cast']=="Dogar"){echo "selected";} ?> value="Dogar">Dogar</option>
										<option <?php if($get_profile_details[0]['cast']=="Gakhars"){echo "selected";} ?> value="Gakhars">Gakhars</option>
										<option <?php if($get_profile_details[0]['cast']=="Gondal"){echo "selected";} ?> value="Gondal">Gondal</option>
										<option <?php if($get_profile_details[0]['cast']=="Gujjars"){echo "selected";} ?> value="Gujjars">Gujjars</option>
										<option <?php if($get_profile_details[0]['cast']=="Hashmi"){echo "selected";} ?> value="Hashmi">Hashmi</option>
										<option <?php if($get_profile_details[0]['cast']=="Jat"){echo "selected";} ?> value="Jat">Jat</option>
										<option <?php if($get_profile_details[0]['cast']=="Kamboh"){echo "selected";} ?> value="Kamboh">Kamboh</option>
										<option <?php if($get_profile_details[0]['cast']=="Siddiqui"){echo "selected";} ?> value="Siddiqui">Siddiqui</option>
										<option <?php if($get_profile_details[0]['cast']=="Khan"){echo "selected";} ?> value="Khan">Khan</option>
										<option <?php if($get_profile_details[0]['cast']=="Khateek"){echo "selected";} ?> value="Khateek">Khateek</option>
										<option <?php if($get_profile_details[0]['cast']=="Khattar"){echo "selected";} ?> value="Khattar">Khattar</option>
										<option <?php if($get_profile_details[0]['cast']=="Khokhar"){echo "selected";} ?> value="Khokhar">Khokhar</option>
										<option <?php if($get_profile_details[0]['cast']=="Maliar"){echo "selected";} ?> value="Maliar">Maliar</option>
										<option <?php if($get_profile_details[0]['cast']=="Mughal"){echo "selected";} ?> value="Mughal">Mughal</option>
										<option <?php if($get_profile_details[0]['cast']=="Paracha"){echo "selected";} ?> value="Paracha">Paracha</option>
										<option <?php if($get_profile_details[0]['cast']=="Pashtuns"){echo "selected";} ?> value="Pashtuns">Pashtuns</option>
										<option <?php if($get_profile_details[0]['cast']=="Qureshi"){echo "selected";} ?> value="Qureshi">Qureshi</option>
										<option <?php if($get_profile_details[0]['cast']=="Rajputs"){echo "selected";} ?> value="Rajputs">Rajputs</option>
										<option <?php if($get_profile_details[0]['cast']=="Rawns"){echo "selected";} ?> value="Rawns">Rawns</option>
										<option <?php if($get_profile_details[0]['cast']=="Maliks"){echo "selected";} ?> value="Maliks">Maliks</option>
										<option <?php if($get_profile_details[0]['cast']=="Sheikh"){echo "selected";} ?> value="Sheikh">Sheikh</option>
										<option <?php if($get_profile_details[0]['cast']=="Syeds"){echo "selected";} ?> value="Syeds">Syeds</option>
										<option <?php if($get_profile_details[0]['cast']=="Catholic"){echo "selected";} ?> value="Catholic">Catholic</option>
										<option <?php if($get_profile_details[0]['cast']=="Orthodox"){echo "selected";} ?> value="Orthodox">Orthodox</option>
										<option <?php if($get_profile_details[0]['cast']=="Protestant"){echo "selected";} ?> value="Protestant">Protestant</option>
										<option <?php if($get_profile_details[0]['cast']=="Irani"){echo "selected";} ?> value="Irani">Irani</option>
										<option <?php if($get_profile_details[0]['cast']=="Parsi"){echo "selected";} ?> value="Parsi">Parsi</option>
										<option <?php if($get_profile_details[0]['cast']=="Intercaste"){echo "selected";} ?> value="Intercaste">Intercaste</option>			
									</select>
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
								<option <?php if($get_profile_details[0]['mother_tongue']=="Urdu"){echo "selected";} ?> value="Urdu">Urdu</option>
								<option <?php if($get_profile_details[0]['mother_tongue']=="Punjabi"){echo "selected";} ?> value="Punjabi">Punjabi</option>
								<option <?php if($get_profile_details[0]['mother_tongue']=="Pashto"){echo "selected";} ?> value="Pashto">Pashto</option>
								<option <?php if($get_profile_details[0]['mother_tongue']=="Saraiki"){echo "selected";} ?> value="Sindhi">Sindhi</option>
								<option <?php if($get_profile_details[0]['mother_tongue']=="Balochi"){echo "selected";} ?> value="Saraiki">Saraiki</option>
								<option <?php if($get_profile_details[0]['mother_tongue']=="Balochi"){echo "selected";} ?> value="Balochi">Balochi</option>
								<option <?php if($get_profile_details[0]['mother_tongue']=="Kashmiri"){echo "selected";} ?> value="Kashmiri">Kashmiri</option>
								<option <?php if($get_profile_details[0]['mother_tongue']=="English"){echo "selected";} ?> value="English">English</option>
							</select>
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
											<option <?php if($get_profile_details[0]['city']==$value['city_name']){echo "selected";} ?> value="<?php echo $value['city_name']; ?>"><?php echo $value['city_name']; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<label class="control-label">Phone/Whatsapp Number:</label>
						</div>
						<div class="col-lg-12 radion-button-style">
							<input type="text" name="phone_number" class="form-control" value="<?php echo $get_profile_details[0]['phone_number']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<label class="control-label">About me:</label>
						</div>
						<div class="col-lg-12 radion-button-style">
							<textarea class="form-control" rows="7" name="about_me"><?php echo $get_profile_details[0]['about_me']; ?></textarea>
							<p class="text-area-msg">You Can't Enter Phone Number in Description Otherwise we will not approve your profile.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<label class="control-label">Requirements:</label>
						</div>
						<div class="col-lg-12 radion-button-style">
							<textarea class="form-control" rows="7" name="requirements"><?php echo $get_profile_details[0]['requirements']; ?></textarea>
							<p class="text-area-msg">You Can't Enter Phone Number in Description Otherwise we will not approve your profile.</p>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-lg-12">
							<input type="checkbox" class="change-password-checkbox" name="change_password_checkbox" id="change-password-checkbox" style="height: auto !important;">
							<label class="control-label" for="change-password-checkbox">Change Password</label>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-12">
									<label class="control-label">E-mail Address:</label>
								</div>
								<div class="col-lg-12 radion-button-style">
									<input type="email" class="form-control" name="e_mail" disabled value="<?php echo $get_profile_details[0]['e_mail']; ?>">
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-12">
									<label class="control-label">Password:</label>
								</div>
								<div class="col-lg-12 radion-button-style">
									<input type="password" class="form-control password-input" name="password" disabled>
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
				        				<label for="created_by" id="created_by" class="error"></label>
										<label for="full_name" id="full_name" class="error"></label>
										<label for="age" id="age" class="error"></label>
										<label for="date_of_birth_day" id="date_of_birth_day" class="error"></label>
										<label for="date_of_birth_month" id="date_of_birth_month" class="error"></label>
										<label for="date_of_birth_year" id="date_of_birth_year" class="error"></label>
										<label for="highest_education" id="highest_education" class="error"></label>
										<label for="religion" id="religion" class="error"></label>
										<label for="cast" id="cast" class="error"></label>
										<label for="mother_tongue" id="mother_tongue" class="error"></label>
										<label for="city" id="city" class="error"></label>
										<label for="phone_number" id="phone_number" class="error"></label>
										<label for="e_mail" id="e_mail" class="error"></label>
										<label for="password" id="password" class="error"></label>
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
							<input type="submit" name="" class="btn login-btn" value="Update">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>