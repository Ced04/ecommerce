<?php foreach ($posts as $post) : ?>
	<div class="col-md-3">
		<div class="panel panel-black">
			<div class="panel-heading">
				<h4 class="text-center"><?php echo ucwords($post['product_id']); ?></h4>
			</div>
			<div class="panel-body">
				<img style="height: 210px;width: 220px" src="<?= base_url(); ?>assets/css/img/1.jpg">
				<p><?php echo ucwords($post['product_name']); ?></p>
			</div>
			<div class="panel-footer">
				<div class="form-group">
					<button class="btn btn-default btn-sm flat-form">Add to cart</button>
				</div>
			</div>
		</div>
	</div>
<?php endforeach; ?>