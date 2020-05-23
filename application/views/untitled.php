
	<div class="container-fluid text-center pt-5">
		<div class="continer">
			<h3 class="satisfy-font">Japa Table</h3>
			<div class="row pt-4">
				<div class="col-md-12">
					<table class="table table-hover" data-sorting="true">
					  <thead>
					    <tr class="table-success">
					      <th scope="col">Country</th>
					      <th scope="col">City</th>
					      <th scope="col">Today's Japa</th>
					      <th scope="col">Total Japa</th>
					    </tr>
					  </thead>
					  <tbody>
					  	<?php
					  		$totalJapa = 0;
					  		$totalTodayJapa = 0;
					  		$countCity = 0;
					  		foreach ($japaDataCombined as $key => $value) {
					  		$countCity++;
					  		$totalJapa += $value['japa'];
					  		$totalTodayJapa += $value['todayJapa'];
					  		?>
				  			<tr class="">
						      <th scope="row"><?= $value['country']?></th>
						      <td><?= $value['city']?></td>
						      <td><?= $value['todayJapa']?></td>
						      <td><?= $value['japa']?></td>
						    </tr>
					  		<?php
					  	}?>
					  </tbody>
					  <tfoot>
					  	<tr class="table-primary">
						      <th scope="row">Total:</th>
						      <td><?= $countCity; ?> Cities</td>
						      <td><?= $totalTodayJapa; ?></td>
						      <td><?= $totalJapa; ?></td>
						    </tr>
					  </tfoot>
					</table>
				</div>
				<div class="col-md-6"></div>
			</div>
		</div>
	</div>