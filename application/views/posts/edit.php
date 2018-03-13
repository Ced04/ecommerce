<?php echo validation_errors(); ?>
<div class="panel panel-black">
	<div class="panel-heading">
		<h3><?= $title; ?></h3>	
	</div>
	<div class="panel-body">
		<?php echo form_open('posts/update/')?>
			<div class="form-group">
					<label>Product ID</label>
					<input type="text" class="form-control flat-form" name="product_id" placeholder="Product ID" value="<?= $post['product_id'] ?>">
				</div>
				<div class="form-group">
					<label>Product Name</label>
					<input type="text" class="form-control flat-form" name="product_name" placeholder="Product Name" value="<?= $post['product_name'] ?>">
				</div>
				<div class="form-group">
					<label>Items</label>
					<input type="text" class="form-control flat-form" name="item" placeholder="Items" value="<?= $post['items'] ?>">
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="text" class="form-control flat-form" name="product_price" placeholder="Price" value="<?= $post['price'] ?>">
				</div>
				<div class="form-group">
					<button class="btn btn-black flat-form btn-block">Save Changes</button>
				</div>
			</div>
		</form>
	</div>
</div>
