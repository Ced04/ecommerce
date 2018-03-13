<?php
	include 'dbconfig.php';

	$int = "1234567890";
	$code = substr(str_shuffle($int), 0, 8);
	$userid = "U".$code;

	$firstname = mysqli_escape_string($conn, $_POST['checkedfirstname']);
	$midname = mysqli_escape_string($conn, $_POST['checkedmidname']);
	$lastname = mysqli_escape_string($conn, $_POST['checkedlastname']);
	$email = mysqli_escape_string($conn, $_POST['checkedemail']);
	$username = mysqli_escape_string($conn, $_POST['checkedUsername']);
	$password = mysqli_escape_string($conn, $_POST['checkedPassword']);

	//Filter User ID if already registered.
	$sql = "SELECT * FROM user_tbl WHERE user_id = '$userid'";
	$res = $conn->query($sql);
	$count = mysqli_num_rows($res);
	if ($count == 0) {
		//Filter Username if already used.
		$sql = "SELECT * FROM user_tbl WHERE username = '$username'";
		$res = $conn->query($sql);
		$count = mysqli_num_rows($res);
		if ($count == 0) {
			//Filter Email if already used.
			$sql = "SELECT * FROM user_tbl WHERE email = '$email'";
			$res = $conn->query($sql);
			$count = mysqli_num_rows($res);
			if ($count == 0) {
				if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
				    // Return Error - Invalid Email
				    echo "Invalid email.";
				}else{
				    // Return Success - Valid Email
				   	//Filter Password id already used.
					$sql = "SELECT * FROM user_tbl WHERE password = '$password'";
					$res = $conn->query($sql);
					$count = mysqli_num_rows($res);
					if ($count == 0) {
						//Insert Data to database.
						$sql = "INSERT INTO user_tbl VALUES('$userid', '$firstname', '$midname', '$lastname', '$username', '$email', '$password', CURRENT_TIMESTAMP, 0)";
						if ($conn->query($sql)) {
							$hash = md5( rand(0,1000) );
							$qry = "INSERT INTO validation_tbl VALUES(NOT NULL, '$hash', '$userid', CURRENT_TIMESTAMP)";
							if ($conn->query($qry)) {
								$to      = $email; // Send email to our user
								$subject = 'Signup | Verification'; // Give the email a subject 
								$message = '
								 
								Thanks for signing up !/'.$firstname.' '.$midname[0].'. '.$lastname.'
								Your account has been created, you can login with the following credentials after you have activated your account by pressing the url below.
								 
								---------------------------------------------
								Username: '.$userid.'
								Password: '.$password.'
								---------------------------------------------
								 
								Please click this link to activate your account:
								http://localhost/CITry/verification?email='.$email.'&hash='.$hash.'
								 
								'; // Our message above including the link
								                     
								$headers = 'From:noreply@yourwebsite.com' . "\r\n"; // Set from headers
								mail($to, $subject, $message, $headers); // Send our email
								
								echo "success";
							}else{
								mysqli_connect_error();
							}
						}else{
							mysqli_connect_error();
						}
					}else{
						echo "Password already used.";
					}
				}
			}else{
				echo "Email Address already used.";
			}
		}else{
			echo "Username already used.";
		}
	}else{
		echo "User ID already registered.";
	}
?>