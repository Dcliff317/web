<?php
session_start();
include 'db_connect.php';
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Cliffs Sporting Goods Home Page // Declan Clifford</title>
    <link rel="shortcut icon" href="/favicon.ico">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sport Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->

</head>
<body> 
<!--header-->
	<div class="line">
	
	</div>
	<div class="header">
		<div class="logo">
			<a href="home.php"><img class='img-responsive' src='img/cliffslogo.png' alt='"Cliffs Logo"'></a>
		</div>
		<div  class="header-top">
			<div class="header-grid">
				<ul class="header-in">
						<li ><a href="account.html">My Account   </a> </li>
						<li><a href="cart.php" class="button"><i class="fa fa-shopping-cart"></i></a></li>				
					</ul>
					<div class="search-box">
					    <div id="sb-search" class="sb-search">
							<form>
								<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
								<input class="sb-search-submit" type="submit" value="">
								<span class="sb-icon-search"> </span>
							</form>
						</div>
				    </div>
					<!-- search-scripts -->
					<script src="js/classie.js"></script>
					<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->
					<div class="online">
					<a href="cart.php" class="button">Cart<i class="fa fa-shopping-cart"></i></a>
					</div>
					<div class="clearfix"> </div>
			</div>
			<div class="header-bottom">
				<div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
                    <li><a href="product.php">Catalog</a></li>
                    <li><a href="client.php">My Account</a></li>
                    <li><a href='home.php'>Welcome Guest!</a></li>
                    <li><a href="#openModal" class="button">Login</a></li>
                    <li><a href="insert_product.php" class="button">Admin</a></li>
                    <li><a href="cart.php" class="button">Cart</i></a></li>
                    <li><a href="cart.php" class="button">Total price:</a></li>
				</ul>
				<div id="openModal" class="modalDialog">
                <div class="login-card">
                    <h1>Log-in</h1><br>
                  <form>
                    <input type="text" name="user" placeholder="Username">
                    <input type="password" name="pass" placeholder="Password">
                    <input type="submit" name="login" class="login login-submit" value="login">
                  </form>
                    
                  <div class="login-help">
                    <a href="#">Register</a> • <a href="#">Forgot Password</a>
                    <a href="#close" title="Close" class="close">X</a>
                  </div>
                </div>
            </div>
				<script type="text/javascript" src="js/nav.js"></script>
			</div><!-- end h_menu4 -->
					
			<div class="clearfix"> </div>
		</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!---->
	<div class="banner">
	<div class="container">
		<div class="banner-matter">
			<h1>Get active get running<span>push your limits</h1>
			<div class="out">
				<a href="product.php" class="find">FIND OUT MORE </a>
				<a href="product.php" class="shop">SHOP</a>
				<div class="clearfix"> </div>
			</div>
		</div>	
		</div>
	</div>
<!---->
<div class="content">
	<div class="sport-your">
<!-- requried-jsfiles-for owl -->
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
							        <script>
									    $(document).ready(function() {
									      $("#owl-demo").owlCarousel({
									        items : 5,
									        lazyLoad : true,
									        autoPlay : true,
									        navigation : true,
									        navigationText :  true,
									        pagination : false,
									      });
									    });
									  </script>
							 <!-- //requried-jsfiles-for owl -->

		<!-- start content_slider -->
		<div class="line1">
	
		</div>
		<div id="example1">
		<div id="owl-demo" class="owl-carousel text-center">
			<? getFeat();?>
		</div>
		</div>
		<h6 class="your-in">FEATURED</h6>
		<div class="line2">
	
		</div>
	</div>
	
<!--footer-->
	<div class="footer">
		<div class="col-md-3 footer-left">
			<h4>Sports</h4>
			<div class="run-top">
				<ul class="run-grid">
					<li><a href="product.php">RUNNING</a></li>
					<li><a href="product.php">CYCLING</a></li>
					<li><a href="product.php">TRIATHLON</a></li>
					<li><a href="product.php">FITNESS</a></li>
					<li><a href="product.php">TENNIS</a></li>
					<li><a href="product.php">MORE SPORTS</a></li>
				</ul>
				<ul class="run-grid">
					<li><a href="product.php">STYLE</a></li>
					<li><a href="product.php">SPECIAL</a></li>
					<li><a href="product.php">BRAND EVENTS</a></li>
				</ul>
			<div class="clearfix"> </div>
			</div>
		</div>
		<div class="col-md-3 footer-left left-footer">
			<h4>Latest</h4>
			<div class="run-top top-run">
				<ul class="run-grid">
					<li><a href="#">News & Events</a></li>
					<li><a href="#">Community</a></li>
					<li><a href="#">Videos</a></li>
					<li><a href="product.php">Shopping</a></li>
					<li><a href="#">Sponsorships</a></li>
					<li><a href="#">more sports</a></li>
				</ul>
				<ul class="run-grid">
					<li><a href="#">Clubs and Training</a></li>
					<li><a href="#">Event Map</a></li>
					<li><a href="#">Challange the world</a></li>
				</ul>
			<div class="clearfix"> </div>
			</div>
		</div>
		<div class="col-md-2 footer-left left-footer">
			<h4>Your Account</h4>
				<ul class="run-grid-in">
					<li><a href="#openModal" class="button">Login</a></li>
					<li><a href="#">My Sports</a></li>
					<li><a href="#">My Events</a></li>
				</ul>
		</div>
		<div class="col-md-4 footer-left left-footer">
			<ul class="social-in">
				<li><a href="#"><i> </i></a></li>
				<li><a href="#"><i class="youtube"> </i></a></li>
				<li><a href="#"><i class="facebook"> </i></a></li>
				<li><a href="#"><i class="twitter"> </i></a></li>
			</ul>
			<div class="letter">
				<h5>DISCLOSURE</h5>
				<span>Dig4530C</span>
				<h6>Individual ecommerce Assignment </h6>
				<p class="footer-class"> “This site is not official and is an assignment for a UCF Digital Media course” Designed by Declan Clifford &copy; 2015 </p>
			</div>
			
		</div>
		<div class="clearfix"> </div>
	</div>
<?php
mysqli_close($mysqli);
?>
</body>
</html>