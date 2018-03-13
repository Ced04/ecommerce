<div class="col-md-4 col-md-offset-4">
	<div class="panel panel-black">
		<div class="panel-heading">
			<h4 class="text-center">Login</h4>
		</div>
		<div class="panel-body">
			<form id="loginForm">
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control flat-form input-sm" id="uname" placeholder="Username" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control flat-form input-sm" id="pword" placeholder="Password" autocomplete="off">
				</div>
				<div class="form-group text-center">
					<button class="btn btn-black btn-sm btn-block" id="loginBtn">Login<span></span><span></span></button>
				</div>
			</form>
			<div class="form-group text-center">
				<a href="<?php echo base_url(); ?>register" class="link">Register Account</a>
			</div>
		</div>
	</div>
</div>
