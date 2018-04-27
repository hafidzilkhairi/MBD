<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
$jumPesan = $this->db->get('pesanuser')->num_rows();
$jumPesanan = ((int) $this->db->get('pesanan')->num_rows())+((int)$this->db->get('pesananhunian')->num_rows()); 
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Glance Design Dashboard an Admin Panel Category Flat Bootstrap Responsive Website Template | General Elements :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Glance Design Dashboard Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

	</script>

	<!-- Bootstrap Core CSS -->
	<!-- <link href="<?php //echo $this->config->base_url(); ?>resource/admin/css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
	crossorigin="anonymous">

	<!-- Custom CSS -->
	<link href="<?php echo $this->config->base_url(); ?>resource/admin/css/style.css" rel='stylesheet' type='text/css' />

	<!-- font-awesome icons CSS -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- //font-awesome icons CSS -->

	<!-- side nav css file -->
	<link href='<?php echo $this->config->base_url(); ?>resource/admin/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'
	/>
	<!-- side nav css file -->

	<!-- js-->
	<!-- <script src="<?php //echo $this->config->base_url(); ?>resource/admin/js/jquery-1.11.1.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo $this->config->base_url(); ?>resource/admin/js/modernizr.custom.js"></script>

	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//webfonts-->

	<!-- Metis Menu -->
	<script src="<?php echo $this->config->base_url(); ?>resource/admin/js/metisMenu.min.js"></script>
	<script src="<?php echo $this->config->base_url(); ?>resource/admin/js/custom.js"></script>
	<link href="<?php echo $this->config->base_url(); ?>resource/admin/css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
</head>

<body class="cbp-spmenu-push">
	<div class="main-content">
		<div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
			<!--left-fixed -navigation-->
			<aside class="sidebar-left">
				<nav class="navbar navbar-inverse">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1>
							<a class="navbar-brand" href="index.html">
								<span class="fa fa-area-chart"></span> Kuriak
								<span class="dashboard_text">Admin dashboard</span>
							</a>
						</h1>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="sidebar-menu">
							<li class="header">MAIN NAVIGATION</li>
							<li class="treeview">
								<a href="<?php echo $this->config->base_url(); ?>/admin2/kelolauser">
									<i class="fa fa-address-book"></i>
									<span>Kelola User</span>
								</a>
							</li>
							<li class="treeview">
								<a href="#">
									<i class="fa fa-laptop"></i>
									<span>Components</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="grids.html">
											<i class="fa fa-angle-right"></i> Grids</a>
									</li>
									<li>
										<a href="media.html">
											<i class="fa fa-angle-right"></i> Media Css</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- /.navbar-collapse -->
				</nav>
			</aside>
		</div>
		<!--left-fixed -navigation-->

		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">

				<!--toggle button start-->
				<button id="showLeftPush">
					<i class="fa fa-bars"></i>
				</button>
				<!--toggle button end-->
				<div class="profile_details_left">
					<!--notifications of menu start -->
					<ul class="nofitications-dropdown">
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<i class="fa fa-envelope"></i>
								<span class="badge"><?php echo $this->db->get('pesanuser')->num_rows(); ?></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have <?php echo $jumPesan ?> new messages</h3>
									</div>
								</li>
								<!-- <li>
									<a href="#">
										<div class="user_img">
											<img src="<?php //echo $this->config->base_url(); ?>resource/admin/images/1.jpg" alt="">
										</div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet</p>
											<p>
												<span>1 hour ago</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</a>
								</li> -->
								<li>
									<div class="notification_bottom">
										<a href="#">See all messages</a>
									</div>
								</li>
							</ul>
						</li>
						<li class="dropdown head-dpdn">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="badge blue"><?php echo $jumPesanan?></span>
							</a>
							<ul class="dropdown-menu">
								<li>
									<div class="notification_header">
										<h3>You have <?php echo $jumPesanan ?> new notification</h3>
									</div>
								<!-- </li>
								<li>
									<a href="#">
										<div class="user_img">
											<img src="<?php echo $this->config->base_url(); ?>resource/admin/images/4.jpg" alt="">
										</div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet</p>
											<p>
												<span>1 hour ago</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</a>
								</li>
								<li class="odd">
									<a href="#">
										<div class="user_img">
											<img src="<?php //echo $this->config->base_url(); ?>resource/admin/images/1.jpg" alt="">
										</div>
										<div class="notification_desc">
											<p>Lorem ipsum dolor amet </p>
											<p>
												<span>1 hour ago</span>
											</p>
										</div>
										<div class="clearfix"></div>
									</a>
								</li>-->
								<li>
									<div class="notification_bottom">
										<a href="#">See all notifications</a>
									</div>
								</li>
							</ul>
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<!--notification menu end -->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">


				<!--search-box-->
				<div class="search-box">
					<form class="input">
						<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31" />
						<label class="input__label" for="input-31">
							<svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
								<path d="m0,0l404,0l0,77l-404,0l0,-77z" />
							</svg>
						</label>
					</form>
				</div>
				<!--//end-search-box-->

				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<div class="profile_img">
									<span class="prfil-img">
										<img src="<?php echo $this->config->base_url(); ?>resource/admin/images/2.jpg" alt=""> </span>
									<div class="user-name">
										<p><?php $this->db->where('id_user',(int) $_SESSION['userAdminId']); echo $this->db->get('user','username_user')->result_array()[0]['username_user']; ?></p>
										<span>Administrator</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
								</div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li>
									<a href="<?php $this->config->base_url(); ?>admin2/logout">
										<i class="fa fa-sign-out"></i> Logout</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //header-ends -->
