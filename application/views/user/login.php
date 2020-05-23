<!DOCTYPE html>
<html>
<head>
	<title>Japa Yag | Login User</title>
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
	<div class="container-fluid header-video">
		<div class="logo-container">
			<a href="<?= base_url('/')?>"><img src="<?= base_url('assets/img/logo.png')?>"></a>
		</div>
		<div class="counter-container row display-counter-container">
			<h1>Awaken the True Essence of Your Being by Chanting the Maha-Mantra</h1>
		</div>
	</div>
	<!--Login Block-->
	<div class="container-fluid">
		<div class="container">
			<div class="row">
			<div class="user-login p-5 col-md-6">
			<form action="validateUser" method="post">
			  <fieldset>
			    <legend>Login to Continue</legend>
			    <div class="form-group">
			      <label>Email or Phone number</label>
			      <input type="text" name="phoneEmail" value="<?= set_value('phoneEmail')?>" class="form-control" placeholder="Email or Phone Number">
			      <?= form_error('phoneEmail')?>
			    </div>
			    <div class="form-group">
			      <label>Password</label>
			      <input type="password" name="password" value="<?= set_value('password')?>" class="form-control" placeholder="Password">
			      <?= form_error('password')?>
			    </div>
			    <div class="form-group">
				    <input type="submit" value="login" class="btn btn-primary rose-btn-primary">
				</div>
			  </fieldset>
			</form>
		    <div class="form-group">
				<label><a href="<?= base_url('forgotPassword')?>">Forgot Password</a></label>
		    </div>
		    <hr>
		    <div class="form-group">
				<label>New User? <a href="<?= base_url('user_signup')?>">Signup here</a></label>
		    </div>
			 </div>
			<div class="col-md-6"></div>
			</div>
		</div>
	</div>
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
