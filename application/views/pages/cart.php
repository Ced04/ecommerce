<div class="col-md-5">
	<div class="panel panel-black">
		<div class="panel-heading">
			<h4>OFFICIAL RECEIPT</h4>
		</div>
		<div class="panel-body">
			<table class="table table-bordered">
				<thead>
					<?php
						$gen = "0123456789";
						$or = substr(str_shuffle($gen), 0, 10);

						date_default_timezone_set('Asia/Manila');
						$date = date('M d, Y h:i:s A', time());
					?>
					<tr>
						<th><small>OR # : <?= $or ?></small></th>
						<th><small id="time"><?= $date ?></small></th>
					</tr>
				</thead>
			</table>
			<table class="table table-hover">
				<thead>
					<tr>
						<th style="text-align: center;font-size: 12px">PRODUCT NAME</th>
						<th style="text-align: center;font-size: 12px">PRICE</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td style="text-align: center;font-size: 12px">iPhone 5s (1)</td>
						<td style="text-align: center;font-size: 12px">Php 6000.00</td>
					</tr>
					<tr>
						<td style="text-align: center;font-size: 12px">iPhone 5s (1)</td>
						<td style="text-align: center;font-size: 12px">Php 6000.00</td>
					</tr>
					<tr>
						<td style="text-align: center;font-size: 12px">iPhone 5s (1)</td>
						<td style="text-align: center;font-size: 12px">Php 6000.00</td>
					</tr>
				</tbody>
			</table>
			<small>TOTAL AMOUNT : <b style="color: green">Php 6000.00</b></small>
		</div>
	</div>
</div>
<div class="col-md-7">
	<div class="panel panel-black">
		<div class="panel-heading">
			<h4>MY CART</h4>
		</div>
		<div class="panel-body">
			
		</div>
	</div>
</div>