<!DOCTYPE html>
<html>
<head>
	<title>Japa Yag | Track Your Chanting</title>
	<!-- Global Css using Helper -->
	<?php 
			globalCss(); 
	?>
	<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
	<!--/ Global Css using Helper -->
</head>
<body>
	<!-- Navbar -->
		<?php $this->load->view('navbar');?>
	<!--/ Navbar -->
	<!-- Main Body -->
	<div class="container-fluid text-center">
		<div class="continer p-5">
			<h1 class="satisfy-font">Global Japa Mala Daly Graph</h1>
			<hr>
			<div class="satisfy-font">
				<h4 class="p-2 color-505050 background-efefef">
				|| Hare Krishna Hare Krishna Krishna Krishna Hare Hare, Hare Rama Hare Rama Rama Rama Hare Hare ||
				</h4>
			</div>
			<div>

			<div id="chartContainer" class="mt-5" style="height: 370px; width: 100%;"></div>
			<br>

			<hr>
			<h3 class="satisfy-font">Global Japa Mala Target</h3>
			</div>
			<div class="global-counter pt-5">
				<div class="row">
					<div class="col-md-4 p-5 res-border-right-dark">
						<div class="gotu-font"><h2>1M Japa</h2></div>
						<div class=""><legend>We are targeting<legend></div>
					</div>
					<div class="col-md-4 p-5 res-border-right-dark">
						<div class="gotu-font"><h2><?php echo $japaCount; ?></h2></div>
						<div class=""><legend>Where We have reached<legend></div>
					</div>
					<div class="col-md-4 p-5">
						<div class="gotu-font"><h2><?php echo ($japaCount*100)/1000000 ?>%</h2></div>
						<div class=""><legend>We have Achived<legend></div>
					</div>
				</div>
			</div>
		</div>
			Let's Chant Hare Krishna Maha Mantra Together and Fight towards COVID 19
	</div>

	<div class="container-fluid text-center">
		<div class="row mt-5 today-japa p-5">
			<div class="col-sm-4 res-border-right-dark p-2">
				<?php if($maxJapaCountCity){
					foreach ($maxJapaCountCity as $key => $value) {
						$city = $key;
						$count = $value;
					}
				?>
				<h5>With <?= $value['count']; ?> Japa</h5>
				<legend><?= $key; ?>, <?= $value['country']; ?></legend>
				<small>is on top worldwide</small>
				<?php } else echo "<h5>No Japa Available</h5>";?>
			</div>
			<div class="col-sm-4 res-border-right-dark p-2">
				<h5><?php print_r($todayJapaCount); ?></h5>
				<legend>Today's Japa Count</legend>
				<small>world wide</small>
			</div>
			<div class="col-sm-4 p-2"></div>
		</div>
	</div>
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

	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

	<script>
	window.onload = function () {
	 
	var chart = new CanvasJS.Chart("chartContainer", {
		animationEnabled: true,
		theme: "light2",
		title:{
			text: ""
		},
		axisX:{
			crosshair: {
				enabled: true,
				snapToDataPoint: true
			}
		},
		axisY:{
			title: "Number of Japa Globally",
			crosshair: {
				enabled: true,
				snapToDataPoint: true
			}
		},
		toolTip:{
			enabled: true
		},
		data: [{
			type: "area",
			dataPoints: <?php echo json_encode($japaTotalData, JSON_NUMERIC_CHECK); ?>
		}]
	});
	chart.render();
	 
	}
	</script>
	<script>
	AOS.init();
	</script>

</html>
