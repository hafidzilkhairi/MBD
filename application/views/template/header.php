<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Kuriak e-commerce | Home</title>
	<link href="<?php echo $this->config->base_url(); ?>resource/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"
	/>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo $this->config->base_url(); ?>resource/js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<!--theme-style-->
	<link href="<?php echo $this->config->base_url(); ?>resource/css/style.css" rel="stylesheet" type="text/css" media="all"
	/>
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Mattress Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}

	</script>
	<!--fonts-->
	<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<!-- start menu -->
	<link href="<?php echo $this->config->base_url(); ?>resource/css/memenu.css" rel="stylesheet" type="text/css" media="all"
	/>
	<script type="text/javascript" src="<?php echo $this->config->base_url(); ?>resource/js/memenu.js"></script>
	<script>
		$(document).ready(function () {
			$(".memenu").memenu();
		});

	</script>
	<script src="<?php echo $this->config->base_url(); ?>resource/js/simpleCart.min.js"></script>
</head>

<body>
	<!--header-->
	<div class="header">
		<div class="header-top">
			<div class="container">
				<div class="social">
					<ul>
						<li>
							<a href="#">
								<i class="facebok"> </i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="twiter"> </i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="inst"> </i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="goog"> </i>
							</a>
						</li>
						<div class="clearfix"></div>
					</ul>
				</div>
				<div class="header-left">

					<div class="search-box">
						<div id="sb-search" class="sb-search">
							<form action="#" method="post">
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
					</div>

					<!-- search-scripts -->
					<script src="<?php echo $this->config->base_url(); ?>resource/js/classie.js"></script>
					<script src="<?php echo $this->config->base_url(); ?>resource/js/uisearch.js"></script>
					<script>
						new UISearch(document.getElementById('sb-search'));

					</script>
					<!-- //search-scripts -->

					<div class="ca-r">
						<div class="cart box_1">
							<a href="checkout.html">
								<h3>
									<div class="total">
										<span class="simpleCart_total"></span>
									</div>
									<img src="<?php echo $this->config->base_url(); ?>resource/images/cart.png" alt="" />
								</h3>
							</a>
							<p>
								<a href="javascript:;" class="simpleCart_empty">Empty Cart</a>
							</p>

						</div>
					</div>
					<div class="clearfix"> </div>
				</div>

			</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<h1>
						<a href="<?php echo $this->config->base_url(); ?>">Kuriak</a>
					</h1>
				</div>
				<div class=" h_menu4">
					<ul class="memenu skyblue">
						<li>
							<a class="color8" href="<?php echo $this->config->base_url(); ?>">KONTRAKKAN</a>
						</li>
						<li>
							<a class="color1" href="#">RUMAH</a>
						</li>
						<li>
							<a class="color1" href="#">BAHAN BANGUNAN</a>
						</li>
						<li>
							<a class="color6" href="contact.html">CONTACT</a>
						</li>
						<li><a class="color4" href="login.html">Login</a></li>
					</ul>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>