<!DOCTYPE html>
<html>
<head>
	<title>Japa Yag | Register Devote</title>
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
		<div class="counter-container row authentication-container">
			<!--Login Block-->
			<div class="container-fluid text-left">
				<div class="container">
					<div class="row">
						<?php
						$country_data = "";
						$country_data = file_get_contents(base_url('assets/countries.min.json/countries.min.json'));
						?>

					<div class="col-md-2"></div>
					<div class="user-login p-5 col-md-8 bg-primary-white">
					<form action="<?= base_url('registerNewUser')?>" method="post">
					  <fieldset>
					    <legend>Devote Registration Form</legend>
					  </fieldset>
					  <div class="row">
					  	<div class="col-sm-6">
					  		<div class="form-group">
						      <label>Full Name</label>
						      <input type="text" name="name" value="<?= set_value('name')?>" class="form-control" placeholder="Full Name">
						      <?= form_error('name')?>
						    </div>
					  	</div>
					  	<div class="col-sm-6">
						    <div class="form-group">
						      <label>Email</label>
						      <input type="email" name="email" value="<?= set_value('email')?>" class="form-control" placeholder="Email">
						      <?= form_error('email')?>
						    </div>
					  	</div>
					  	<div class="col-sm-6">
						    <div class="form-group">
						      <label>Phone number</label>
						      <input type="number" name="phone" value="<?= set_value('phone')?>" class="form-control" placeholder="Phone Number">
						      <?= form_error('phone')?>
						    </div>
					  	</div>
					  	<div class="col-sm-6">	
						    <div class="form-group">
						      <label>Contry</label>
						       <select name="country" class="form-control country" id="countrySel">
						        	<option value="" selected="selected">Your Country</option>
						      </select>
						      <?= form_error('country')?>
						    </div>
					  	</div>
					  	<div class="col-sm-6">
						    <div class="form-group">
						      <label>City</label>
						       <select name="city" class="form-control country" id="citySel">
						        	<option value="" selected="selected">Your City</option>
						      </select>
						      <?= form_error('city')?>
						    </div>
						</div>
						<div class="col-md-6">
						    <div class="form-group">
						      <label>Password</label>
						      <input type="password" name="password" value="<?= set_value('password')?>" class="form-control" placeholder="Password">
						      <?= form_error('password')?>
						    </div>
						</div>
						<div class="col-sm-6">
						    <div class="form-group">
							    <input type="submit" value="Signup" class="btn btn-primary rose-btn-primary">
							</div>
						</div>
					  </div>
					</form>
				    <hr>
				    <div class="form-group">
						<label>Already Registered? <a href="<?= base_url('user_login')?>">Login here</a></label>
				    </div>
					 </div>
					<div class="col-md-2"></div>
					</div>
				</div>
			</div>
			<!--/Login Block-->
		</div>
	</div>
	<script type="text/javascript">

	var stateObject = <?= $country_data; ?> 
	window.onload = function () {
	var countrySel = document.getElementById("countrySel"),
	citySel = document.getElementById("citySel");

	for (var country in stateObject) {
	countrySel.options[countrySel.options.length] = new Option(country, country);
	}

	countrySel.onchange = function () {
	citySel.length = 1; // remove all options bar first
	if (this.selectedIndex < 1) return; // done
	var city = stateObject[countrySel.value];
	for (var i = 0; i < city.length; i++) {
	citySel.options[citySel.options.length] = new Option(city[i], city[i]);
	}
	}
	}
	</script>
	<!-- footer -->
	<footer class="page-footer font-small text-center pt-5" >
		<?php $this->load->view('footer');?>
	</footer>
	<!-- /footer -->

</body>
	<?php 
			globalJs(); 
	?>
</html>
