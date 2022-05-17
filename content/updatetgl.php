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
								$sql = mysql_query('SELECT * FROM tb_tanggal;');
								?>
											<h4 class="m-t-0 m-b-30 header-title"><b>Pengaturan Tanggal</b></h4>
											
											<h5><b>Pilih Satuan Kerja</b></h5>

											<form method="post" action="koneksi_update.php">
											<select class="form-control" name="satker">
		                                        <option>---</option>
												<?php if (mysql_num_rows($sql) > 0) {?>
												<?php while ($row = mysql_fetch_array($sql)) {?>
													<option value="<?php echo $row['satker'];?>"><?php echo $row['satker']; ?></option>
												<?php }?>
												<?php }?>
		                                    </select>
											<div class="form-group">
											<div class="form-group">
			                                			<label class="control-label col-sm-4">Tanggal Mulai</label>
			                                			<div class="col-sm-8">
			                                				<div class="input-group">
																<input type="date" class="form-control" name="mulai" value="<?php echo date(); ?>"></input>
															</div><!-- input-group -->
			                                			</div>
			                                		</div>
			                                		
			                                		<div class="form-group">
			                                			<label class="control-label col-sm-4">Tanggal Selesai</label>
			                                			<div class="col-sm-8">
			                                				<div class="input-group">
																<input type="date" class="form-control" name="selesai" value="<?php echo date(); ?>"></input>
															</div><br><!-- input-group -->
			                                			</div>
			                                		</div>
												<div align="center">
													<button type="submit" class="btn btn-default btn-rounded waves-effect waves-light" name="set">Set Date</button>
												</div>
												</div>
											</form>
										</div>
                        <!-- Page-Title -->
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