<!DOCTYPE html>
<html>
<head>
	<title>Japa Yag | Yoga Kirtan</title>
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
	<?php
	$latestid = 0;
	if($decodedForLatest['items']){
	foreach ($decodedForLatest['items'] as $Latestitems)
		{ 
			$latestid = $Latestitems['id']['videoId'];
		}
		}
	?>
	<div class="container-fluid text-center">
		<div class="continer p-5">
			<h1 class="satisfy-font">|| Yoga Kirtan ||</h1>
			<hr>
			<input type="hidden" id="latestVideoId" value="<?php echo $latestid?>">
			<iframe autoplay="1" id="videoPlayerFrame" height="500" style="width: 100%" allowtransparency="true" enablejsapi="1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
			<h3 class="gotu-font">More Videos From Yoga Kirtan</h3>
		<div class="youtube-player continer p-5">
			<div class="row">
				<?php

					if($decoded['items'])
					{
					$count = count($decoded['items']);
					foreach ($decoded['items'] as $items)
					{
						 if (--$count <= 0) {
							    break;
							}
					$id = $items['id']['videoId'];
					$title= $items['snippet']['title'];
					$description = $items['snippet']['description'];
					$thumbnail = $items['snippet']['thumbnails']['default']['url']; 
						?>				
					<div class="col-md-3 col-sm-6">
							<a onclick="playVideo('<?php echo $id ?>')">
								<div class="videoThumnail">
									<div class="play">
										<i class="fas fa-play"></i>
									</div>
									<img src="<?php echo $thumbnail ?>" class="img-100">
								</div>

								<div class="videoDescription">
									<p class="title"><b><?php echo $title ?></b></p>
									<p class="description"><?php echo $description ?></p>
								</div>
							</a>
					</div>
					<?php
					}
					}
						else{
							echo "No videos are available at this time from the channel specified!";
						}
					?>
			</div>
		</div>
	</div>
	
	
	<!--/ Main Body -->
	<!-- footer -->
	<footer class="page-footer font-small text-center pt-5" >
		<?php $this->load->view('footer');?>
	</footer>
	<!-- /footer -->

</body>
	<?php 
			globalJs();
	?>
	<script>

		//Youtube videos play
		window.onload = latestVideo();
		function latestVideo(){
				var latestVideoId = document.getElementById("latestVideoId").value;
				document.getElementById("videoPlayerFrame").src = "https://www.youtube.com/embed/"+latestVideoId;

		}
		 function playVideo(videoId) {
				document.getElementById("videoPlayerFrame").src = "https://www.youtube.com/embed/"+videoId+"?autoplay=1";
		}

		AOS.init();
	</script>

</html>
