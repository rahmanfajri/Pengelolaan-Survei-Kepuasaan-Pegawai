	<?php
	$conn= new mysqli("localhost","root","","pkl");
	$satker = $_POST['satker'];
	if(isset($_POST['set'])){
		//echo "<meta http-equiv='refresh' content='0; url=content/home.php'>";
		//echo "$mulai";
		$query="DELETE FROM tb_tanggal where satker='$satker'";
		//mysql_query($query);
		
		$conn->query($query);
		header('Location:delete_berhasil.php');
?>
<?php
	} else {
		echo mysql_error();
		//echo "<br><a href=login.php>Kembali</a>";
	}
?>