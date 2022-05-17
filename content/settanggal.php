<?php
	include 'koneksitgl.php';
	if (isset($_POST['set'])) {
	$mulai = $_POST['mulai'];
	$selesai = $_POST['selesai'];
	$sekarang = date("Y-m-d");//tanggal sekarang
	mysql_query("INSERT INTO set (mulai,selesai,sekarang) values ('$mulai','$selesai','$sekarang')");
	header('Location:edit.php');
}
?>