<!DOCTYPE html>
<html>
<head>
	<title>Japa Yag | My Japa Statics</title>
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
					$mala_target = 108;
					$succes_color = "";
					$mala_percent_done = 0;
					$star = "No Stars";
					$reward_level = 0;
					if(isset($todayJapa['japa']) >0){
						$mala_percent_done = $todayJapa['japa']*100/$mala_target;
						if($mala_percent_done > 0){
							$succes_color = "#8aca2d";
						}
						
						if($mala_percent_done > 33){
							$reward_level = 1;	
							}
						if($mala_percent_done > 66){
							$reward_level = 2;	
							}
						if($mala_percent_done > 99){
							$reward_level = 3;	
							}
						if($mala_percent_done > 100){
							$mala_percent_done = 100;
						}

						$star = '<span class="reward-star"><i class="fas fa-star"></i><span>';	
					}
				?>
				<div class="row congo-message awesome" id="congoMessage" style="display: none;">
					<h4 class="rainbow"><i class="fas fa-gifts"></i> Congratulations you have Completed a Mala</h4>
				</div>
				<div class="row">
					<div class="col-sm-4 pt-5">
						<div class="japa-counter">
							<h4 class="text-uppercase">Japa Counter</h4>
						<div class="row">
							<div class="col-12"><button class="w-100 btn-primary btn" id="countPlus">Counter +</button></div>
							<div class="col-6"><button class="w-100 btn-info btn" id="countMinus">Counter -</button></div>
							<div class="col-6"><button class="w-100 btn-danger btn" id="countReset">Reset</button></div>
						</div>
						</div>
						<?php if(isset($todayJapa) > 0):?>
						<!-- Update Japa Entry -->
						<?= form_open('updateJapa');?>
					    <div class="form-group">
					      <div class="row">
					      	<div class="col-5 text-center">
					      		<label class="text-uppercase">Japa</label>
					      		<input type="number" id="japa" min="0" class="form-control text-center" name="japanumber" value="<?= $todayJapa['japa'];?>" placeholder="Japa Number"></div>
					      	<div class="col-1">
					      	<label class="">or</label></div>
					      	<div class="col-5 text-center">
					      		<label class="text-uppercase">Mala</label>
					      		<input type="number" id="mala" min="0" class="form-control text-center" name="japamala" value="" placeholder="Mala Number"></div>
					      </div>
					      
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
					      <div class="row">
					      	<div class="col-5 text-center">
					      		<label class="text-uppercase">Japa</label>
					      		<input type="number" id="japa" min="0" value="0" class="form-control text-center" name="japanumber" value="<?= $todayJapa['japa'];?>" placeholder="Japa Number"></div>
					      	<div class="col-1">
					      	<label class="">or</label></div>
					      	<div class="col-5 text-center">
					      		<label class="text-uppercase">Mala</label>
					      		<input type="number" id="mala" min="0" class="form-control text-center" name="japamala" placeholder="Mala Number"></div>
					      </div>
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
					<div class="col-sm-4 pt-5"></div>
					<div class="col-sm-4 pt-5">
						<?= form_open('collectReward')?>
						<h4 class="text-uppercase">Active Challenges</h4>
						<hr>
						<div class="pb-3">
							Total Reward Collected: <?= '<b>'.$totalStars .'</b> <span class="reward-star"><i class="fas fa-star"></i><span>'; ?> 
						</div>
						<div class="display-challenge-block p-3">
							<h5>Daily chalange of <?= $mala_target;?> Japa yag</h5>
							<div class="row pt-2">
							<div class="col-4"><?php if(!$todayJapa['japa']) echo "0"; else echo $todayJapa['japa'];?>/<?=$mala_target
							?></div>
							<div class="col-4"><?= round($mala_percent_done); ?> %</div>
							<div class="col-4">
								<?php
								if($reward_level !=0){
									for($i=1; $i <= $reward_level; $i++){
										echo $star;		
									}
								}
								else echo "<span class='text-muted'>no star</span>";
								 ?>

								</div>
							</div>
							<div class="pt-3">
							<div class="progress">
							  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?= $mala_percent_done; ?>%"></div>
							</div>
							</div>
							<div class="collect-reward-button pt-3">
								<input type="hidden" name="star" value="<?= $reward_level?>">
								<?php if($todayJapa['dailyReward'] !=0){?>
								<span class="btn btn-success btn-sm">Collected <i class="far fa-check-circle"></i></span>
								<?php } else{?>
								<button type="submit" <?php if($reward_level != 3) echo "disabled";?> class="btn btn-primary btn-sm">Collect Reward</button>
								<?php }?>
							</div>
						</div>
						<?= form_close();?>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
					</div>
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
