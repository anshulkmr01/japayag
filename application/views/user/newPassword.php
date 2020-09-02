<!DOCTYPE html>
<html>
<head>
	<title>Japa Yag</title>
	<!-- Global Css using Helper -->
	<?php 
			globalCss(); 
	?>
	<!--/ Global Css using Helper -->
</head>
<body>
	<!-- Navbar -->
		<?php $this->load->view('navbar');?>
	<!--/ Navbar -->
	<div class="container-fluid header-video authentication-container-height">
		<div class="logo-container">
			<a href="<?= base_url('/')?>"><img src="<?= base_url('assets/img/logo.png')?>"></a>
		</div>
		<div class="counter-container authentication-container row">
			<!--Login Block-->
			<div class="container-fluid text-left">
				<div class="container">
					<div class="row">
					<div class="col-md-3"></div>
					<div class="user-login bg-primary-white p-5 col-md-6">
					<form action="<?= base_url('setNewPassword')?>" method="post">
					  <fieldset>
					    <legend>Set New Password</legend>
					    <div class="form-group">
					      <label>New Password</label>
					      <input type="Password" name="password" value="<?= set_value('password')?>" class="form-control" placeholder="New Password">
					      <?= form_error('password')?>
					    </div>
					    <div class="form-group">
						    <input type="submit" value="Change" class="btn btn-primary rose-btn-primary">
						</div>
					  </fieldset>
					</form>
				    <div class="form-group">
						<label>Remember Password? <a href="<?= base_url('user_login')?>">Login here</a></label>
				    </div>
				    <hr>
				    <div class="form-group">
						<label>New User? <a href="<?= base_url('user_signup')?>">Signup here</a></label>
				    </div>
					 </div>
					<div class="col-md-3"></div>
					</div>
				</div>
			</div>
			<!--/Login Block-->
		</div>
	</div>
	<!--Login Block-->
<!-- 	<div class="container-fluid">
		<div class="container">
			<div class="row">
			<div class="user-login p-5 col-md-6">
			<form action="<?= base_url('setNewPassword')?>" method="post">
			  <fieldset>
			    <legend>Set New Password</legend>
			    <div class="form-group">
			      <label>New Password</label>
			      <input type="Password" name="password" value="<?= set_value('password')?>" class="form-control" placeholder="New Password">
			      <?= form_error('password')?>
			    </div>
			    <div class="form-group">
				    <input type="submit" value="Change" class="btn btn-primary rose-btn-primary">
				</div>
			  </fieldset>
			</form>
		    <div class="form-group">
				<label>Remember Password? <a href="<?= base_url('user_login')?>">Login here</a></label>
		    </div>
		    <hr>
		    <div class="form-group">
				<label>New User? <a href="<?= base_url('user_signup')?>">Signup here</a></label>
		    </div>
			 </div>
			<div class="col-md-6"></div>
			</div>
		</div>
	</div> -->
	<!--/Login Block-->

	<!-- footer -->
	<footer class="page-footer font-small text-center pt-5" >
		<?php $this->load->view('footer');?>
	</footer>
	<!-- /footer -->

</body>
	<?php 
			globalJs(); 
	?>
	<script 
			type="text/javascript" src="<?= base_url("assets/js/slick-slider.js")?>"></script>
	<script>
		AOS.init();
	</script>

</html>
