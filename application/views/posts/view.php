<?php
	$date = strtotime($post['created_at']);
	$ndate = date("M d, Y g:i A", $date);
?>
	<p><a class="btn btn-default btn-sm flat-form" href="<?php echo base_url(); ?>posts">Back</a></p>
	<div class="panel panel-success">
		<div class="panel-heading">
			<h3><?php echo $post['title']; ?></h3>
		</div>
		<div class="panel-body">
			<p><?php echo $post['body']; ?> <br><small><a href="edit/<?php echo $post['id']; ?>">Edit</a></small>	</p>
			<small class="pull-right"><?php echo $ndate; ?><br></small>
		</div>
		<div class="panel-footer">
			<?php echo form_open('/posts/delete/'.$post['id']); ?>
				<button class="btn btn-danger btn-sm flat-form" id="delete">Delete</button>
			</form>
			</p>
		</div>
	</div>