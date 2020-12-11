<header id="topnav">
    <!-- Topbar Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="dropdown notification-list">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle nav-link">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </li>
                <?php if($this->session->userdata('user_logged') == null){ ?>
                <li class="dropdown notification-list">
                    <a href="#" class="nav-link right-bar-toggle waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-center">
                        <span class="d-none d-sm-inline-block ml-1 font-weight-medium">Login</span>
                    </a>
                </li>
                <?php }else{ ?>
                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="<?php echo base_url(); ?>assets/images/users/profile.png" alt="user-image" class="rounded-circle">
                        <span class="d-none d-sm-inline-block ml-1 font-weight-medium"><?= $this->session->userdata('username'); ?></span>
                        <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-header noti-title">
                            <h6 class="text-overflow text-white m-0">Selamat Datang !</h6>
                        </div>
                        
                        <div class="dropdown-divider"></div>

                        <!-- item-->
                        <a href="<?= site_url('login/logout');?>" class="dropdown-item notify-item">
                            <i class="mdi mdi-logout-variant"></i>
                            <span>Logout</span>
                        </a>

                    </div>
                </li>
                <?php } ?>
            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="<?php echo base_url(); ?>" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <span class="logo-lg-text-light">DED &amp; RAB</span>
                    </span>
                    <span class="logo-sm">
                        <span class="logo-lg-text-light">D&amp;R</span>
                    </span>
                </a>

                <a href="<?php echo base_url(); ?>" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <span class="logo-lg-text-light">DD</span>
                    </span>
                    <span class="logo-sm">
                        <span class="logo-lg-text-light">DD</span>
                    </span>
                </a>
            </div>

        </div> <!-- end container-fluid-->
    </div>
    <!-- end Topbar -->

    <div class="topbar-menu">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <a href="#">
                            <i class="mdi mdi-cash-usd-outline"></i>Harga Upah dan Material
                        </a>
                    </li>
                    
                    <li class="has-submenu">
                        <a href="#">
                            <i class="mdi mdi-account-supervisor-outline"></i>Analisis HSP
                        </a>
                    </li>

                </ul>
                <!-- End navigation menu -->

                <div class="clearfix"></div>
            </div>
            <!-- end #navigation -->
        </div>
        <!-- end container -->
    </div>
    <!-- end navbar-custom -->

</header>


<div id="modalber" class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-labelledby="myCenterModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myCenterModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
            <form action="<?= base_url('index.php/login');?>" method="POST" class="parsley-examples" data-parsley-validate novalidate>
                <input type="hidden" name="redirect" id="redirect" value="<?= current_url();?>">
                <div class="form-group">
					<label for="userName">User Name<span class="text-danger">*</span></label>
					<input type="text" name="username" parsley-trigger="change" required
							 class="form-control" id="userName">
				</div>
				<div class="form-group">
					<label for="Password">Password<span class="text-danger">*</span></label>
					<input id="Password" name="password" type="password" required
							class="form-control">
				</div>
				<div class="form-group text-right mb-0">
					<button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
						Submit
					</button>
					<button type="reset" class="btn btn-secondary waves-effect">
						Cancel
					</button>
				</div>

			</form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->