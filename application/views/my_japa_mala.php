<!DOCTYPE html>
<html>
<head>
	<title>Japa Yag | My Japa Mala Statics</title>
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
		<div class="container-fluid" style="min-height: 500px">
			<div class="container p-5">
				<?php 
					$mala_target = 16;
					$succes_color = "";
					$mala_percent_done = 0;
					$star = "";
					if(isset($todayJapaExist) >0){
						$mala_percent_done = $todayJapaExist*100/$mala_target."%";
						if($mala_percent_done > 0){
							$succes_color = "#8aca2d";
						}
						if($mala_percent_done > 100){
							$mala_percent_done = "100%+";
							$star = '<i class="fas fa-star"></i>';	
						}
					}
				?>
				<h3>Total Mala Completed : <?= $userTodayJapa ?></h3>
				<h3 style="color:<?= $succes_color?> "><?= $mala_percent_done?> done of daily challenge <?= $star?></h3>
				<h4>You have a daily chalange of <?= $mala_target; ?> Mala Japa yag</h4>
				<hr>
				<div class="row">
					<div class="col-sm-4">
						<?php if(isset($todayJapaExist) > 0):?>

						<!-- Update Japa Entry -->
						<label><?= $todayJapaExist; ?> Japa you have completed today</label>
						<?= form_open('updateJapa');?>
					    <div class="form-group">
					      <label>Update your Japa with new Number</label>
					      <input type="number" min="0" class="form-control" name="japanumber" value="<?= set_value('japanumber')?>" placeholder="New Japa Number">
					      <?= form_error('japanumber')?>
					      <small id="emailHelp" class="form-text text-muted">For <?= date('M,d,Y'); ?></small>
					      <small id="emailHelp" class="form-text text-muted">Make Sure you enter correct number of japa yag, Your Japa Yag Number will be counted for the Global statics</small>
					    </div>
						<fieldset class="form-group">
							<input type="submit" value="Update" class="btn btn-primary">
						</fieldset>
						<?= form_close(); ?>
						<!-- Update Japa Entry End -->
						
						<?php else:?>

						<!-- New Japa Entry -->
						<?= form_open('saveJapa');?>
					    <div class="form-group">
					      <label>Number of Japa you have completed today</label>
					      <input type="number" class="form-control" name="japanumber" value="<?= set_value('japanumber')?>" placeholder="Number of Japa">
					      <?= form_error('japanumber')?>
					      <small id="emailHelp" class="form-text text-muted">For <?= date('M,d,Y'); ?></small>
					    </div>
						<fieldset class="form-group">
							<input type="submit" value="Save" class="btn btn-primary">
						</fieldset>
						<?= form_close(); ?>
						<!-- New Japa Entry End -->

						<?php endif;?>

					</div>
					<div class="col-sm-4"></div>
					<div class="col-sm-4"></div>
				</div>
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
	<script>
	AOS.init();
	</script>

</html>
