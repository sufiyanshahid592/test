<div class="login-and-register">
	<div class="container">
		<div class="col-lg-4"></div>
		<div class="col-lg-4 form-section">
			<h1>Login</h1>
			<?php if($this->session->userdata("error")){ ?>
				<div class="alert alert-danger"><?php echo $this->session->userdata("error"); ?></div>
			<?php } ?>
			<form action="<?php echo base_url("User_Controller/login_process"); ?>" method="post">
				<div class="row">
					<div class="col-lg-12">
						<label class="control-label">E-mail</label>
						<input type="text" name="e_mail" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<label class="control-label">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<input type="submit" name="" class="btn login-btn" value="Login">
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 text-center">
						<p>If have not Account. Go to <a href="<?php echo base_url('register'); ?>">Register</a></p>
					</div>
				</div>
			</form>
		</div>
		<div class="col-lg-4"></div>
	</div>
</div>