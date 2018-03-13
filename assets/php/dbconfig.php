<?php
	$conn = mysqli_connect("localhost", "root", "", "citry");

	if (!$conn) {
		die("Connection Failed:" .mysqli_connect_error());
	}
?>