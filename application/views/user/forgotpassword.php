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
						<div class="user-login p-5 bg-primary-white col-md-6">
						<form action="recoverPassword" method="post">
						  <fieldset>
						    <legend>Password Recovery</legend>
						    <div class="form-group">
						      <label>Email Address</label>
						      <input type="email" name="email" value="<?= set_value('email')?>" class="form-control" placeholder="Email Address">
						      <?= form_error('email')?>
						    </div>
						    <div class="form-group">
							    <input type="submit" value="Recover" class="btn btn-primary rose-btn-primary">
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
