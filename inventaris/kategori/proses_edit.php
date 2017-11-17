<?php
// including the database connection file
include_once("../database/koneksi.php");
$id = mysqli_real_escape_string($con, $_POST['id_kategori']);
$nama_kategori = mysqli_real_escape_string($con, $_POST['nama_kategori']);

	// checking empty fields
if(empty($nama_kategori)) {		
	if(empty($nama_kategori)) {
		echo "<font color='red'>Name field is empty.</font><br/>";
	}	
} else {	
		//updating the table
	$result = mysqli_query($con, "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori=$id");

		//redirectig to the display page. In our case, it is index.php
	header("Location: index.php");
}

?>