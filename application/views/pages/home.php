<h2><?= $title ?></h2>

<?php foreach ($posts as $post) : ?>
	<div class="col-md-3">
		<div class="panel panel-black">
			<div class="panel-heading">
				<h4><?php echo $post['product_name']; ?></h4>
			</div>
			<div class="panel-body">
				
			</div>
		</div>
	</div>
<?php endforeach; ?>