<?php
	$user_id=$this->session->userdata('username');
 
	if(!$user_id){
 
  		redirect('login');
	}
 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Share-it-up! : Home</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href=<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css"?> rel="stylesheet">      
		<link href=<?php echo base_url()."assets/bootstrap/css/bootstrap-responsive.min.css"?> rel="stylesheet">		
		<link href=<?php echo base_url()."assets/themes/css/bootstrappage.css"?> rel="stylesheet"/>
		
		<!-- logo icon -->
		<link rel="icon" href="<?php echo base_url(); ?>assets/img/icon.png" type="image/png">

		<!-- global styles -->
		<link href=<?php echo base_url()."assets/themes/css/flexslider.css"?> rel="stylesheet">
		<link href=<?php echo base_url()."assets/themes/css/main.css" ?> rel="stylesheet">

		<!--Catatan popup-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic'>
		<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

    	<!-- <link rel="stylesheet" href="assets/css/style.css"> -->

		<!-- scripts -->
		<script src=<?php echo base_url()."assets/themes/js/jquery-1.7.2.min.js"?>></script>
		<script src=<?php echo base_url()."assets/bootstrap/js/bootstrap.min.js"?>></script>				
		<script src=<?php echo base_url()."assets/themes/js/superfish.js"?>></script>	
		<script src=<?php echo base_url()."assets/themes/js/jquery.scrolltotop.js"?>></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>
    <body>


    <form action="<?php echo base_url()."Login/aksi_login"; ?>" method="POST" class="form login">
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">
							<li><b>Hi, <?php echo $this->session->userdata('nama_user'); ?></b>		</li>	
							
								
							<li><a style="padding: 3px 5px;" class="btn btn-inverse large" href="<?php echo site_url('Logout'); ?>">Logout</a></li>		
						</ul>
					</div>
				</div>
			</div>
		</div>


		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<a href=<?php echo base_url().""?> class="logo pull-left"><img src="assets/img/logo.png" class="site_logo" alt="" style="margin-left:-10px; width:11%;height:11%;"></a>
					<nav id="menu" class="pull-right">
						<ul>
							<li><a href="<?php echo base_url("home")?>">Home</a>					
								<!-- <ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul> -->
							</li>															
							<li><a href="<?php echo base_url("profile")?>">Profile</a>
								<!-- <ul>
									<li><a href="./products.html">Lacinia nibh</a></li>									
									<li><a href="./products.html">Eget molestie</a></li>
									<li><a href="./products.html">Varius purus</a></li>									
								</ul> -->								
							<li><a href="">Barang</a>
								<!-- <ul>									
									<li><a href="./products.html">Gifts and Tech</a></li>
									<li><a href="./products.html">Ties and Hats</a></li>
									<li><a href="./products.html">Cold Weather</a></li>
								</ul> -->
							</li>							
							<!-- <li><a href="./products.html"></a></li>
							<li><a href="./products.html">Best Seller</a></li>
							<li><a href="./products.html">Top Seller</a></li> -->
						</ul>
					</nav>
				</div>
			</section>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="<?php echo base_url("themes/images/carousel/banner-1.jpg")?>" alt="" />
						</li>
						<!-- <li>
							<img src="themes/images/carousel/banner-2.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li> -->
					</ul>
				</div>			
			</section>
			<section class="header_text">
				We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates. 
				<br/>Don't miss to use our cheap abd best bootstrap templates.
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Feature <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$17.25</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/ladies/2.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Quis nostrud exerci tation</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$32.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/3.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Know exactly turned</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$14.20</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/4.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">You think fast</a><br/>
														<a href="products.html" class="category">World once</a>
														<p class="price">$31.45</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/5.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Know exactly</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$22.30</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/6.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$40.25</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/7.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">You think water</a><br/>
														<a href="products.html" class="category">World once</a>
														<p class="price">$10.45</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/ladies/8.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Quis nostrud exerci</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$35.50</p>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Latest <strong>Products</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">
										<div class="active item">
											<ul class="thumbnails">												
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
														<p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware2.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$25.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Quis nostrud exerci tation</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$17.55</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware6.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Know exactly turned</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$25.30</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware5.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">You think fast</a><br/>
														<a href="products.html" class="category">World once</a>
														<p class="price">$25.60</p>
													</div>
												</li>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware4.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Know exactly</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$45.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware3.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Ut wisi enim ad</a><br/>
														<a href="products.html" class="category">Commodo consequat</a>
														<p class="price">$33.50</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware2.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">You think water</a><br/>
														<a href="products.html" class="category">World once</a>
														<p class="price">$45.30</p>
													</div>
												</li>
												<li class="span3">
													<div class="product-box">
														<p><a href="product_detail.html"><img src="themes/images/cloth/bootstrap-women-ware1.jpg" alt="" /></a></p>
														<a href="product_detail.html" class="title">Quis nostrud exerci</a><br/>
														<a href="products.html" class="category">Quis nostrud</a>
														<p class="price">$25.20</p>
													</div>
												</li>																																	
											</ul>
										</div>
									</div>							
								</div>
							</div>						
						</div>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="themes/images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="themes/images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="themes/images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/35.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/1.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/2.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="themes/images/clients/4.png"></a>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="./index.html">Homepage</a></li>  
							<li><a href="./about.html">About Us</a></li>
							<li><a href="./contact.html">Contac Us</a></li>
							<li><a href="./cart.html">Your Cart</a></li>
							<li><a href="./register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="themes/images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script src="themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>
