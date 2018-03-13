<div class="col-md-4">
	<div class="panel panel-black">
		<div class="panel-heading">
			<h4 class="text-center">Registration</h4>
		</div>
		<div class="panel-body">
			<form id="registerForm">
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" class="form-control flat-form input-sm" id="fname" placeholder="Firstname" autocomplete="off">
					<small id="fname-alert"></small>
				</div>
				<div class="form-group">
					<label>Middle Name</label>
					<input type="text" class="form-control flat-form input-sm" id="mname" placeholder="Middle Name" autocomplete="off">
				</div>
				<div class="form-group">
					<label>Lastname</label>
					<input type="text" class="form-control flat-form input-sm" id="lname" placeholder="Lastname" autocomplete="off">
					<small id="lname-alert"></small>
				</div>
				<div class="form-group">
					<label>Email Address</label>
					<input type="email" class="form-control flat-form input-sm" id="email" placeholder="Email Address" autocomplete="off">
					<small id="email-alert"></small>
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control flat-form input-sm" id="runame" placeholder="Username (e.g. '@username')" autocomplete="off" data-toggle="tooltip" title="Username must starts with '@'">
					<small id="username-alert"></small>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control flat-form input-sm" id="rpword" placeholder="Password" autocomplete="off" disabled>
					<meter max="4" id="password-strength-meter" hidden></meter>
					<small id="password-strength-text"></small>
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="password" class="form-control flat-form input-sm" id="conpword" placeholder="Confirm Password" autocomplete="off" disabled>
					<small id="password-confirm-alert"></small>
				</div>
				<div class="form-group text-center">
					<button class="btn btn-black btn-sm btn-block" id="registerBtn">Register Account <img src="assests\css\img\loading.gif" id="img"/ ></button>

				</div>
			</form>
		</div>
	</div>
</div>
