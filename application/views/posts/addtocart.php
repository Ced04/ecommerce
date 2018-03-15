<div class="col-md-4">
	<div class="panel panel-black">
		<div class="panel-heading">
			<h3><?= $title ?></h3>	
		</div>
		<div class="panel-body">
			<?php echo form_open('posts/addto/'.$post['id']); ?>
			<?php echo validation_errors(); ?>
				<div class="form-group">
					<label>Product ID</label>
					<input type="text" class="form-control flat-form" name="product_id" placeholder="Product ID" value="<?= $post['product_id'] ?>" readonly>
				</div>
				<div class="form-group">
					<label>Product Name</label>
					<input type="text" class="form-control flat-form" name="product_name" placeholder="Product Name" value="<?= $post['product_name'] ?>" readonly>
				</div>
				<div class="form-group">
					<label>Items</label>
					<input type="number" minlength="1" class="form-control flat-form" name="item" placeholder="Items" required>
					<input type="hidden" class="form-control flat-form" name="items" value="<?= $post['items'] ?>">
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="text" class="form-control flat-form" name="product_price" placeholder="Price" value="<?= $post['price'] ?>" readonly>
				</div>
				<div class="form-group">
					<button class="btn btn-black flat-form btn-block">Add to Cart</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="col-md-8">
	<div class="img-thumbnail">
		<img style="height: 310px;width: 320px" src="<?= base_url(); ?>assets/css/img/1.jpg">
	</div>
</div>