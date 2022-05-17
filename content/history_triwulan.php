<?php session_start();?>
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

                <!-- LOGO -->

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
			<h4 class="m-t-0 m-b-30 header-title"><b>History</b></h4>
						<div class="col-md-6">
							<?php 
							$koneksi = mysql_connect("localhost","root","") or die (mysql_error());
							mysql_select_db("pkl", $koneksi) or die(mysql_error);
							$sql = mysql_query('SELECT * FROM tb_history ORDER BY triwulan ASC;');
							?>
							<h4 class="m-t-0 m-b-30 header-title"><b>History Triwulan</b></h4>						
							<?php
							if (isset($_POST['history'])) {
								$triwulan = $_POST['triwulan'];
								$tahun = $_POST['tahun'];
								mysql_query("SELECT * FROM tb_history WHERE triwulan='$triwulan'");
							?>
						<br>
						<table class="table table-bordered m-0" align="center">
							<thead>
							<tr>
								<th>No</th>
								<th>Rating</th>
								<th>Satker</th>
								<th>Tahun</th>
								<th>Triwulan</th>
								<th>Action</th>
							</tr>
									<?php 
									// koneksi database
									$koneksi = mysqli_connect("localhost","root","","pkl");
									// menampilkan data pegawai
									$que = mysqli_query($koneksi,"SELECT * FROM tb_history WHERE triwulan='$triwulan' and tahun='$tahun'");
									$no = 1;
									$count=count($que);
									while($d = mysqli_fetch_array($que)){
									?>
									<tbody>
									<tr>
									<th scope="row" width="5%"><?php echo $no++;?></th>
									<td><?php echo $d['rating'];?></td>
									<td><?php echo $d['satker'];?></td>
									<td><?php echo $d['tahun'];?></td>
									<td><?php echo $d['triwulan'];?></td>
									<td><button type="submit" class="btn btn-success waves-effect waves-light" name="detail"><a href="datacek.php?satker=<?php echo $d['satker'];?>">Detail</button></td>
									</tr>
									<?php } ?>
									<?php } ?>
									</tbody>
						</table>
							<br>
							<button type="submit" class="btn btn-success waves-effect waves-light"><a href="history.php">Kembali</a></button>
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