<?php
session_start();
include 'db_connect.php';
include("functions/functions.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Cliffs Sporting Goods Cart Page // Declan Clifford</title>
    <link rel="shortcut icon" href="/favicon.ico">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />

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
						<li ><a href="account.html">My Account</a> </li>
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
                    <li><a href="cart.php" class="button"><i class="fa fa-shopping-cart"></i></a></li>
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

		
		<nav class="navbar">
			<div class="container">
				<a class="navbar-brand" href="#">Check Out</a>
				<div class="navbar-right">
					<div class="container minicart"></div>
				</div>
			</div>
		</nav>
		
		<div class="container-fluid breadcrumbBox text-center">
			<ol class="breadcrumb">
				<li><a href="#">Review</a></li>
				<li class="active"><a href="#">Order</a></li>
				<li><a href="#">Payment</a></li>
			</ol>
		</div>
		
		<div class="container text-center">

			<div class="col-md-5 col-sm-12">
				<div class="bigcart"></div>
				<h1>Your shopping cart</h1>
				
			</div>
			
			<div class="col-md-7 col-sm-12 text-left">
				<ul>
					<li class="row list-inline columnCaptions">
						<span>QTY</span>
						<span>ITEM</span>
						<span>Price</span>
					</li>
					<li class="row">
						<span class="quantity">1</span>
						<span class="itemName">Mizuno Glove</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">$99.99</span>
					</li>
					<li class="row">
						<span class="quantity">50</span>
						<span class="itemName">Mizuno Baseball bat</span>
						<span class="popbtn"><a class="arrow"></a></span>
						<span class="price">$295.00</span>
					</li>
					<li class="row totals">
						<span class="itemName">Total:</span>
						<span class="price">$394.99</span>
						<span class="order"> <a href='checkout.php'class="text-center">ORDER</a></span>
					</li>
				</ul>
			</div>

		</div>

		<!-- The popover content -->

		<div id="popover" style="display: none">
			<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
			<a href="#"><span class="glyphicon glyphicon-remove"></span></a>
		</div>
		
		<!-- JavaScript includes -->

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/customjs.js"></script>


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
</body>
</html>
	</body>
</html>