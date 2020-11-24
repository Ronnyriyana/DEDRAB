<div class="navbar-custom">
	<ul class="list-unstyled topnav-menu float-right mb-0">

	
		<li class="dropdown notification-list">
			<a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
				<img src="<?= base_url(); ?>assets/dashboard/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
				<span class="d-none d-sm-inline-block ml-1 font-weight-medium">Alex M.</span>
				<i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
			</a>
			<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
				<!-- item-->
				<div class="dropdown-header noti-title">
					<h6 class="text-overflow text-white m-0">Welcome !</h6>
				</div>

				<!-- item-->
				<a href="<?= site_url('login/logout');?>" class="dropdown-item notify-item">
					<i class="mdi mdi-logout-variant"></i>
					<span>Logout</span>
				</a>

			</div>
		</li>

	</ul>

	<!-- LOGO -->
	<div class="logo-box">
		<a href="index.html" class="logo text-center logo-dark">
			<span class="logo-lg">
				<img src="<?= base_url(); ?>assets/dashboard/images/logo.png" alt="" height="22">
				<!-- <span class="logo-lg-text-dark">Uplon</span> -->
			</span>
			<span class="logo-sm">
				<!-- <span class="logo-lg-text-dark">U</span> -->
				<img src="<?= base_url(); ?>assets/dashboard/images/logo-sm.png" alt="" height="24">
			</span>
		</a>

		<a href="index.html" class="logo text-center logo-light">
			<span class="logo-lg">
				<img src="<?= base_url(); ?>assets/dashboard/images/logo-light.png" alt="" height="22">
				<!-- <span class="logo-lg-text-dark">Uplon</span> -->
			</span>
			<span class="logo-sm">
				<!-- <span class="logo-lg-text-dark">U</span> -->
				<img src="<?= base_url(); ?>assets/dashboard/images/logo-sm-light.png" alt="" height="24">
			</span>
		</a>
	</div>

	<ul class="list-unstyled topnav-menu topnav-menu-left m-0">
		<li>
			<button class="button-menu-mobile waves-effect waves-light">
				<i class="mdi mdi-menu"></i>
			</button>
		</li>
	</ul>
</div>