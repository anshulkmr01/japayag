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

	<title>Japa Yag | Know Japa Yagna</title>
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
			<img src="<?= base_url('assets/img/logo.png')?>">
		</div>
		<div class="counter-container row display-counter-container">
			<h1>Japa Yagna is for everyone who knows Krishna & wants to know Krishna</h1>
		</div>
	</div>
		<div class="container-fluid">
			<div class="container p-5">
				<div class="section-heading  text-center">
					<h1 class=" mb-3 text-primary fancy-heading">Know Japa Yagna</h1>
					<div class="seperator"></div>
				</div>
				<p class="mt-4 mb-4 text-justify">
					<span class="dark-span-text">Japa Yagna</span> is a Non profit organization in all over world which focuses on Spiritual upliftment of mankind and selfless service of suffering patients through Chanting under the divine guidance of <span class="dark-span-text">A. C. Bhaktivedanta Swami Prabhupada</span> Motive of Japayagna is giving a Comman plateform to all the devotees.
				</p>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<div>
						<h3>Japa Yagna</h3>
						<p class="text-justify">
						Japa Yagna is made for Awareness of ISKCON Online, Inc., a global division of the International Society for Krishna Consciousness and based in the United States. ISKCON is a non-profit organization aimed at using the power of the online world in making the teachings and practices of bhakti-yoga or Krishna consciousness easily accessible through online education.
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
		<div class="container-fluid japayagna-section pt-5 pb-5">
			<div class="section-heading  text-center">
				<h1 class=" mb-3 text-primary fancy-heading">Bhakti Yoga</h1>
				<div class="seperator"></div>
			<p class="mt-4 mb-4 text-center">
				The wisdom teachings and practices presented here are the parts of the ancient system of bhakti-yoga.
			</p>
			<div class="row">
				<div class="col-12">
					<div class="japayagna-content mt-4">
					<p>
						Bhakti is a Sanskrit word meaning devotion. However, because devotion is shown in action or service, the more precise definition of bhakti is “service done with devotion to the divine”
					</p>
					<p>
						Bhakti is our essential nature; the core of who we are as spiritual beings. Since bhakti lies within us, bhakti-yoga directs us to awaken our dormant devotion through daily spiritual practices, and also demonstrate our bhakti in every aspect of our lives –   and in every relationship.
					</p>
					<p>
						Various kinds of yoga form a ladder leading to self-realization. Although many people do not pursue yoga beyond physical exercise, those exercises are part of a broader yoga system aimed at calming the mind to a point at which one can meditate properly. The goal of such meditation is spiritual purification and divine connection (the word yoga means connection). Thus the real purpose of yoga is spiritual.
					</p>
					<p>
						Our nature as souls or spiritual beings is sat, cit, ananda, meaning we are eternal, full of bliss and full of knowledge. One might question that if this is my nature, why do I not always feel love and bliss? And why do I experience ignorance and fear of death? The reason is that our divine nature is not fully manifest. The practices of bhakti, especially meditation and Kirtan (the chanting taught here at Chantnow.com), reading sacred texts, associating with like-minded spiritual practitioners, and practical devotional service, gradually purify our consciousness and awaken the bhakti within us. As we make this connection, we experience more of our true nature and thus manifest more of our divine qualities.
					</p>
					<p>
						The courses, articles and other resources here at Chantnow.com are designed to introduce you to the path of bhakti in an easy and interesting way. Please take advantage of these resources and explore for yourself the promise of bhakti-yoga.
					</p>
					</div>
				</div>
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
