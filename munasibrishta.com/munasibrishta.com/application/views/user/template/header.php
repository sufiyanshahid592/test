<!DOCTYPE html>
<html>
<head>
	<?php if($this->uri->segment(1)==""){  ?>
		<title>Find Free Rishta Online on MunasibRishta.com</title>
		<meta name="title" content="Find Free Rishta Online on MunasibRishta.com"/>
		<meta name="description" content="MunasibRishta is best matrimonial website where you can find rishta online with contact number."/>
		<meta name="keywords" content="matrimonial website, shadi online, online marriage sites, rishta website, pakistani marriage website, rishta online with contact numbers"/>
	<?php }elseif($this->uri->segment(1)=="register"){ ?>
		<title>Registration MunasibRishta</title>
	<?php }elseif($this->uri->segment(1)=="login"){ ?>
		<title>Login MunasibRisht</title>
	<?php }elseif($this->uri->segment(1)=="profile"){ ?>
		<title>Proposal #<?php echo $this->uri->segment(2); ?></title>
	<?php }elseif($this->uri->segment(1)=="list-of-casts"){ ?>
		<title>List of Casts</title>
	<?php }elseif($this->uri->segment(1)=="search"){ ?>
		<title>Search Page <?php if(!empty($this->input->get("per_page"))){echo $this->input->get("per_page");}else{echo 1;} ?> of MunasibRishta</title>
	<?php }elseif($this->uri->segment(1)=="dashboard"){ ?>
		<title>Dashboard MunasibRishta</title>
	<?php }elseif($this->uri->segment(1)=="edit-profile"){ ?>
		<title>Edit Profile MunasibRishta</title>
	<?php } ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-WRMKP91CF8"></script>
	<script>
	  	window.dataLayer = window.dataLayer || [];
	  	function gtag(){dataLayer.push(arguments);}
	  	gtag('js', new Date());

	  	gtag('config', 'G-WRMKP91CF8');
	</script>
	<!-- <script>(function(s,u,z,p){s.src=u,s.setAttribute('data-zone',z),p.appendChild(s);})(document.createElement('script'),'https://iclickcdn.com/tag.min.js',3889866,document.body||document.documentElement)</script>
	<meta name="propeller" content="bba4339391fbbd8f73a54430bb3cd8a9"> -->
	<meta name="google-site-verification" content="9p_KYo8UfNv_nrSZvlvuk_0Fo05qthYlbtVt6VuNA0M" />
	<meta property="og:description" content="Where people register for marrige porposal and people can see lot's of porposal with contact details.">
	<meta property="og:image" content="<?php echo base_url("assets/user/img/mt-favicon.png") ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/bootstrap/css/bootstrap.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/user/css/modal.css"); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/user/css/style.css"); ?>">
	
	<link rel="icon" href="<?php echo base_url("assets/user/img/mt-favicon.png") ?>" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- <a href="https://wa.me/+923014065723" class="float" target="_blank">
		WhatsApp Support<i class="fa fa-whatsapp my-float"></i>
	</a> -->
	<script src="https://richinfo.co/js/rp.js"></script>
<script>
(function() {
    RichPartners.init({
        "pubid": "768174",
        "siteid": "267644",
        "niche": "33"
    });
})();
</script>
</head>
<body>
	<!-- <div class="mini-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="https://wa.me/+923014065723" target="_blank"><img src="<?php //echo base_url("assets/user/img/whatsapp.png"); ?>">24/7 WhatsApp Support</a>
				</div>
			</div>
		</div>
	</div> -->
	<div class="header">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 header-logo">
					<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url("assets/user/img/logo.png"); ?>"></a>
				</div>
				<!-- <div class="col-lg-5 col-md-5 col-md-12 col-xs-12 text-center">
					<form class="header-form" action="<?php //echo base_url("Profile_Controller/search_member"); ?>" method="post">
						<input type="text" name="member_id" placeholder="Enter Member ID">
						<input type="submit" name="" value="Search">
					</form>
				</div> -->
				<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 header-navbar">
					<ul class="nav navbar-nav pull-right">
						<li><a href="<?php echo base_url(); ?>">Home</a></li>
						<li><a href="<?php echo base_url("list-of-casts"); ?>">List of Casts</a></li>
						<!-- <li><a href="https://bureau.munasibrishta.com">Bureau Panel</a></li> -->
						<?php if(empty($this->session->userdata("login_id"))){ ?>
						<li><a href="<?php echo base_url("login"); ?>">Login</a></li>
						<li><a href="<?php echo base_url("register"); ?>">Register</a></li>
						<?php }else{ ?>
						<li><a href="<?php echo base_url("dashboard"); ?>">Dashboard</a></li>
						<li><a href="<?php echo base_url("logout"); ?>">Logout</a></li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
