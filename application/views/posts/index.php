<?php foreach ($posts as $post) : ?>
	<div class="col-md-3">
		<div class="panel panel-black">
			<div class="panel-heading">
				<h4 class="text-center"><?php echo ucwords($post['product_id']); ?></h4>
			</div>
			<div class="panel-body">
				<img style="height: 210px;width: 220px" src="<?= base_url(); ?>assets/css/img/1.jpg">
				<p><?php echo ucwords($post['product_name']); ?></p>
				<!-- Showing if the items are available or out of stock -->
				<?php
					if ($post['items'] == 0) {
						$output = 'Out of stock.';
					}else{
						$output = 'Available : '.$post['items'];
					}
				?>
				<small class="pull-left"><?= $output; ?></small><small class="pull-right"><?php echo "Php ".$post['price'].".00"; ?></small>
			</div>
			<div class="panel-footer">
				<div class="form-group">
					<?php echo form_open('posts/addtocart/'.$post['id']); ?><button class="btn btn-default btn-sm flat-form">Add to cart</button></form>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>
