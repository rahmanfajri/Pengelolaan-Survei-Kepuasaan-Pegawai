<?php session_start(); ?>
<div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>

                        	<li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="home.php" class="waves-effect"><i class="ti-home"></i> 
								<span> Dashboard </span>
								</a>
                            </li>
							<?php if($_SESSION['akses']=="Admin") {?>
							<li class="has_sub">
								<a href="hakakses.php" class="waves-effect"><i class="ti-user"></i>
								<span> Hak Akses </span>
								</a>
							</li>
							<li class="has_sub">
                                <a href="dataadm.php" class="waves-effect"><i class="ti-menu-alt"></i>
								<span> Data </span>
								</a>
                            </li>
							<li class="has_sub">
                                <a href="history.php" class="waves-effect"><i class="ion-android-note"></i>
								<span> History </span>
								</a>
                            </li>
							<?php } ?>
							<?php if($_SESSION['akses']=="PIC"){?>
                            <li class="has_sub">
                                <a href="edit.php" class="waves-effect"><i class="ti-pencil-alt"></i>
								<span> Set Tanggal </span>
								</a>
                            </li>

                            <li class="has_sub">
                                <a href="data.php" class="waves-effect"><i class="ti-menu-alt"></i>
								<span> Data </span>
								</a>
                            </li>
							<?php }?>
                            <li class="has_sub">
                                <a href="keluar.php" class="waves-effect"><i class="ti-power-off"></i>
								<span> Logout </span>
								</a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 