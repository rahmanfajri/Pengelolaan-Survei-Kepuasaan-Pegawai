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
                            <form role="search" class="navbar-left app-search pull-left hidden-xs">
			                     <input type="text" placeholder="Search..." class="form-control">
			                     <a href=""><i class="fa fa-search"></i></a>
			                </form>


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
                    <div class="container">

                        <!-- Page-Title -->

                        
                        <div class="row">
                        	<div class="col-lg-12">
                        		<div class="card-box">
                        			<h4 class="text-dark header-title m-t-0">Total Revenue</h4>
                        			
                        			<div class="row">
                        				<div class="col-md-8">
                        					<div class="text-center">
												<ul class="list-inline chart-detail-list">
													<li>
														<h5><i class="fa fa-circle m-r-5" style="color: #36404a;"></i>Desktops</h5>
													</li>
													<li>
														<h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Tablets</h5>
													</li>
                                                    <li>
														<h5><i class="fa fa-circle m-r-5" style="color: #bbbbbb;"></i>Mobiles</h5>
													</li>
												</ul>
											</div>

											<div id="morris-area-with-dotted" style="height: 300px;"></div>

                        				</div>


                        				
                        				 <div class="col-md-4">
                                            
                                            <p class="font-600">iMacs <span class="text-primary pull-right">80%</span></p>
                                            <div class="progress m-b-30">
                                              <div class="progress-bar progress-bar-primary progress-animated wow animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                              </div><!-- /.progress-bar .progress-bar-danger -->
                                            </div><!-- /.progress .no-rounded -->
                                            
                                            <p class="font-600">iBooks <span class="text-pink pull-right">50%</span></p>
                                            <div class="progress m-b-30">
                                              <div class="progress-bar progress-bar-pink progress-animated wow animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                              </div><!-- /.progress-bar .progress-bar-pink -->
                                            </div><!-- /.progress .no-rounded -->
                                            
                                            <p class="font-600">iPhone 5s <span class="text-info pull-right">70%</span></p>
                                            <div class="progress m-b-30">
                                              <div class="progress-bar progress-bar-info progress-animated wow animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                              </div><!-- /.progress-bar .progress-bar-info -->
                                            </div><!-- /.progress .no-rounded -->
                                            
                                            <p class="font-600">iPhone 6 <span class="text-warning pull-right">65%</span></p>
                                            <div class="progress m-b-30">
                                              <div class="progress-bar progress-bar-warning progress-animated wow animated" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                              </div><!-- /.progress-bar .progress-bar-warning -->
                                            </div><!-- /.progress .no-rounded -->
                                            
                                            <p class="font-600">I Am <span class="text-success pull-right">40%</span></p>
                                            <div class="progress m-b-30">
                                              <div class="progress-bar progress-bar-success progress-animated wow animated" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                              </div><!-- /.progress-bar .progress-bar-success -->
                                            </div><!-- /.progress .no-rounded -->
                                            
                                            
                                        </div>
                                        
                                        
                                        
                        			</div>
                        			
                        			<!-- end row -->
                        			
                        		</div>
                                
                            </div>
                                    
                            

                        </div>
					</div>
                        <!-- end row -->
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
		
		<!-- Chart JS -->
        <script src="assets/plugins/chart.js/chart.min.js"></script>
        <script src="assets/pages/jquery.chartjs.init.js"></script>
		
        

    </body>
</html>