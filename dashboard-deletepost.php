<?php
include 'database.php';

	$id_tr = $_GET['judul'];
	
	$query = "DELETE FROM tbl_post WHERE judul_post='$id_tr' ";

	//eksekusi
	$delete = mysqli_query($dbcon, $query);

	if(!$delete) {
		die(mysqli_error($dbcon));
	}

	//setelah berhasil delete redirect ke halaman index
	header('Location: dashboard-index.php');

?>