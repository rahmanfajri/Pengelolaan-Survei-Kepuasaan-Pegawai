<?php
	$conn= new mysqli("localhost","root","","pkl");
	$mulai = $_POST['mulai'];
	$selesai = $_POST['selesai'];
	$satker = $_POST['satker'];
	if(isset($_POST['set'])){
		//echo "<meta http-equiv='refresh' content='0; url=content/home.php'>";
		//echo "$mulai";
		$query= 'insert into tb_tanggal (satker,buka,tutup ) values("'.$satker.'","'.$mulai.'","'.$selesai.'")';
		//mysql_query($query);
		
		$conn->query($query);
		header('Location:add_berhasil.php');
?>
<?php
	} else {
		echo mysql_error();
		//echo "<br><a href=login.php>Kembali</a>";
	}
?>