<?php

	function globalCss()
	{
		?>
		<?= link_tag("https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css")?>
		<?= link_tag("assets/css/bootswatch/bootstrap.min.css")?>
		<?= link_tag("assets/css/custom-css.css")?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- FontAwsome Icons -->
		<link href="https://fonts.googleapis.com/css2?family=Raleway&family=Tangerine&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
		<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
		<link rel="shortcut icon" href="<?= base_url('assets/img/logo.png')?>">
		<link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">
		<?php
	}

	function globalJs()
	{
		?>
		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		  
		<script
			type="text/javascript"
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<script 
			type="text/javascript"
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
		<script 
			type="text/javascript"
			src="<?= base_url("assets/js/custom-js.js")?>"></script>
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<?php
	}
?>