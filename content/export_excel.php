<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel Dengan PHP - www.malasngoding.com</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table td{
		text-align: center;
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

	<?php
	session_start();
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Kuesioner.xls");
	?>

	<center>
		<h2>Hasil Survey Kepuasan Tamu Menginap</h2>
		<h2>Griya Puncak Sekuning</h2>
		<h2>Periode Triwulan IV Tahun 2018</h2>
	</center>
	
	<table border="1" align="center">
		<tr align="center">
			<td rowspan="2" bgcolor="#7FFFD4">Responden</td>
			<td colspan="5" bgcolor="#7FFFD4">Nilai Kuisioner Layanan</td>
			<td colspan="4" bgcolor="#7FFFD4">Nilai Kuisioner Personil</td>
		</tr align="center">
		<tr>
			<td bgcolor="#7FFFD4">1</td>
			<td bgcolor="#7FFFD4">2</td>
			<td bgcolor="#7FFFD4">3</td>
			<td bgcolor="#7FFFD4">4</td>
			<td bgcolor="#7FFFD4">5</td>
			<td bgcolor="#7FFFD4">1</td>
			<td bgcolor="#7FFFD4">2</td>
			<td bgcolor="#7FFFD4">3</td>
			<td bgcolor="#7FFFD4">4</td>
		</tr>
		<?php 
		// koneksi database
		$satker=$_SESSION['satker'];
		$koneksi = mysqli_connect("localhost","root","","$satker");

		// menampilkan data pegawai
		$data = mysqli_query($koneksi,"select * from jajak");
		$no = 1;
		while($d = mysqli_fetch_array($data)){
		?>
		<tr align="center">
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['R1']; ?></td>
			<td><?php echo $d['R2']; ?></td>
			<td><?php echo $d['R3']; ?></td>
			<td><?php echo $d['R4']; ?></td>
			<td><?php echo $d['R5']; ?></td>
			<td><?php echo $d['P1']; ?></td>
			<td><?php echo $d['P2']; ?></td>
			<td><?php echo $d['P3']; ?></td>
			<td><?php echo $d['P4']; ?></td>
		</tr>
		<?php 
		}
		?>
		<tr align="center">
			<td bgcolor="#F0E68C">Sub Jumlah Pernyataan</td>
			<td bgcolor="#F0E68C"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$table = "jajak";
				$query = mysqli_query($koneksi,"SELECT count(*) AS jumlah FROM $table where R1>0");
				$result = mysqli_fetch_array($query);
				echo "{$result['jumlah']} ";
				$jumlah1 = $result['jumlah'];?>
			</td>
			<td bgcolor="#F0E68C"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$table = "jajak";
				$query = mysqli_query($koneksi,"SELECT count(*) AS jumlah FROM $table where R2>0");
				$result = mysqli_fetch_array($query);
				echo "{$result['jumlah']} ";
				$jumlah2 = $result['jumlah'];?>
			</td>
			<td bgcolor="#F0E68C"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$table = "jajak";
				$query = mysqli_query($koneksi,"SELECT count(*) AS jumlah FROM $table where R3>0");
				$result = mysqli_fetch_array($query);
				echo "{$result['jumlah']} ";
				$jumlah3 = $result['jumlah'];?>
			</td>
			<td bgcolor="#F0E68C"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$table = "jajak";
				$query = mysqli_query($koneksi,"SELECT count(*) AS jumlah FROM $table where R4>0");
				$result = mysqli_fetch_array($query);
				echo "{$result['jumlah']} ";
				$jumlah4 = $result['jumlah'];?>
			</td>
			<td bgcolor="#F0E68C"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$table = "jajak";
				$query = mysqli_query($koneksi,"SELECT count(*) AS jumlah FROM $table where R5>0");
				$result = mysqli_fetch_array($query);
				echo "{$result['jumlah']} ";
				$jumlah5 = $result['jumlah'];?>
			</td>
			<td bgcolor="#F0E68C"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$table = "jajak";
				$query = mysqli_query($koneksi,"SELECT count(*) AS jumlah FROM $table where P1>0");
				$result = mysqli_fetch_array($query);
				echo "{$result['jumlah']} ";
				$total1 = $result['jumlah'];?>
				</td>
			<td bgcolor="#F0E68C"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$table = "jajak";
				$query = mysqli_query($koneksi,"SELECT count(*) AS jumlah FROM $table where P2>0");
				$result = mysqli_fetch_array($query);
				echo "{$result['jumlah']} ";
				$total2 = $result['jumlah'];?>
				</td>
			<td bgcolor="#F0E68C"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$table = "jajak";
				$query = mysqli_query($koneksi,"SELECT count(*) AS jumlah FROM $table where P3>0");
				$result = mysqli_fetch_array($query);
				echo "{$result['jumlah']} ";
				$total3 = $result['jumlah'];?>
				</td>
			<td bgcolor="#F0E68C"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$table = "jajak";
				$query = mysqli_query($koneksi,"SELECT count(*) AS jumlah FROM $table where P4>0");
				$result = mysqli_fetch_array($query);
				echo "{$result['jumlah']} ";
				$total4 = $result['jumlah'];?>
				</td>
		</tr>
		<tr align="center">
			<td>Jumlah Pernyataan</td>
			<td colspan="5"><?php 
				echo $jumlah1+$jumlah2+$jumlah3+$jumlah4+$jumlah5; 
				$jum1 = $jumlah1+$jumlah2+$jumlah3+$jumlah4+$jumlah5;
				?></td>
			<td colspan="4"><?php
			echo $total1+$total2+$total3+$total4;
			$jum2=$total1+$total2+$total3+$total4;
			?></td>
		</tr>
		<tr align="center">
			<td>Total Pernyataan</td>
			<td colspan="9"><?php
				echo $jum1+$jum2;
				$to=$jum1+$jum2;
			
			?></td>
			
		</tr>
		<tr align="center">
			<td bgcolor="#A9A9A9">Sub Jumlah Nilai</td>
			<td bgcolor="#A9A9A9"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$query = mysqli_query($koneksi,"SELECT SUM(R1) AS total FROM jajak");
				$result = mysqli_fetch_array($query);
				echo "{$result['total']} ";?>
			</td>
			<td bgcolor="#A9A9A9"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$query = mysqli_query($koneksi,"SELECT SUM(R2) AS total FROM jajak");
				$result = mysqli_fetch_array($query);
				echo "{$result['total']} ";?>
			</td>
			<td bgcolor="#A9A9A9"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$query = mysqli_query($koneksi,"SELECT SUM(R3) AS total FROM jajak");
				$result = mysqli_fetch_array($query);
				echo "{$result['total']} ";?>
			</td>
			<td bgcolor="#A9A9A9"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$query = mysqli_query($koneksi,"SELECT SUM(R4) AS total FROM jajak");
				$result = mysqli_fetch_array($query);
				echo "{$result['total']} ";?>
			</td>
			<td bgcolor="#A9A9A9"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$query = mysqli_query($koneksi,"SELECT SUM(R5) AS total FROM jajak");
				$result = mysqli_fetch_array($query);
				echo "{$result['total']} ";?>
			</td>
			<td bgcolor="#A9A9A9"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$query = mysqli_query($koneksi,"SELECT SUM(P1) AS total FROM jajak");
				$result = mysqli_fetch_array($query);
				echo "{$result['total']} ";?>
			</td>
			<td bgcolor="#A9A9A9"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$query = mysqli_query($koneksi,"SELECT SUM(P2) AS total FROM jajak");
				$result = mysqli_fetch_array($query);
				echo "{$result['total']} ";?>
			</td>
			<td bgcolor="#A9A9A9"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$query = mysqli_query($koneksi,"SELECT SUM(P3) AS total FROM jajak");
				$result = mysqli_fetch_array($query);
				echo "{$result['total']} ";?>
			</td>
			<td bgcolor="#A9A9A9"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$query = mysqli_query($koneksi,"SELECT SUM(P4) AS total FROM jajak");
				$result = mysqli_fetch_array($query);
				echo "{$result['total']} ";?>
			</td>
		</tr>
		<tr align="center">
			<td>Jumlah Nilai</td>
			<td colspan="5" bgcolor="#A9A9A9"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$query = mysqli_query($koneksi,"SELECT SUM(R1+R2+R3+R4+R5) AS total FROM jajak");
				$result = mysqli_fetch_array($query);
				echo "{$result['total']} ";
				$me1=$result['total'];?>
			</td>
			<td colspan="4" bgcolor="#A9A9A9"><?php
				$satker=$_SESSION['satker'];
				$koneksi = mysqli_connect("localhost","root","","$satker");
				$query = mysqli_query($koneksi,"SELECT SUM(P1+P2+P3+P4) AS total FROM jajak");
				$result = mysqli_fetch_array($query);
				echo "{$result['total']} ";
				$me2=$result['total'];?>
			</td>
		</tr>
		<tr align="center">
			<td>Total Nilai</td>
			<td colspan="9"  bgcolor="#A9A9A9"><?php
				echo $me1+$me2;
				$ra=$me1+$me2;
			?>
			</td>
			
		</tr>
		<tr align="center">
			<td>Rating</td>
			<td colspan="5"><?php
				$rating1= $me1/$jum1;
				$totrating1 = number_format($rating1,2);
				echo $totrating1;
			?></td>
			<td colspan="4"><?php
				$rating2= $me2/$jum2;
				$totrating2 = number_format($rating2,2);
				echo $totrating2;
			?></td>
			
		</tr>
		<tr align="center">
			<td>Rating Rata-rata</td>
			<td colspan="9" bgcolor="#DA70D6"><?php
				$pa=$ra/$to;
				echo ''.round($pa,2);
				$satker=$_SESSION['satker'];
				$conn = mysqli_connect("localhost","root","","pkl");
				$query="UPDATE tb_history SET rating='$pa' WHERE satker='$satker'";
				$conn->query($query);
			?></td>
			
		</tr>
	</table>
</body>
</html>