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
					<?php $total_amount = 0; ?>
					<?php foreach ($posts as $post) : ?>
						<tr>
							<td style="text-align: center;font-size: 12px"><?= $post['product_name'].' (*'.$post['items'].')' ?></td>
							<td style="text-align: center;font-size: 12px"><?= 'Php '.$post['price']; ?></td>
						</tr>

						<?php
							setlocale(LC_MONETARY,"en_US");
							$total_amount = $total_amount + $post['total_amount'];
						?>
					<?php endforeach; ?>
					

				</tbody>
			</table>
			<small>TOTAL AMOUNT : <b style="color: green"><?= 'Php '.sprintf('%0.2f', $total_amount) ?></b></small>
		</div>
	</div>

	<div class="panel panel-black">
		<div class="panel-body">
			<div class="form-group">
				<label>Amount Tendered</label>
				<small><?php echo validation_errors(); ?></small>
				<input type="number" class="form-control flat-form input-sm" id="tendered" placeholder="Amount Tendered" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Change</label>
				<input type="number" class="form-control flat-form input-sm" id="change" placeholder="0.00" readonly>
			</div>
		</div>
		<div class="panel-footer">
			<?= form_open('posts/pay/'.$post['id'])?><button class="btn btn-default flat-form btn-sm">Proceed</button></form>
		</div>
	</div>
</div>
<div class="col-md-7">
	<div class="panel panel-black">
		<div class="panel-heading">
			<h4 class="text-center">MY CART</h4>
		</div>
		<div class="panel-body">
			<?php foreach ($posts as $post) : ?>
				<div class="col-sm-3 img-thumbnail">
					<img style="height: 110px;width: 120px" src="<?= base_url(); ?>assets/css/img/1.jpg" />
					<p><?php echo ucwords($post['product_name']); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
