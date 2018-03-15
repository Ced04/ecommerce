<?php foreach ($posts as $post) : ?>
	<!-- Showing if the items are available or out of stock -->
	<?php
		if ($post['items'] == 0) {

		}else{
			$output = 'Available : '.$post['items'];
				echo '<div class="col-md-3">';
				echo '<div class="panel panel-black">';
					echo '<div class="panel-heading">';
						echo '<h4 class="text-center">'.ucwords($post['product_id']).'</h4>';
					echo '</div>';
					echo '<div class="panel-body">';
						echo '<img style="height: 210px;width: 220px" src="'.base_url().'assets/css/img/1.jpg">';
						echo '<p>'.ucwords($post['product_name']).'</p>';
						echo '<small class="pull-left"> Available : '.$post['items'].'</small><small class="pull-right">Php '.$post['price'].'</small>';
					echo '</div>';
					echo '<div class="panel-footer">';
						echo '<div class="form-group">';
							echo form_open('posts/addtocart/'.$post['id']).'<button class="btn btn-default btn-sm flat-form">Add to cart</button></form>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		}
	?>
	
<?php endforeach; ?>
