<?php
		include '../koneksi.php';
		
		if (isset($_POST['tambah'])) {
		$pegawai = $_POST['pegawai'];
		$akses	= $_POST['Akses'];
		//echo "<h4>$pegawai</h4>";
		//echo $_POST['Akses'];
		mysql_query("UPDATE tb_hakakses SET Akses='$akses' where id='$pegawai'");
		header('Location:akses_berhasil.php');
}
?>