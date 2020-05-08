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
	<div class="container-fluid header-video">
		<div class="logo-container">
			<img src="<?= base_url('assets/img/logo.png')?>">
		</div>
		<img src="<?= base_url('assets/img/2.jpg')?>">
	</div>
	<!--Login Block-->
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<?php
				$country_data = "";
				$country_data = file_get_contents(base_url('assets/countries.min.json/countries.min.json'));
				?>
			<div class="user-login p-5 col-md-6">
			<form action="<?= base_url('registerNewUser')?>" method="post">
			  <fieldset>
			    <legend>Devote Registration Form</legend>
			    <div class="form-group">
			      <label>Full Name</label>
			      <input type="text" name="name" value="<?= set_value('name')?>" class="form-control" placeholder="Full Name">
			      <?= form_error('name')?>
			    </div>
			    <div class="form-group">
			      <label>Email</label>
			      <input type="email" name="email" value="<?= set_value('email')?>" class="form-control" placeholder="Email">
			      <?= form_error('email')?>
			    </div>
			    <div class="form-group">
			      <label>Phone number</label>
			      <input type="number" name="phone" value="<?= set_value('phone')?>" class="form-control" placeholder="Phone Number">
			      <?= form_error('phone')?>
			    </div>
			    <div class="form-group">
			      <label>Contry</label>
			       <select name="country" class="form-control country" id="countrySel">
			        	<option value="" selected="selected">Your Country</option>
			      </select>
			      <?= form_error('country')?>
			    </div>
			    <div class="form-group">
			      <label>City</label>
			       <select name="city" class="form-control country" id="citySel">
			        	<option value="" selected="selected">Your City</option>
			      </select>
			      <?= form_error('city')?>
			    </div>
			    <div class="form-group">
			      <label>Password</label>
			      <input type="password" name="password" value="<?= set_value('password')?>" class="form-control" placeholder="Password">
			      <?= form_error('password')?>
			    </div>
			    <div class="form-group">
				    <input type="submit" value="Signup" class="btn btn-primary">
				</div>
			  </fieldset>
			</form>
		    <hr>
		    <div class="form-group">
				<label>Already Registered? <a href="<?= base_url('user_login')?>">Login here</a></label>
		    </div>
			 </div>
			<div class="col-md-6"></div>
			</div>
		</div>
	</div>
	<!--/Login Block-->
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
	<footer>
		<?php $this->load->view('footer');?>
	</footer>
	<!-- /footer -->

</body>
	<?php 
			globalJs(); 
	?>
</html>
