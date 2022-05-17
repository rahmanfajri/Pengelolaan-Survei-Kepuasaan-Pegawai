<?php
	$conn= new mysqli("localhost","root","","pkl");
	$mulai = $_POST['mulai'];
	$selesai = $_POST['selesai'];
	$satker = $_POST['satker'];
	$fmulai = date('Y-m-d',strtotime($mulai));
	$fselesai = date('Y-m-d',strtotime($selesai));
	if(isset($_POST['set'])){
		//echo "<meta http-equiv='refresh' content='0; url=content/home.php'>";
		//echo "$mulai";
		$query="UPDATE tb_tanggal SET buka='$fmulai' ,tutup='$fselesai' where satker='$satker'";
		//mysql_query($query);
		
		$conn->query($query);
		header('Location:edit_berhasil.php');
?>
<?php
	} else {
		echo mysql_error();
		//echo "<br><a href=login.php>Kembali</a>";
	}
?>

