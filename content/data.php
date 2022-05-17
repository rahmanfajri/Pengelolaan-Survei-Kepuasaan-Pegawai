<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <title>Admin</title>
        
        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">
        <link href="assets/plugins/bootstrap-sweetalert/sweet-alert.css" rel="stylesheet" type="text/css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
        
    </head>


    <body class="widescreen fixed-left-void">

        <!-- Begin page -->
        <div id="wrapper" class="enlarged forced">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect waves-light">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <?php
				include('menu.php');
			?> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
					<div class="card-box">
						<div class="container">
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
						color: #fff;
						padding: 8px 10px;
						text-decoration: none;
						border-radius: 2px;
					}
					</style>
					<center>
						<h2>Hasil Kuesioner</h2>
						<?php echo "<h2>Satuan Kerja ".$_SESSION['satker'],"</h2>"?>
						<?php
						$satker=$_SESSION['satker'];
						$koneksi = mysqli_connect("localhost","root","","pkl");

						// menampilkan data pegawai
						$data = mysqli_query($koneksi,"select * from tb_history where satker='$satker'");
						$count=count($data);
						$triwulan=date("M");
						while($d = mysqli_fetch_array($data)){
						if($triwulan=="Jan" or $triwulan=="Feb" or $triwulan=="Mar"){
						echo "<h2>Periode Triwulan I Tahun ".$d['tahun']."</h2>";?>
						<?php } else if($triwulan=="Apr" or $triwulan=="Mei" or $triwulan=="Jun"){
						echo "<h2>Periode Triwulan II Tahun ".$d['tahun']."</h2>";?>
						<?php } else if($triwulan=="Jul" or $triwulan=="Aug" or $triwulan=="Sep"){
						echo "<h2>Periode Triwulan III Tahun ".$d['tahun']."</h2>";?>
						<?php } else if($triwulan=="Oct" or $triwulan=="Nov" or $triwulan=="Dec"){
						echo "<h2>Periode Triwulan IV Tahun ".$d['tahun']."</h2>";}?>
						<?php } ?>
					</center>
					<form method="POST" action="export_excel.php">
					<center>
					<div class="fileupload btn btn-purple waves-effect waves-light">
						<span><i class="ion-archive m-r-5"></i><a href="export_excel.php">Download</a></span>
					</div>
					</center>

					<table border="1">
						<tr>
							<td rowspan="2" bgcolor="#7FFFD4">Responden</td>
							<td colspan="5" bgcolor="#7FFFD4">Nilai Kuisioner Layanan</td>
							<td colspan="4" bgcolor="#7FFFD4">Nilai Kuisioner Personil</td>
						</tr>
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
						$count=count($data);
						while($d = mysqli_fetch_array($data)){
						?>
						<tr>
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
						<tr>
							<td bgcolor="#F0E68C">Sub Jumlah Pernyataan</td>
							<td bgcolor="#F0E68C"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select count(*) AS jumlah from jajak where R1>0");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['jumlah']} ";
									$jumlah1 = $result['jumlah'];?>
							</td>
							<td bgcolor="#F0E68C"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select count(*) AS jumlah from jajak where R2>0");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['jumlah']} ";
									$jumlah2 = $result['jumlah'];?></td>
							<td bgcolor="#F0E68C"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select count(*) AS jumlah from jajak where R3>0");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['jumlah']} ";
									$jumlah3 = $result['jumlah'];?></td>
							<td bgcolor="#F0E68C"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select count(*) AS jumlah from jajak where R4>0");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['jumlah']} ";
									$jumlah4 = $result['jumlah'];?></td>
							<td bgcolor="#F0E68C"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select count(*) AS jumlah from jajak where R5>0");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['jumlah']} ";
									$jumlah5 = $result['jumlah'];?></td>
							<td bgcolor="#F0E68C"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select count(*) AS jumlah from jajak where P1>0");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['jumlah']} ";
									$total1 = $result['jumlah'];?></td>
							<td bgcolor="#F0E68C"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select count(*) AS jumlah from jajak where P2>0");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['jumlah']} ";
									$total2 = $result['jumlah'];?></td>
							<td bgcolor="#F0E68C"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select count(*) AS jumlah from jajak where P3>0");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['jumlah']} ";
									$total3 = $result['jumlah'];?></td>
							<td bgcolor="#F0E68C"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select count(*) AS jumlah from jajak where P4>0");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['jumlah']} ";
									$total4 = $result['jumlah'];?></td>
						</tr>
						<tr>
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
						<tr>
							<td>Total Pernyataan</td>
							<td colspan="9"><?php
								echo $jum1+$jum2;
								$to=$jum1+$jum2;
							
							?></td>
							
						</tr>
						<tr>
							<td bgcolor="#A9A9A9">Sub Jumlah Nilai</td>
							<td bgcolor="#A9A9A9"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select SUM(R1) AS total from jajak");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['total']} ";?></td>
							<td bgcolor="#A9A9A9"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select SUM(R2) AS total from jajak");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['total']} ";?></td></td>
							<td bgcolor="#A9A9A9"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select SUM(R3) AS total from jajak");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['total']} ";?></td>
							<td bgcolor="#A9A9A9"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select SUM(R4) AS total from jajak");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['total']} ";?></td>
							<td bgcolor="#A9A9A9"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select SUM(R5) AS total from jajak");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['total']} ";?></td>
							<td bgcolor="#A9A9A9"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select SUM(P1) AS total from jajak");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['total']} ";?></td>
							<td bgcolor="#A9A9A9"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select SUM(P2) AS total from jajak");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['total']} ";?></td>
							<td bgcolor="#A9A9A9"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select SUM(P3) AS total from jajak");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['total']} ";?></td>
							<td bgcolor="#A9A9A9"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select SUM(P4) AS total from jajak");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['total']} ";?></td>
						</tr>
						<tr>
							<td>Jumlah Nilai</td>
							<td colspan="5" bgcolor="#A9A9A9"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select SUM(R1+R2+R3+R4+R5) AS total from jajak");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['total']} ";
									$me1=$result['total'];
									?>
							</td>
							<td colspan="4" bgcolor="#A9A9A9"><?php
									$satker=$_SESSION['satker'];
									$koneksi = mysqli_connect("localhost","root","","$satker");
									$data = mysqli_query($koneksi,"select SUM(P1+P2+P3+P4) AS total from jajak");
									
									$result = mysqli_fetch_array($data);
										echo "{$result['total']} ";
									$me2=$result['total'];
									?>
										
							</td>
							
						</tr>
						<tr>
							<td>Total Nilai</td>
							<td colspan="9"  bgcolor="#A9A9A9"><?php
								echo $me1+$me2;
								$ra=$me1+$me2;
							?>
							</td>
							
						</tr>
						<tr>
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
						<tr>
							<td>Rating Rata-rata</td>
							<td colspan="9" bgcolor="#DA70D6" name='rating'><?php
								$pa=$ra/$to;
								echo ''.round($pa,2);
							?></td>
							
						</tr>
						</table>
                        <!-- Page-Title -->
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <!-- jQuery  -->
        <script src="assets/plugins/moment/moment.js"></script>


        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>

         <script src="assets/plugins/bootstrap-sweetalert/sweet-alert.min.js"></script>

        <!-- Todojs  -->
        <script src="assets/pages/jquery.todo.js"></script>

        <!-- chatjs  -->
        <script src="assets/pages/jquery.chat.js"></script>

        <script src="assets/plugins/peity/jquery.peity.min.js"></script>
		
		<script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

		<script src="assets/pages/jquery.dashboard_2.js"></script>
		
        

    </body>
</html>