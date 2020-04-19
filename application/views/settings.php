<!DOCTYPE html>
<html>
<head>
	<title>Japa Yag | Settings</title>
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
	<!-- Main Body -->

	<!--/ Main Body -->
	<!-- footer -->
	<footer>
		<?php $this->load->view('footer');?>
	</footer>
	<!-- /footer -->

</body>
	<?php 
			globalJs(); 
	?>
	<script>
	AOS.init();
	</script>

</html>
