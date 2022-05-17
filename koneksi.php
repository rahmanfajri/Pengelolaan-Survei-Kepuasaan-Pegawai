<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "pkl";
	
	$conn=mysql_connect($server, $username, $password);
	if($conn){
		//echo "<meta http-equiv='refresh' content='0; url=content/home.php'>";
		$pilih = mysql_select_db($database);
?>
<?php
	} else {
		echo mysql_error();
		//echo "<br><a href=login.php>Kembali</a>";
	}
?>

