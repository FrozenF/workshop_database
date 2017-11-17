<?php
	$con = @mysqli_connect("localhost", "root", "", "inventaris");
	if (!$con) {
		echo "Error: " . mysqli_connect_error();
		exit();
	}
?>