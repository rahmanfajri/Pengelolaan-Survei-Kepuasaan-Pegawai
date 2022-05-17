<?php
	$conn= new mysqli("localhost","root","","pkl");
	$sql=mysqli_query($conn,"SELECT * FROM tb_tanggal");
	$hasil = mysqli_num_rows($sql);
	$data = mysqli_fetch_array($sql);
	$sekarang = date('Y-m-d');
	$satker= $data['satker'];
	$ttutup=date_create('2019-01-08');
	$ftutup=date_format($ttutup, 'Y-m-d');
	$id = $_GET['id'];
	if(isset($_GET['buka'])){
		$query="UPDATE tb_tanggal SET status='buka' WHERE id='$id'";
		$que="UPDATE tb_tanggal SET tutup='$sekarang' WHERE id='$id'";
		$conn->query($query);
		$conn->query($que);
		header('Location:dataadm.php');
?>
<?php
	} else if(isset($_GET['tutup'])){
		$query="UPDATE tb_tanggal SET status='tutup' WHERE id='$id'";
		$que="UPDATE tb_tanggal SET tutup='$ftutup' WHERE id='$id'";
		$conn->query($query);
		$conn->query($que);
		header('Location:dataadm.php');
	}else {
		echo mysql_error();
		echo "error";
		//echo "<br><a href=login.php>Kembali</a>";
	}
?>
