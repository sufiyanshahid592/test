	<div class="filter-section">
		<div class="short-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<ul>
							<li><a href="<?php echo base_url("search?cast=Aheer"); ?>">Aheer</a></li>
							<li><a href="<?php echo base_url("search?cast=Ansari"); ?>">Ansari</a></li>
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
							<li><a href="<?php echo base_url("search?cast=Siddiqui"); ?>">Siddiqui</a></li>
							<li><a href="<?php echo base_url("search?cast=Khan"); ?>">Khan</a></li>
							<li><a href="<?php echo base_url("list-of-casts"); ?>">See More</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-gl-12">
					<div class="quick-search">
						<span class="home-page-title">Welcome To MunasibRishta.com</span>
						<span class="home-page-title">Quick Search</span>
						<form class="quick-search-form" action="<?php echo base_url("search"); ?>" method="get">
							<div class="row">
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
									<label>Gender</label>
									<select name="looking" class="form-control">
										<option value="">-- Select Gender --</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
									<label>Age From</label>
									<input type="number" name="age_from" class="form-control" placeholder="18">
								</div>
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
									<label>Age To</label>
									<input type="number" name="age_to" class="form-control" placeholder="50">
								</div>
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
									<label>Religion</label>
									<select class="form-control" name="religion">
										<option value="">-- Select Religion --</option>
										<option value="Islam">Islam</option>
										<option value="Christion">Christion</option>
									</select>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
									<label>Mother Tongue</label>
									<select class="form-control" name="mother_tongue">
										<option value="">-- Select Mother Tongue --</option>
										<option value="Punjabi">Punjabi</option>
										<option value="Urdu">Urdu</option>
									</select>
								</div>
								<div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
									<label>Marital Status</label>
									<select class="form-control" name="marital_status">
										<option value="">-- Select Marital Status --</option>
										<option value="Unmarried">Unmarried</option>
										<option value="Married">Married</option>
										<option value="Widow/Widower">Widow/Widower</option>
										<option value="Divorced">Divorced</option>
										<option value="Separated">Separated</option>
										<option value="Divorced">Divorced</option>
									</select>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
									<label class="control-label"></label>
									<input type="submit" name="" class="btn" value="Quick Search">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="home-image">
		<div class="container">
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-8 text-center">
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
				<div class="col-lg-2"></div>
			</div>
		</div>
	</div>
	<div class="proposal-gallery">
		<div class="container">
			<div class="row">
				<?php foreach($get_all_proposals as $value){ ?>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 single-proposal-gallery">
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
				<?php } ?>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="<?php echo base_url("search"); ?>" class="btn btn-primary">See More Profiles</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-justify">
					<h1 style="font-weight: bold;">Rishta Online with Munasib Rishta</h1>
					<p>Marriage is a very important part of the life of a person. Because it’s the beginning of new life with your partner. But the question is how to get the partner or Rishta. As you know you can not be unserious about your life partner. You must have to know at least the basic or general information about your life partner such as what is his/her job, education, religion and sometimes cast. Let’s suppose if you marry someone without knowing all the general information about your life partner then how would you spend your whole life with that person.</p>
					<p>If you are having a problem in finding a life partner and you are confused about it then you don’t have to be because there are a number of <b>matrimonial websites</b> in Pakistan that are providing you the <strong>Rishta online</strong>. That's a very easy and secure process. You can find Rishta online. As we all know that with the advancement and large use of the internet it’s being very easy to resolve such problems and the Pakistani marriage websites really help you a lot to find a better and suitable partner for your life.</p>
					<h2 style="font-weight: bold;">How to get munasib Rishta online?</h2>
					<p>In the world, many people are here just for fun or many are not real. You might be thinking that how can you find a suitable or munasib rishta online?. Although you don’t know the people, how can you say that the online Rishta will be suitable for you?. Well the simple and easy answer is the websites that are providing Rishta online are aware of the chances of upcoming problems. These websites take some affordable charges from you and post your ad on their website with your profile and all the general information such as Your name, religion, education, age,  job, and etc. Also, they ask you about your choice like what kind of life partner are you looking for Rishta online. You will be able to get a munasib <a href="<?php echo base_url(); ?>">Rishta online</a> and You can later meet for further information if you are interested. So like this way you can easily find a suitable, durable, and munasib Rishta online with all the securities.</p>
					<h3 style="font-weight: bold;">Rishta online with contact number?</h3>
					<p>Rishta online with contact number is available on many websites. Because if you are interested and you want to contact them then obviously you need any contact number to have a meeting with them and discuss further information. While living in Pakistan if you are not a Muslim and belongs to another religion then it’s not a big deal you can't find the <b>right online with contact number</b> related to your religion. So therefore you can easily find Rishta online with contact number. Munasib Rishta is a website from where you can find the best rishta online for you. This website is secure at all and it fulfills all your desires. This website provides the rishta online with a contact number. This Pakistani <b>Shaadi website</b> asks you to pay a very affordable fee and the team is aware of the fact that finding a life partner is not like a piece of cake. You will be very secure and all your information is completely secure. </p>
					<h4 style="font-weight: bold;">What makes us different from other Rishta online websites?</h4>
					<p>There are a number <b>rishta websites in Pakistan</b> that provide Rishta online. But Munasib Rishta online is a website which is different from other rishta online websites because you are fully secure and the team will help you the best to find a suitable Rishta online. The fee is also very affordable as compared to other websites providing you with full information related to the Rishta you are interested in. Our website is also aware of your needs and what you are looking for. These following points make us different from other shaadi websites.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="bureau-btn-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<a href="https://bureau.munasibrishta.com">Bureau Panel</a>
				</div>
			</div>
		</div>
	</div>