<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
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

	<!-- Jquery JS -->
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>

	<!-- Bootstrap JS -->
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
	crossorigin="anonymous"></script>

	<!-- Bootstrap CSS -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
	crossorigin="anonymous">

	<!-- DataTable JS -->
	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

	<!-- DataTable CSS -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo $this->config->base_url(); ?>resource/admin/css/bootstrap.css" rel='stylesheet' type='text/css' />

	<!-- Custom CSS -->
	<link href="<?php echo $this->config->base_url(); ?>resource/admin/css/style.css" rel='stylesheet' type='text/css' />

	<!-- font-awesome icons CSS -->
	<link href="<?php echo $this->config->base_url(); ?>resource/admin/css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons CSS -->

	<!-- side nav css file -->
	<link href='<?php echo $this->config->base_url(); ?>resource/admin/css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'
	/>
	<!-- side nav css file -->

	<!-- js-->
	<!-- < src="<?php //echo $this->config->base_url(); ?>resource/admin/js/jquery-1.11.1.min.js"> -->
	<script src="<?php echo $this->config->base_url(); ?>resource/admin/js/modernizr.custom.js"></script>

	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<!--//webfonts-->

	<!-- Metis Menu -->
	<script src="<?php echo $this->config->base_url(); ?>resource/admin/js/metisMenu.min.js"></script>
	<script src="<?php echo $this->config->base_url(); ?>resource/admin/js/custom.js"></script>
	<link href="<?php echo $this->config->base_url(); ?>resource/admin/css/custom.css" rel="stylesheet">
	<!--//Metis Menu -->
	<title>Document</title>
</head>

<body>
	<div id="page-wrapper">
		<div class="main-page login-page ">
			<h2 class="title1">Login</h2>
			<div class="widget-shadow">
				<div class="login-body">
					<form action="<?php echo $this->config->base_url(); ?>admin2/login" method="post">
						<input type="text" class="inputusername user" name="username" placeholder="Enter Your Email" required="">
                        <input type="password" name="pwd" class="inputpwd lock" placeholder="Password" required="">
                        <span style='color:red;'><?php echo validation_errors(); ?></span>
						<div class="forgot-grid">
							<label class="checkbox">
								<input type="checkbox" name="checkbox" checked="">
								<i></i>Remember me</label>
							<div class="forgot">
								<a href="#">forgot password?</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<input type="submit" name="Sign In" value="Sign In">
					</form>
				</div>
			</div>

		</div>
	</div>
</body>

</html>
<!-- main content start-->
