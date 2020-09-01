<!DOCTYPE html>
<html>
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-176842645-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-176842645-1');
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-166082149-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-166082149-1');
		</script>

	<title>Japa Yag | Track Your Chanting</title>
	<!-- Global Css using Helper -->
	<?php 
			globalCss(); 
	?>

	<?= link_tag("assets/css/footable.bootstrap.min.css")?>
	<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Gotu&display=swap" rel="stylesheet">
	<!--/ Global Css using Helper -->
</head>
<body>
	<!-- Navbar -->
		<?php $this->load->view('navbar');?>
	<!--/ Navbar -->
	<!-- Main Body -->
	<div class="container-fluid header-video">
		<div class="logo-container">
			<a href="<?= base_url('/')?>"><img src="<?= base_url('assets/img/logo.png')?>"></a>
		</div>
		<div class="counter-container row">
			<h1>Awaken the True Essence of Your Being by Chanting the Maha-Mantra</h1>
			<br>
			<h4>Learn to nurture your higher nature and discover harmony, purpose and a deeper connection with all aspects of your life.</h4>
			<div class="video-header-button"  data-aos="fade-up">
				<span><a class="btn btn-primary transparent-button" href="">See Global Japa Statics</a></span> <span><a class="btn btn-primary transparent-button" href="<?= base_url('knowJapayag'); ?>">Know Japa Yagna</a></span>
			</div>
		</div>
		<div class="overlay-video"></div>
		<div id="video-placeholder"></div>
		<span class="video-volume"><i id="mute" class="fas fa-volume-up"></i></span>
		<div class="video-image">
			<img src="<?= base_url('assets/img/videobackground.jpg')?>">
		</div>
	</div>

	<div class="container-fluid text-center counter-container-parent pb-5">
		<div class="continer p-5">
			<!-- <h1 class="satisfy-font">Global Japa Mala Daly Graph</h1>
			<hr>
			<div class="satisfy-font">
				<h4 class="p-2 color-505050 background-efefef">
				|| Hare Krishna Hare Krishna Krishna Krishna Hare Hare, Hare Rama Hare Rama Rama Rama Hare Hare ||
				</h4>
			</div>
			<div>

			<div id="chartContainer" class="mt-5" style="height: 370px; width: 100%;"></div>
			<br>

			<hr> -->
			<div class="section-heading">
				<h1 class=" mb-3 text-primary fancy-heading">5 Million Japa for the speedy recovery of His Holiness Gopal Krishna Maharaj</h1>
				<div class="seperator"></div>
				<p class="m-4">Global Japa Yagna is Counting Japa From All Over World. We are targeting 5M Japa for the speedy recovery of His Holiness Gopal Krishna Maharaj. lets chant hare krishna maha mantra together.</p>
			</div>	
			</div>
			<div class="global-counter">
				<div class="row" id="counter">
					<div class="col-md-4 p-5 res-border-right-dark">
						<div class="gotu-font"><h2><span class="counter-value" data-count="5">0</span> M Japa</h2></div>
						<div class=""><legend>We are targeting<legend></div>
					</div>
					<div class="col-md-4 p-5 res-border-right-dark">
						<div class="gotu-font"><h2><span class="counter-value" data-count="<?php echo $japaCount; ?>">0</span></h2></div>
						<div class=""><legend>Where We have reached<legend></div>
					</div>
					<div class="col-md-4 p-5">
						<div class="gotu-font"><h2><span class="counter-value" data-count="<?php echo round(($japaCount*100)/5000000) ?>">0</span>%</h2></div>
						<div class=""><legend>We have Achived<legend></div>
					</div>
				</div>
			</div>
			<div class="pt-2"  data-aos="fade-up"><span><a href="<?= base_url('my_japa_mala')?>" class="btn btn-primary">Get Started</a></span></div>
		</div>
	</div>

	<div class="container-fluid text-center japa-data" data-aos="fade-up">
		<div class="row pt-5 today-japa p-5">
			<div class="col-sm-2"></div>
			<div class="col-sm-4 res-border-right-dark p-2">
				<?php if($maxJapaCountCity){
					foreach ($maxJapaCountCity as $key => $value) {
						$city = $key;
						$count = $value;
					}
				?>
				<h5>With <span class="counter-value" data-count="<?= $value['count']; ?>">0</span> Japa</h5>
				<legend><?= $key; ?>, <?= $value['country']; ?></legend>
				<span>have Maximum Japa</span>
				<?php } else echo "<h5>No Japa Available</h5>";?>
			</div>
			<div class="col-sm-4 p-2">
				<h5> <span class="counter-value" data-count="<?= $todayJapaCount; ?>">0</span></h5>
				<legend>Today's Japa Count</legend>
				<span>world wide</span>
			</div>
			<div class="col-sm-2"></div>
		</div>
	</div>

	<div class="container-fluid japayagna-section pt-5 pb-5">
		<div class="container">
				<div class="section-heading  text-center">
					<h1 class=" mb-3 text-primary fancy-heading">Japa Yagna is for Everyone</h1>
					<div class="seperator"></div>
				</div>
				<div class="row">
					<div class="col-sm-8">
						<div class="japayagna-content mt-4" data-aos="fade-right" data-aos-anchor-placement="top-center">
						<p>
							Japa Yagna is a place where anyone can come with krishna concession and can start chanting hare krishna mahamanta. Japa yagna offer many courses for learning Chanting and Meditation.
						</p>

						<h3>Japa yagna is made for: </h3>
						<p>
						<ul>
							<li>Spread Krishna Consciousness</li>
							<li>A Digital Plateform for all Krishna Devotee</li>
							<li>Globally Chant Counting</li>
							<li>Online Japa Counter</li>
							<li>Japa Yagna Global Statatics</li>
							<li>Daily Challanges and Global Challanges for encourage Devotee</li>
							<li>Japa Courses</li>
							<li>Chanting Krishna Name</li>
						</ul>
						</p>
						</div>
					</div>
					<div class="col-sm-4">
					</div>
				</div>

		</div>
	</div>

	<div class="container-fluid pt-5 pb-5">
		<div class="container">
			
				<div class="section-heading  text-center">
					<h1 class=" mb-3 text-primary fancy-heading">Why Chanting?</h1>
					<div class="seperator"></div>
					<p class=" mt-4">When you chant God’s names, you reawaken your original spiritual consciousness. Because all living beings are spiritual souls, we’re originally Krishna conscious. God conscious. But because we’ve been in this material world an endlessly long time, our consciousness has become covered by material illusion.</p>
				</div>
				<div class="row mt-4 text-center">
					<div class="chant-reason col-sm-12 col-md-6 col-lg-3"><div data-aos="fade-up" class="chant-reason-block"><img src="<?= base_url('assets/img/why-chanting/Anxiety.jpg')?>"><h5>Reduces Anxiety and Depression</h5></div></div>
					<div class="chant-reason col-sm-12 col-md-6 col-lg-3"><div data-aos="fade-up" class="chant-reason-block"><img src="<?= base_url('assets/img/why-chanting/Neurotic.jpg')?>"><h5>Releases Neuroses</h5></div></div>
					<div class="chant-reason col-sm-12 col-md-6 col-lg-3"><div data-aos="fade-up" class="chant-reason-block"><img src="<?= base_url('assets/img/why-chanting/CompassionateBrain.jpg')?>"><h5>Engenders Compassion</h5></div></div>
					<div class="chant-reason col-sm-12 col-md-6 col-lg-3"><div data-aos="fade-up" class="chant-reason-block"><img src="<?= base_url('assets/img/why-chanting/Soothing.jpg')?>"><h5>Boosts Immunity</h5></div></div>
					<div class="chant-reason col-sm-12 col-md-6 col-lg-3"><div data-aos="fade-up" class="chant-reason-block"><img src="<?= base_url('assets/img/why-chanting/Intuition.jpg')?>"><h5>Opens Intuition</h5></div></div>
					<div class="chant-reason col-sm-12 col-md-6 col-lg-3"><div data-aos="fade-up" class="chant-reason-block"><img src="<?= base_url('assets/img/why-chanting/Radiance.jpg')?>"><h5>Increases Radiance</h5></div></div>
					<div class="chant-reason col-sm-12 col-md-6 col-lg-3"><div data-aos="fade-up" class="chant-reason-block"><img src="<?= base_url('assets/img/why-chanting/Empowering.jpg')?>"><h5>It is Empowering</h5></div></div>
					<div class="chant-reason col-sm-12 col-md-6 col-lg-3"><div data-aos="fade-up" class="chant-reason-block"><img src="<?= base_url('assets/img/why-chanting/Depression.jpg')?>"><h5>It is Soothing</h5></div></div>
				</div>
				<div class="pt-2 text-center"><span><a href="<?= base_url('whychanting')?>" class="btn btn-primary rose-btn-border">Read More</a></span></div>
		</div>
	</div>
	
		<div class="container-fluid pt-5 pb-5 online-offering">
		<div class="container">
				<div class="section-heading  text-center">
					<h1 class=" mb-3 text-primary fancy-heading">Online Offerings</h1>
					<div class="seperator"></div>
					<p class=" mt-4">Learn Powerful Meditation Techniques and Explore the Ancient Wisdom Behind Chanting.</p>
				</div>
				<div class="row mt-4 text-center">
					<div class="mt-5 col-sm-12 col-md-4"><div data-aos="fade-up" class="online-offering-col"><img src="<?= base_url('assets/img/maxresdefault.jpg'); ?>"><div class="p-3"><h4>Learn Chanting in 5 Minute</h4><p class="text-justify">For the beginners or who are not aware frrom how to do chanting we have a short video make them learn how to start chanting Hare Krishna Mahamantra.</p><!-- <div class="pt-2"><span><a href="<?= base_url('my_japa_mala')?>" class="btn btn-primary rose-btn-border">More Info</a></span></div> --></div></div></div>
					<div class="mt-5 col-sm-12 col-md-4"><div data-aos="fade-up" class="online-offering-col"><img src="<?= base_url('assets/img/chantingcourse.jpg'); ?>"><div class="p-3"><h4>Chanting Course</h4><p class="text-justify">Who is well known how to chant we have chanting course for them for better meditation during chanting. We are launching new caourses for more knowledge about chanting</p><!-- <div class="pt-2"><span><a href="<?= base_url('my_japa_mala')?>" class="btn btn-primary rose-btn-border">More Info</a></span></div> --></div></div></div>
					<div class="mt-5 col-sm-12 col-md-4"><div data-aos="fade-up" class="online-offering-col"><img src="<?= base_url('assets/img/sprituallife.jpg'); ?>"><div class="p-3"><h4>How to live Spritual</h4><p class="text-justify">To live spiritually involves bringing as much spirit into your life as possible. Japa Yagna offering different cources and life style on how can we live spritual life. </p><!-- <div class="pt-2"><span><a href="<?= base_url('my_japa_mala')?>" class="btn btn-primary rose-btn-border">More Info</a></span></div> --></div></div></div>
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
	<script type="text/javascript">
		var a = 0;
		$(window).scroll(function() {
		  var oTop = $('#counter').offset().top - window.innerHeight;
		  if (a == 0 && $(window).scrollTop() > oTop+100) {
		    $('.counter-value').each(function() {
		      var $this = $(this),
		        countTo = $this.attr('data-count');
		      $({
		        countNum: $this.text()
		      }).animate({
		          countNum: countTo
		        },

		        {

		          duration: 2000,
		          easing: 'swing',
		          step: function() {
		            $this.text(Math.floor(this.countNum));
		          },
		          complete: function() {
		            $this.text(this.countNum);
		            //alert('finished');
		          }

		        });
		    });
		    a = 1;
		  }

		});
	</script>
	<script type="text/javascript" src="<?= base_url("assets/js/footable.min.js")?>"></script>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script src="https://www.youtube.com/iframe_api"></script>
	<script>
		var player,videoID="4kzBjW5y8qs";
		function onYouTubeIframeAPIReady(){
			player=new YT.Player("video-placeholder",{
				videoId:videoID,
				playerVars:{
					autoplay:1,
					playinline:1,
					mute:0,
					controls:"0",
					playlist:videoID
				},
				events:{
					onReady:initialize
				}
				})}
			function initialize(){
				$("#volume-input").val(Math.round(player.getVolume()))
					}
				$("#mute").on("click",function(){
					var e=$(this);player.isMuted()?(player.unMute(),
						e.addClass("fa-volume-up"),
						e.removeClass("fa-volume-mute")):(player.mute(),
						e.addClass("fa-volume-mute"),e.removeClass("fa-volume-up"))}),
				$("#volume-input").on("change",
					function(){
						player.setVolume($(this).val())
					});
	</script>
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
		jQuery(function($){
			$('.table').footable();
		});
	</script>
</html>
