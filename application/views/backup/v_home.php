<?php
$query = $this->db->query('SELECT * from hunian LIMIT 4 ');
?>

	<div class="banner">
		<div class="container">
			<script src="<?php echo $this->config->base_url(); ?>resource/js/responsiveslides.min.js"></script>
			<script>
				$(function () {
					$("#slider").responsiveSlides({
						auto: true,
						nav: true,
						speed: 500,
						namespace: "callbacks",
						pager: true,
					});
				});

			</script>
			<div id="top" class="callbacks_container">
				<ul class="rslides" id="slider">
					<li>

						<div class="banner-text">
							<h3>Susah cari kontrakkan? sudah disini Saja</h3>
							<p>cepatnya transaksi dengan pemilik, dan mudahnya dalam berkomunikasi adalah hal yang ditawarkan</p>

						</div>

					</li>
					<li>

						<div class="banner-text">
							<h3>Cari Rumah?</h3>
							<p>Kuriak juga menyediakan penawaran rumah dengan harga yang cocok dengan anda</p>


						</div>

					</li>
					<li>
						<div class="banner-text">
							<h3>Pingin bangun rumah?</h3>
							<p>Rumah yang anda bangun perlu bahan?, disini juga tersedia....</p>
						</div>
					</li>
				</ul>
			</div>

		</div>
	</div>

	<!--content-->
	<div class="container">
		<div class="cont">
			<div class="content">
				<div class="content-top-bottom">
					<h2>Featured PRODUCTS</h2>
					<?php 
					$hasil = $query->result_array();
					$gque = $this->db->query('select * from gambarhunian where id_hunian='.$hasil[0]['id_hunian'])->result_array();
					?>
					<div class="col-md-6 men">
						<a href="<?php echo $this->config->base_url(); ?>product/<?php echo $hasil[0]['id_hunian'];?>" class="b-link-stripe b-animate-go  thickbox">
							<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>asset/hunian/<?php echo $gque[0]['slug'];?>" alt="">
							<div class="b-wrapper">
								<h3 class="b-animate b-from-top top-in   b-delay03 ">
									<span>
										<?php echo $hasil[0]['nama_hunian']; ?>
									</span>
								</h3>
							</div>
						</a>

						
						<?php 
							$gque = $this->db->query('select * from gambarhunian where id_hunian='.$hasil[2]['id_hunian'])->result_array();
						?>
						<div class="col-md2">
							<div class="col-md-6 men1">
								<a href="<?php echo $this->config->base_url(); ?>product/<?php echo $hasil[2]['id_hunian'];?>" class="b-link-stripe b-animate-go  thickbox">
									<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>asset/hunian/<?php echo $gque[0]['slug'];?>" alt="">
									<div class="b-wrapper">
										<h3 class="b-animate b-from-top top-in2   b-delay03 ">
											<span>
												<?php echo $hasil[2]['nama_hunian']; ?>
											</span>
										</h3>
									</div>
								</a>

							</div>

							<?php 
								$gque = $this->db->query('select * from gambarhunian where id_hunian='.$hasil[3]['id_hunian'])->result_array();
							?>
							<div class="col-md-6 men2">
								<a href="<?php echo $this->config->base_url(); ?>product/<?php echo $hasil[3]['id_hunian'];?>" class="b-link-stripe b-animate-go  thickbox">
									<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>asset/hunian/<?php echo $gque[0]['slug'];?>" alt="">
									<div class="b-wrapper">
										<h3 class="b-animate b-from-top top-in2   b-delay03 ">
											<span>
												<?php echo $hasil[3]['nama_hunian']; ?>
											</span>
										</h3>
									</div>
								</a>

							</div>
							<div class="clearfix"> </div>
						</div>

						<?php 
					$gque = $this->db->query('select * from gambarhunian where id_hunian='.$hasil[1]['id_hunian'])->result_array();
					?>

					</div>
					<div class="col-md-6">
						<div class="col-md1 ">
							<a href="<?php echo $this->config->base_url(); ?>product/<?php echo $hasil[1]['id_hunian'];?>" class="b-link-stripe b-animate-go  thickbox">
								<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>asset/hunian/<?php echo $gque[0]['slug'];?>" alt="">
								<div class="b-wrapper">
									<h3 class="b-animate b-from-top top-in1   b-delay03 ">
										<span>
											<?php echo $hasil[1]['nama_hunian']; ?>
										</span>
									</h3>
								</div>
							</a>

						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="content-top">
					<h1>NEW PRODUCTS</h1>
					<div class="grid-in">
						<div class="col-md-3 grid-top simpleCart_shelfItem">
							<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
								<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>resource/images/pi.jpg" alt="">
								<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>TRIBECA LIVING</span>

									</h3>
								</div>
							</a>


							<p>
								<a href="single.html">TRIBECA LIVING</a>
							</p>
							<a href="#" class="item_add">
								<p class="number item_price">
									<i> </i>$500.00</p>
							</a>
						</div>
						<div class="col-md-3 grid-top simpleCart_shelfItem">
							<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
								<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>resource/images/pi1.jpg" alt="">
								<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>ESSENTIAL</span>
									</h3>
								</div>
							</a>
							<p>
								<a href="single.html">ESSENTIAL</a>
							</p>
							<a href="#" class="item_add">
								<p class="number item_price">
									<i> </i>$500.00</p>
							</a>
						</div>
						<div class="col-md-3 grid-top simpleCart_shelfItem">
							<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
								<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>resource/images/pi2.jpg" alt="">
								<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>CLARISSA</span>
									</h3>
								</div>
							</a>
							<p>
								<a href="single.html">CLARISSA</a>
							</p>
							<a href="#" class="item_add">
								<p class="number item_price">
									<i> </i>$500.00</p>
							</a>
						</div>
						<div class="col-md-3 grid-top">
							<a href="single.html" class="b-link-stripe b-animate-go  thickbox">
								<img class="img-responsive" src="<?php echo $this->config->base_url(); ?>resource/images/pi4.jpg" alt="">
								<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>LITTLE HOME</span>
									</h3>
								</div>
							</a>
							<p>
								<a href="single.html">LITTLE HOME</a>
							</p>
							<a href="#" class="item_add">
								<p class="number item_price">
									<i> </i>$500.00</p>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!----->
		</div>
		<!---->
	</div>
