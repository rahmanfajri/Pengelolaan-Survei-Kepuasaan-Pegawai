<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

		<link rel="icon" type="image/png" href="FW.jpg">
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
			<?php include 'menu.php'; ?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
		<div class="panel">
					<div class="panel-body">
						<div class="row">
							<div class="col-sm-12">
								
									<div class="row">
										<center>
											<h3>Pengaturan Tanggal Buka dan Tutup Kuesioner</h3>
											<h3>Satuan Kerja PT. Bukit Asam Tanjung Enim</h3>
										</center>
										<div class="m-b-30">
                                            <button  type="submit" class="btn btn-default waves-effect waves-light"><a href="addtgl.php"><i class="fa fa-plus"> Add </i></a></button>
                                            <button  type="submit" class="btn btn-default waves-effect waves-light"><a href="updatetgl.php"><i class="fa fa-pencil"> Update </i></a></button>
                                            <button  type="submit" class="btn btn-default waves-effect waves-light"><a href="deletetgl.php"><i class="fa fa-trash"> Delete </i></a></button>
                                        </div>
										<div>
											
											<div class="p-20">
												<center>
												<table class="table table-bordered m-0">
													<thead>
														<tr>
															<th>No</th>
															<th>Satker</th>
															<th>Tanggal Buka</th>
															<th>Tanggal Tutup</th>
															<th>Status</th>
															<th>Action</th>
														</tr>
													</thead>
													<?php 
													// koneksi database
													$koneksi = mysqli_connect("localhost","root","","pkl");

													// menampilkan data pegawai
													$que = mysqli_query($koneksi,"select * from tb_tanggal");
													$no = 1;
													$count=count($que);
													while($d = mysqli_fetch_array($que)){
													?>
													<tbody>
														<tr>														
															<th scope="row"><?php echo $no++;?><input type="hidden" name="id" value="<?php echo $d['id'];?>"></th>
															<td name="satker"><?php echo $d['satker'];?></td>
															<td name="buka"><?php echo $d['buka'];?></td>
															<td name="tutup"><?php echo $d['tutup'];?></td>															
															<td class="actins">
																<?php
																	$conn= new mysqli("localhost","root","","pkl");
																	$sql=mysqli_query($conn,"SELECT * FROM tb_tanggal");
																	$hasil = mysqli_num_rows($sql);
																	$data = mysqli_fetch_array($sql);
																	$sekarang = date('Y-m-d');
																	$status;
																
																	if(($sekarang > $d["buka"] && $sekarang <= $d["tutup"]) or $d["status"]=='buka'){ ?>
																		<div class="col-sm-6 col-md-4 col-lg-6"><i class="ion-checkmark-round"> <?php echo $d['status'];?> </i></div>
																	<?php } else if(($sekarang > $d["buka"] && $sekarang >= $d["tutup"]) or $d["status"]=='tutup') { ?>
																		<div class="col-sm-6 col-md-4 col-lg-6"><i class="ion-close-round"> <?php echo $d['status'];?> </i></div>
																	<?php
																		} 
																	?>
															</td>
															<td><?php 
																	$conn= new mysqli("localhost","root","","pkl");
																	$sql=mysqli_query($conn,"SELECT * FROM tb_tanggal");
																	$hasil = mysqli_num_rows($sql);
																	$data = mysqli_fetch_array($sql);
																	$sekarang = date('Y-m-d');
																	
																	if(($sekarang > $d["buka"] && $sekarang <= $d["tutup"]) or $d["status"]=='buka'){ ?>
																		<button  type="submit" class="btn btn-default btn-rounded waves-effect waves-light" name="tutup" value="Tutup"><a href="buka.php?id=<?php echo $d['id'];?>&tutup=Tutup"><i class="ion-close-round"> Tutup </i></a></button>
																	<?php } else if($sekarang > $d["buka"] && $sekarang >= $d["tutup"] or $d["status"]=='tutup'){ ?>
																		<button  type="submit" class="btn btn-default btn-rounded waves-effect waves-light" name="buka" value="Buka"><a href="buka.php?id=<?php echo $d['id'];?>&buka=Buka"><i class="ion-checkmark-round"> Buka </i></a></button>
																	<?php
																		} 
																	?>
															</td>
														</tr>
													<?php 
													}
													?>
													</tbody>
												</table>
												</center>
											</div>											
										</div>
									</div>								
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
		
		<!-- jQuery editable -->
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


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

	    <!-- Examples -->
	    <script src="assets/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	    <script src="assets/plugins/jquery-datatables-editable/jquery.dataTables.js"></script> 
	    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
	    <script src="assets/plugins/tiny-editable/mindmup-editabletable.js"></script>
	    <script src="assets/plugins/tiny-editable/numeric-input-example.js"></script>
	    
	    
	    <script src="assets/pages/datatables.editable.init.js"></script>
	    
	    <script>
			$('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
			
		</script>
		
		<!-- jQuery table-basic -->
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


        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        

    </body>
</html>
