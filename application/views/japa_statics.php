<!DOCTYPE html>
<html>
<head>
	<title>Global Hare Krishna Mahamantra Japa Statics</title>
	<meta name="description" content="Global Mahamantra Japa Statics"/>
	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-176842645-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-176842645-1');
		</script>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<title>Why Chanting</title>
	<!-- Global Css using Helper -->
	<?php 
			globalCss(); 
	?>
  	<!-- MDBootstrap Datatables  -->
	<?= link_tag("assets/css/addons/datatables.min.css") ?>

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
			<h1>Global Mahamantra Japa Yagna Statics</h1>
		</div>
	</div>
		<div class="container-fluid">
			<div class="container p-5">
				<div class="section-heading  text-center">
					<h1 class=" mb-3 text-primary fancy-heading">All Mahamantras from all over world at a place</h1>
					<div class="seperator"></div>
				</div>
				<p class="mt-4 mb-4 text-justify">
					Have you seen this message before? “Please chant these names of God—Hare Krishna, Hare Krishna, Krishna Krishna, Hare Hare/ Hare Rama, Hare Rama, Rama Rama, Hare Hare—and your life will be sublime.”
				</p>
				<div class="table-responsive-lg">
					<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0">
					  <thead>
					    <tr>
					      <th class="th-sm">#
					      </th>
					      <th class="th-sm">Country Name
					      </th>
					      <th class="th-sm">Total Japa
					      </th>
					      <th class="th-sm">Today's Japa
					      </th>
					      <th class="th-sm">Today Max Japa By (Devotee Name)
					      </th>
					      <th class="th-sm">City Data
					      </th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php $i=0; foreach ($japa_statics as $key => $value): $i++;?>
					    <tr>
					      <td><?= $i; ?></td>
					      <td><?= $key; ?></td>
					      <td><?= $value['total_japa']; ?></td>
					      <td><?= $value['today_japa']; ?></td>
					      <td><?php if ($value['today_max_japa_by']['name']) {
					      echo $value['today_max_japa_by']['name']." <span class='text-primary'>(".$value['today_max_japa_by']['japa']." Japa)</span>";
					      } ?></td>
					      <td><center><a href="<?= base_url('japa-statics-city/').$key?>"><span class="material-icons" style="line-height: normal;">link</span></a></center></td>
					    </tr>
					  	<?php endforeach ?>
					  </tbody>
					  <tfoot>
					    <tr>
					      <th class="th-sm">#
					      </th>
					      <th class="th-sm">Country Name
					      </th>
					      <th class="th-sm">Total Japa
					      </th>
					      <th class="th-sm">Today's Japa
					      </th>
					      <th class="th-sm">Today Max Japa By (Devotee Name)
					      </th>
					      <th class="th-sm">City Data
					      </th>
					    </tr>
					  </tfoot>
					</table>
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

  	<!-- MDBootstrap Datatables  -->
  	<script type="text/javascript" src="<?= base_url('assets/js/addons/datatables.min.js')?>"></script>

	<script>
		AOS.init();
	</script>

	<script type="text/javascript">
	    // Basic example
	    $(document).ready(function () {
	    $('#dtBasicExample').DataTable({
	    "ordering": true // false to disable sorting (or any other option)
	    });
	    $('.dataTables_length').addClass('bs-select');
	    });
	</script>
</html>