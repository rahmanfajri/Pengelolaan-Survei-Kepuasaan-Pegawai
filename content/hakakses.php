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
							<div class="col-md-6">
								<?php 
								$koneksi = mysql_connect("localhost","root","") or die (mysql_error());
								mysql_select_db("pkl", $koneksi) or die(mysql_error);
								$sql = mysql_query('SELECT * FROM tb_hakakses ORDER BY Fullname ASC;');
								?>
											<h4 class="m-t-0 m-b-30 header-title"><b>Pengaturan Hak Akses</b></h4>
											
											<h5><b>Pilih Pegawai</b></h5>

											<form method="post" action="akses.php">
											<select class="form-control" name="pegawai">
		                                        <option>---</option>
		                                        <?php if (mysql_num_rows($sql) > 0) {?>
												<?php while ($row = mysql_fetch_array($sql)) {?>
													<option value="<?php echo $row['id'];?>"><?php echo $row['Fullname']; ?></option>
												<?php }?>
												<?php }?>
		                                    </select>
											<div class="form-group">
													<label class="col-sm-4 control-label">Pilih Hak Akses</label>
													<div class="col-sm-4">
														<!--<div class="checkbox checkbox-pink">
															<input value="Admin" name="Akses[]" id="checkbox4" type="checkbox" data-parsley-multiple="group1">
															<label for="checkbox4"> Admin </label></input>
														</div>
														<div class="checkbox checkbox-pink">
															<input value="PIC" name="Akses[]" id="checkbox5" type="checkbox" data-parsley-multiple="group1">
															<label for="checkbox5"> PIC Satker </label></input>
														</div>-->
														<div class="radio radio-success">
															<input type="radio" name="Akses" id="radio4" value="Admin">
															<label for="radio4">Admin</label>
														</div>
														<div class="radio radio-success">
															<input type="radio" name="Akses" id="radio5" value="PIC">
															<label for="radio5">PIC Satker</label>
														</div>
														<div align="center">
													<button type="submit" class="btn btn-success waves-effect waves-light" name="tambah">Success</button>
													</div>
													</div>
												</div>
											</form>
										</div>
					
										
                        <!-- Page-Title -->
						</div>
						<br>
						<table class="table table-bordered m-0">
							<thead>
							<tr>
								<th>No</th>
								<th>Nama</th>
								<th>Satker</th>
								<th>Hak Akses</th>
							</tr>
									<?php 
									// koneksi database
									$koneksi = mysqli_connect("localhost","root","","pkl");
									// menampilkan data pegawai
									$que = mysqli_query($koneksi,"SELECT * FROM tb_hakakses ORDER BY Fullname ASC;");
									$no = 1;
									$count=count($que);
									while($d = mysqli_fetch_array($que)){
									?>
									<tbody>
									<tr>
									<th scope="row" width="5%"><?php echo $no++;?></th>
									<td><?php echo $d['Fullname'];?></td>
									<td><?php echo $d['Satker'];?></td>
									<td><?php echo $d['Akses'];?></td>
									</tr>
									<?php 
									}
									?>
									</tbody>
						</table>

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