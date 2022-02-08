<div class="short-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<ul>
					<li><a href="<?php echo base_url("search?cast=Aheer"); ?>">Aheer</a></li>
					<li><a href="<?php echo base_url("search?cast=Arain"); ?>">Arain</a></li>
					<li><a href="<?php echo base_url("search?cast=Awan"); ?>">Awan</a></li>
					<li><a href="<?php echo base_url("search?cast=Baloch"); ?>">Baloch</a></li>
					<li><a href="<?php echo base_url("search?cast=Chaudary"); ?>">Chaudary</a></li>
					<li><a href="<?php echo base_url("search?cast=Dogar"); ?>">Dogar</a></li>
					<li><a href="<?php echo base_url("search?cast=Gakhars"); ?>">Gakhars</a></li>
					<li><a href="<?php echo base_url("search?cast=Gondal"); ?>">Gondal</a></li>
					<li><a href="<?php echo base_url("search?cast=Gujjars"); ?>">Gujjars</a></li>
					<li><a href="<?php echo base_url("search?cast=Hashmi"); ?>">Hashmi</a></li>
					<li><a href="<?php echo base_url("search?cast=Jat"); ?>">Jat</a></li>
					<li><a href="<?php echo base_url("search?cast=Kamboh"); ?>">Kamboh</a></li>
					<li><a href="<?php echo base_url("search?cast=Siddiqui"); ?>">Siddiqui</a></li>
					<li><a href="<?php echo base_url("search?cast=Khan"); ?>">Khan</a></li>
					<li><a href="<?php echo base_url("list-of-casts"); ?>">See More</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<div class="search-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
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
		</div>
		<div class="row">
			<div class="col-lg-3 search-page-filter">
				<form class="quick-search-form" action="<?php echo base_url("search"); ?>" method="get">
					<h1>Quick Search</h1>
					<div class="row">
						<div class="col-lg-12">
							<label>I am looking</label>
							<select class="form-control" name="looking">
								<option value="">-- Select Gender --</option>
								<option <?php if(!empty($search_data['looking'])){if($search_data['looking']=="Male"){echo "selected";}} ?> value="Male">Male</option>
								<option <?php if(!empty($search_data['looking'])){if($search_data['looking']=="Female"){echo "selected";}} ?> value="Female">Female</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<label>Age From</label>
							<input type="number" name="age_from" class="form-control" placeholder="18" value="<?php if(!empty($search_data)){if(!empty($search_data['age_from'])){echo $search_data['age_from'];}} ?>">
						</div>
						<div class="col-lg-6">
							<label>Age To</label>
							<input type="number" name="age_to" class="form-control" placeholder="50" value="<?php if(!empty($search_data)){if(!empty($search_data['age_to'])){echo $search_data['age_to'];}} ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<label>Religion</label>
							<select class="form-control" name="religion">
								<option value="">-- Select Religion --</option>
								<option <?php if(!empty($search_data['religion'])){if($search_data['religion']=="Islam"){echo "selected";}} ?> value="Islam">Islam</option>
								<option <?php if(!empty($search_data['religion'])){if($search_data['religion']=="Christion"){echo "selected";}} ?> value="Christion">Christion</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<label>Mother Tongue</label>
							<select class="form-control" name="mother_tongue">
								<option value="">-- Select Mother Tongue --</option>
								<option <?php if(!empty($search_data['mother_tongue'])){if($search_data['mother_tongue']=="Urdu"){echo "selected";}} ?> value="Urdu">Urdu</option>
								<option <?php if(!empty($search_data['mother_tongue'])){if($search_data['mother_tongue']=="Punjabi"){echo "selected";}} ?> value="Punjabi">Punjabi</option>
								<option <?php if(!empty($search_data['mother_tongue'])){if($search_data['mother_tongue']=="Pashto"){echo "selected";}} ?> value="Pashto">Pashto</option>
								<option <?php if(!empty($search_data['mother_tongue'])){if($search_data['mother_tongue']=="Sindhi"){echo "selected";}} ?> value="Sindhi">Sindhi</option>
								<option <?php if(!empty($search_data['mother_tongue'])){if($search_data['mother_tongue']=="Saraiki"){echo "selected";}} ?> value="Saraiki">Saraiki</option>
								<option <?php if(!empty($search_data['mother_tongue'])){if($search_data['mother_tongue']=="Balochi"){echo "selected";}} ?> value="Balochi">Balochi</option>
								<option <?php if(!empty($search_data['mother_tongue'])){if($search_data['mother_tongue']=="Kashmiri"){echo "selected";}} ?> value="Kashmiri">Kashmiri</option>
								<option <?php if(!empty($search_data['mother_tongue'])){if($search_data['mother_tongue']=="English"){echo "selected";}} ?> value="English">English</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<label>Cast</label>
							<select class="form-control" name="cast">
								<option value="">-- Select Cast --</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Aheer"){echo "selected";}} ?> value="Aheer">Aheer</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Ansari"){echo "selected";}} ?> value="Ansari">Ansari</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Arain"){echo "selected";}} ?> value="Arain">Arain</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Awan"){echo "selected";}} ?> value="Awan">Awan</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Baloch"){echo "selected";}} ?> value="Baloch">Baloch</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Chaudary"){echo "selected";}} ?> value="Chaudary">Chaudary</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Dogar"){echo "selected";}} ?> value="Dogar">Dogar</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Gakhars"){echo "selected";}} ?> value="Gakhars">Gakhars</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Gondal"){echo "selected";}} ?> value="Gondal">Gondal</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Gujjars"){echo "selected";}} ?> value="Gujjars">Gujjars</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Hashmi"){echo "selected";}} ?> value="Hashmi">Hashmi</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Jat"){echo "selected";}} ?> value="Jat">Jat</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Kamboh"){echo "selected";}} ?> value="Kamboh">Kamboh</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Siddiqui"){echo "selected";}} ?> value="Siddiqui">Siddiqui</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Khan"){echo "selected";}} ?> value="Khan">Khan</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Khateek"){echo "selected";}} ?> value="Khateek">Khateek</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Khattar"){echo "selected";}} ?> value="Khattar">Khattar</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Khokhar"){echo "selected";}} ?> value="Khokhar">Khokhar</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Maliar"){echo "selected";}} ?> value="Maliar">Maliar</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Mughal"){echo "selected";}} ?> value="Mughal">Mughal</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Paracha"){echo "selected";}} ?> value="Paracha">Paracha</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Pashtuns"){echo "selected";}} ?> value="Pashtuns">Pashtuns</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Qureshi"){echo "selected";}} ?> value="Qureshi">Qureshi</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Rajputs"){echo "selected";}} ?> value="Rajputs">Rajputs</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Rawns"){echo "selected";}} ?> value="Rawns">Rawns</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Rehmanis and the Maliks"){echo "selected";}} ?> value="Rehmanis and the Maliks">Rehmanis and the Maliks</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Sheikh"){echo "selected";}} ?> value="Sheikh">Sheikh</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Syeds"){echo "selected";}} ?> value="Syeds">Syeds</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Catholic"){echo "selected";}} ?> value="Catholic">Catholic</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Orthodox"){echo "selected";}} ?> value="Orthodox">Orthodox</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Protestant"){echo "selected";}} ?> value="Protestant">Protestant</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Irani"){echo "selected";}} ?> value="Irani">Irani</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Parsi"){echo "selected";}} ?> value="Parsi">Parsi</option>
								<option <?php if(!empty($_GET['cast'])){if($_GET['cast']=="Intercaste"){echo "selected";}} ?> value="Intercaste">Intercaste</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<label>Marital Status</label>
							<select class="form-control" name="marital_status">
								<option value="">-- Select Marital Status --</option>
								<option <?php if(!empty($search_data['marital_status'])){if($search_data['marital_status']=="Unmarried"){echo "selected";}} ?> value="Unmarried">Unmarried</option>
								<option <?php if(!empty($search_data['marital_status'])){if($search_data['marital_status']=="Married"){echo "selected";}} ?> value="Married">Married</option>
								<option <?php if(!empty($search_data['marital_status'])){if($search_data['marital_status']=="Divorced"){echo "selected";}} ?> value="Divorced">Divorced</option>
								<option <?php if(!empty($search_data['marital_status'])){if($search_data['marital_status']=="Separated"){echo "selected";}} ?> value="Separated">Separated </option>
								<option <?php if(!empty($search_data['marital_status'])){if($search_data['marital_status']=="Widowed"){echo "selected";}} ?> value="Widowed">Widowed</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<label>Select City</label>
							<select class="form-control" name="city">
								<option value="">-- Select City --</option>
								<?php foreach($get_all_cities as $value){ ?>
									<option <?php if(!empty($search_data['city'])){if($search_data['city']==$value['city_name']){echo "selected";}} ?> value="<?php echo $value['city_name']; ?>"><?php echo $value['city_name']; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 text-center">
							<label class="control-label"></label>
							<!-- <input type="submit" name="" class="btn search-filter-btn" value="Quick Search"> -->
							<input type="submit" name="" class="btn" value="Quick Search">
						</div>
					</div>
				</form>
			</div>
			<div class="col-lg-9 search-page-content-section">
				<div class="row single-proposal-container">
					<?php foreach($get_data_by_pagination as $value){ ?>
					<div class="col-lg-4 single-proposal-gallery">
						<div class="row">
							<div class="proposal-img text-center">
								<?php if($value['gender']=="Male"){ ?>
									<img src="<?php echo base_url("assets/user/img/m-avatar.png"); ?>">
								<?php }elseif($value['gender']=="Female"){ ?>
									<img src="<?php echo base_url("assets/user/img/f-avatar.png"); ?>">
								<?php } ?>
							</div>
							<div class="proposal-details">
								<div class="row">
									<div class="col-lg-12 candidate-name">
										<label>Name:</label>
										<span><?php echo $value['full_name']; ?></span>
									</div>
									<div class="col-lg-12 candidate-age">
										<label>Age:</label>
										<span><?php echo $value['age']; ?>,</span>
										<label>Height:</label>
										<span><?php echo $value['height']; ?></span>
									</div>
									<div class="col-lg-12 religion">
										<label>Religion:</label>
										<span><?php echo $value['religion']; ?></span>
									</div>
									<div class="col-lg-12 candidate-age">
										<label>Cast:</label>
										<span><?php echo $value['cast']; ?>,</span>
										<label>City:</label>
										<span><?php echo $value['city']; ?></span>
									</div>
									<div class="col-lg-12 horizontal-line">
										<hr>
									</div>
									<div class="col-lg-12 proposal-detail-btn">
										<a href="<?php echo base_url("profile/".$value['user_id']); ?>" class="btn">Show Complete Details</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<?php echo $this->pagination->create_links(); ?>
						<!-- <a class="btn load-more-btn" <?php //if(count($get_data_by_filter)==0){echo "style='display: none;'";} ?> total-data-loaded="<?php //echo count($get_data_by_filter); ?>" load-more="12">Load More</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>