<?php
	include 'dbconfig.php';

	$username = mysqli_escape_string($conn, $_POST['uname']);
	$password = mysqli_escape_string($conn, $_POST['pass']);

	$sql = "SELECT * FROM user_tbl WHERE username = '$username' AND password = '$password'";
	$res = $conn->query($sql);
	$count = mysqli_num_rows($res);
	if ($count == 0) {
		echo "Sorry you are not a member.";
	}else{
		echo "Login Successfully! :)";
	}
?>