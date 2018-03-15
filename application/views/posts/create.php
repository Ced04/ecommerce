
<div class="col-md-4">
	<div class="panel panel-black">
		<div class="panel-heading">
			<h3><?= $title ?></h3>	
		</div>
		<div class="panel-body">
			<?php echo form_open('posts/create'); ?>
			<?php echo validation_errors(); 
				$gen = '1234567890';
				$product_id = substr(str_shuffle($gen), 0, 10)
			?>
				<div class="form-group">
					<label>Product ID</label>
					<input type="text" class="form-control flat-form" name="product_id" value="<?= $product_id ?>" readonly>
				</div>
				<div class="form-group">
					<label>Product Name</label>
					<input type="text" class="form-control flat-form" name="product_name" placeholder="Product Name">
				</div>
				<div class="form-group">
					<label>Items</label>
					<input type="text" class="form-control flat-form" name="item" placeholder="Items">
				</div>
				<div class="form-group">
					<label>Price</label>
					<input type="text" class="form-control flat-form" name="product_price" placeholder="Price">
				</div>
				<div class="form-group">
					<button class="btn btn-black flat-form btn-block">Add Product</button>
				</div>
			</form>
		</div>
	</div>
</div>
<div class="col-md-8">
	<div class="panel panel-black">
		<div class="panel-heading">
			<h3>Product List</h3>	
		</div>
		<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th style="width: 10%">No.</th>
								<th style="width: 15%">Product Code</th>
								<th style="width: 30%">Product Name</th>
								<th style="width: 15%">Product Image</th>
								<th style="width: 10%">Price</th>
								<th style="width: 10%">Items</th>
								<th style="width: 10%">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i=1; ?>
							<?php foreach ($posts as $post) : ?>
								<tr>
									<td><?php echo $i++; ?></td>
									<td><?php echo $post['product_id']; ?></td>
									<td><?php echo $post['product_name']; ?></td>
									<td><a href="#">Upload Image</a></td>
									<td><?php echo $post['price']; ?></td>
									<td><?php echo $post['items']; ?></td>
									<td><a href="edit/<?php echo $post['id']; ?>">Edit</a> | <a href="delete/<?php echo $post['id']; ?>">Delete</a></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			
		</div>
	</div>
</div>