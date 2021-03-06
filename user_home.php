<?php
require("session.php");
require("user_header.php");
require("config.php");
$user_id=$_SESSION['isloginid'];
?>

        <!-- Setting Panel -->
        <div class="hk-settings-panel">
            <div class="nicescroll-bar position-relative">
                <div class="settings-panel-wrap">
                    <div class="settings-panel-head">
                        <a href="javascript:void(0);" id="settings_panel_close" class="settings-panel-close">
                        <span class="feather-icon"><i data-feather="x"></i></span></a>
                    </div>
                    <hr>
                    
                    <h6 class="mb-5">Navigation</h6>
                    <p class="font-14">Menu comes in two modes: dark & light</p>
                    <div class="button-list hk-nav-select mb-10">
                        <button type="button" id="nav_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg">
                        <span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="nav_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg">
                        <span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <h6 class="mb-5">Top Nav</h6>
                    <p class="font-14">Choose your liked color mode</p>
                    <div class="button-list hk-navbar-select mb-10">
                        <button type="button" id="navtop_light_select" class="btn btn-outline-light btn-sm btn-wth-icon icon-wthot-bg">
                        <span class="icon-label"><i class="fa fa-sun-o"></i> </span><span class="btn-text">Light Mode</span></button>
                        <button type="button" id="navtop_dark_select" class="btn btn-outline-primary btn-sm btn-wth-icon icon-wthot-bg">
                        <span class="icon-label"><i class="fa fa-moon-o"></i> </span><span class="btn-text">Dark Mode</span></button>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between align-items-center">
                        <h6>Scrollable Header</h6>
                        <div class="toggle toggle-sm toggle-simple toggle-light toggle-bg-primary scroll-nav-switch"></div>
                    </div>
                    <button id="reset_settings" class="btn btn-primary btn-block btn-reset mt-30">Reset</button>
                </div>
            </div>
            <img class="d-none" src="dist/img/logo-light.svg" alt="brand" />
            <img class="d-none" src="dist/img/logo-1.svg" alt="brand" />
        </div>
        <!-- /Setting Panel -->

        <!-- Main Content -->
        <div class="hk-pg-wrapper">
			<!-- Container -->
            <div class="container mt-xl-50 mt-sm-30 mt-15">
                <!-- Title -->
                <div class="hk-pg-header align-items-top">
                    <div>
                        <?php
                             if(isset($_GET['msg']))
                            {
                        ?>
                        <div class="alert alert-danger">
                          <?php echo $_GET['msg'];?>
                        </div>
                              <?php
                            }
                            ?>
						<h2 class="hk-pg-title font-weight-600 mb-10">Dashboard</h2>
					</div>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
						<div class="hk-row">
							<div class="col-lg-7">
								
								<div class="hk-row">
								<?php 
										$InfoSQL = mysqli_query($con, "SELECT * FROM tamplate_info WHERE user_id = '$user_id' ");
										$form_rows = mysqli_fetch_assoc($InfoSQL);
										$gFirstName = $form_rows['g_name'];
										$gFirstName = explode(' ' , $gFirstName);
										$gFirstName = $user_id.$gFirstName[0];

										$bFirstName = $form_rows['b_name'];
										$bFirstName = explode(' ' , $bFirstName);
										$bFirstName = $bFirstName[0];

										if($form_rows['status'] == 'Active'){
										
									?>
									<div class="col-md-6 col-sm-6">
                                    <a target= "_blank" href="<?php echo "wedding/$gFirstName-weding-$bFirstName"?>">
										<div class="card card-sm">
											<div class="card-body" style="border:2px solid green; box-shadow:1px 2px 3px;">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">You site is ready</span>
													</div>
													<div>
														<span class="badge badge-success badge-pill" id="delivered"></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img width="20%" src="https://static.vecteezy.com/system/resources/thumbnails/000/575/973/small/icon0-vector-437-01.jpg"></span>
                                                    <small class="d-block">Your side is ready. <b>"Click"</b> for love visit</small>
												</div>
											</div>
										</div>
									</a>
									</div>

                                  <?php } ?>							
									<div class="col-md-6 col-sm-6">
                                     <a href="user.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<b><span class="d-block font-15 text-dark font-weight-500">Add Invitation</span></b>
													</div>
													<div>
														<span class="badge badge-pill"></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="dist/img/1.png"></span>
													<small class="d-block">Add your invitation details here</small>
												</div>
											</div>
										</div>
                                    </a>
									</div>
									<div class="col-md-6 col-sm-6">
                                    <a href="demo.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">Select the Demo and Pay</span>
													</div>
													<div>
														<span class="badge badge-danger badge-pill"></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="dist/img/2.png"></span>
													<small class="d-block"><b>Select the demo and pay</b></small>
												</div>
											</div>
										</div>
                                    </a>
									</div>
									<div class="col-md-6 col-sm-6">
                                    <a href="track.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">Track Order</span>
													</div>
													<div>
														<span class="badge badge-primary badge-pill"></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="dist/img/4.png"></span>
													<small class="d-block">Track your order status</small>
												</div>
											</div>
										</div>
                                    </a>
									</div>
                                    <div class="col-md-6 col-sm-6">
                                    <a href="edit_invitation.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">View/Update invitation details</span>
													</div>
													<div>
														<span class="badge badge-success badge-pill" id="delivered"></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="dist/img/5.png"></span>
                                                    <small class="d-block">View/Update invitation details here</small>
												</div>
											</div>
										</div>
									</a>
									</div>
								
									<div class="col-md-6 col-sm-6">
                                    <a href="send_invitation.php">
										<div class="card card-sm">
											<div class="card-body">
												<div class="d-flex justify-content-between mb-5">
													<div>
														<span class="d-block font-15 text-dark font-weight-500">Send_invitation</span>
													</div>
													<div>
														<span class="badge badge-success badge-pill" id="delivered"></span>
													</div>
												</div>
												<div>
													<span class="d-block display-5 text-dark mb-5">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="dist/img/7.png"></span>
                                                    <small class="d-block">Send invitation to your friends and relatives</small>
												</div>
											</div>
										</div>
									</a>
									</div>
									
								</div>	
							</div>
						</div>
					</div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
           <br>
            <br>
<?php
require("user_footer.php");
?>