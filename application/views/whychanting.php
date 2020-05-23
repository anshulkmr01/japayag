<!DOCTYPE html>
<html>
<head>
	<title>Why Chanting</title>
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
		<div class="container-fluid header-video">
		<div class="logo-container">
			<a href="<?= base_url('/')?>"><img src="<?= base_url('assets/img/logo.png')?>"></a>
		</div>
		<div class="counter-container row display-counter-container">
			<h1>All you need is your voice and your ears to begin this simple, sublime yoga meditation.</h1>
		</div>
	</div>
		<div class="container-fluid">
			<div class="container p-5">
				<div class="section-heading  text-center">
					<h1 class=" mb-3 text-primary fancy-heading">Why And How To Chant Hare Krishna</h1>
					<div class="seperator"></div>
				</div>
				<p class="mt-4 mb-4 text-justify">
					Have you seen this message before? “Please chant these names of God—Hare Krishna, Hare Krishna, Krishna Krishna, Hare Hare/ Hare Rama, Hare Rama, Rama Rama, Hare Hare—and your life will be sublime.”
				</p>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<div>
						<p class="text-justify">
						You’re unusual if you haven’t, because for the past seventeen years this statement has been printed on millions of signs and billboards, cards and flyers, posters and book jackets. It’s been repeated on television and radio, in newspapers and magazines, and personally to hundreds of thousands of people in airports, in malls, and on street corners around the world. “Please, just try chanting Hare Krishna, and your life will be sublime!”
						</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div>
						<h3></h3>
						<p class="text-justify">
						<iframe class="w-100" width="560" height="315" src="https://www.youtube.com/embed/52FC7R-7_10" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</p>
						</div>			
					</div>
				</div>
				<div class="row mt-4 text-justify">
					<h3>Meditation Courses Based on the Ancient Vedic Teachings</h3>
					<p>The courses and workshops presented on <span class="dark-span-text">Japa Yagna</span> are based on the ancient Vedic teachings as presented by His Divine Grace A.C. Bhaktivedanta Swami Prabhupada, the Founder-Acharya of the International Society for Krishna Consciousness (ISKCON), also known as the Hare Krishna movement. ISKCON began in New York City in 1966 when Srila Prabhupada came to the United States to share the teachings that are now the spiritual foundation of the meditation training offered in our workshops and courses. Today, ISKCON includes over six hundred major centers, temples, and rural communities throughout the world.
					</p>
					<p>
					At <span class="dark-span-text">Japa Yagna</span> you’ll find a dedicated team of volunteers and professionals living the lifestyle of the teachings we share in our courses, and with many years of experience in chanting the maha-mantra, meditation techniques, understanding the teachings of the Bhagavad Gita, and the practice of bhakti-yoga or devotional service.
					</p>
					<p>
					ISKCON’s founder, <span class="dark-span-text">Srila Prabhupada</span>, introduced the techniques and benefits of chanting the maha-mantra to people around the world. This trailer for a full-length documentary on ISKCON gives you an introduction to his journey into a million hearts.</p>
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
	AOS.init();
	</script>

</html>