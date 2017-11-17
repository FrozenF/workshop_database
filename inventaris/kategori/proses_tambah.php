<?php
//including the database connection file
include_once("../database/koneksi.php");
$nama_kategori = mysqli_real_escape_string($con, $_POST['nama_kategori']);
	// checking empty fields
if(empty($nama_kategori)) {	
	if(empty($nama_kategori)) {
		echo "<font color='red'>Nama Kategori Kosong.</font><br/>";
	}
		//link to the previous page
	echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
} else { 
		// if all the fields are filled (not empty) 

		//insert data to database	
	$result = mysqli_query($con, "INSERT INTO kategori(nama_kategori) VALUES('$nama_kategori')");

		//display success message
	echo "<font color='green'>Data added successfully.";
	echo "<br/><a href='index.php'>View Result</a>";
}
?>