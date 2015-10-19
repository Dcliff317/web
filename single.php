<?php
session_start();
include 'db_connect.php';
include('functions/functions.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Cliffs Sporting Goods Single Product Page // Declan Clifford</title>
    <link rel='shortcut icon' href='/favicon.ico'>
<link href='css/bootstrap.css' rel='stylesheet' type='text/css' media='all' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src='js/jquery.min.js'></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href='css/style.css' rel='stylesheet' type='text/css' media='all' />	
<!--//theme-style-->
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta name='keywords' content='Sport Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design' />
<script type='application/x-javascript'> addEventListener('load', function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->

</head>
<body> 
<!--header-->
	<div class='line'>
	
	</div>
	<div class='header'>
		<div class="logo">
			<a href="home.php"><img class='img-responsive' src='img/cliffslogo.png' alt='"Cliffs Logo"'></a>
		</div>
		<div  class='header-top'>
			<div class='header-grid'>
				<ul class='header-in'>
						<li ><a href='account.html'>My Account   </a> </li>
						<li><a href='cart.php' class='button'><i class='fa fa-shopping-cart'></i></a></li>				
					</ul>
					<div class='search-box'>
					    <div id='sb-search' class='sb-search'>
							<form>
								<input class='sb-search-input' placeholder='Enter your search term...' type='search' name='search' id='search'>
								<input class='sb-search-submit' type='submit' value=''>
								<span class='sb-icon-search'> </span>
							</form>
						</div>
				    </div>
					<!-- search-scripts -->
					<script src='js/classie.js'></script>
					<script src='js/uisearch.js'></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
					<!-- //search-scripts -->
					<div class='online'>
					<a href='cart.php' class='button'>Cart<i class='fa fa-shopping-cart'></i></a>
					</div>
					<div class='clearfix'> </div>
			</div>
			<div class='header-bottom'>
				<div class='h_menu4'><!-- start h_menu4 -->
				<a class='toggleMenu' href='#'>Menu</a>
				<ul class='nav'>
                    <li><a href='product.php'>Catalog</a></li>
                    <li><a href='client.php'>My Account</a></li>
                    <li><a href='home.php'>Welcome Guest!</a></li>
                    <li><a href='#openModal' class='button'>Login</a></li>
                    <li><a href="insert_product.php" class="button">Admin</a></li>
                    <li><a href='cart.php' class='button'><i class='fa fa-shopping-cart'></i></a></li>
                    <li><a href='cart.php' class='button'>Total price:</a></li>
				</ul>
				<div id='openModal' class='modalDialog'>
                <div class='login-card'>
                    <h1>Log-in</h1><br>
                  <form>
                    <input type='text' name='user' placeholder='Username'>
                    <input type='password' name='pass' placeholder='Password'>
                    <input type='submit' name='login' class='login login-submit' value='login'>
                  </form>
                    
                  <div class='login-help'>
                    <a href='#'>Register</a> • <a href='#'>Forgot Password</a>
                    <a href='#close' title='Close' class='close'>X</a>
                  </div>
                </div>
            </div>
				<script type='text/javascript' src='js/nav.js'></script>
			</div><!-- end h_menu4 -->
					
			<div class='clearfix'> </div>
		</div>
		</div>
		<div class='clearfix'> </div>
	</div>
	<!---->
	<!---->
	<?php

    if (isset($_GET['pro_id'])){

        $product_id = $_GET['pro_id']; 
        
        $get_pro = "select * from products where p_id='$product_id'";

        $run_pro = mysqli_query($mysqli, $get_pro);

        while($row_pro=mysqli_fetch_array($run_pro)){

                $pro_id = $row_pro['p_id'];
                $pro_cat = $row_pro['category'];
                $pro_title = $row_pro['pname'];
                $pro_price = $row_pro['pprice'];
                $pro_desc = $row_pro['pdescription'];
                $pro_image = $row_pro['pimage'];
                $pro_sku = $row_pro['pwebid'];
                $pro_stock = $row_pro['pstock'];

                echo "<div class='container'>
					<div class='single'>
									<div class='col-md-9 top-in-single'>
										<div class='col-md-5 single-top'>	
											<ul id='etalage'>
												<li>
													<a href='optionallink.html'>
														<img class='etalage_thumb_image img-responsive' src='' alt='' >
														<img class='etalage_source_image img-responsive' src=".$pro_image." alt='' >
													</a>
												</li>
											</ul>

										</div>	
										<div class='col-md-7 single-top-in'>
											<div class='single-para'>
												<h4>".$pro_title."</h4>
												<p>".$pro_desc."</p>
												<div class='star'>
													<ul>
														<li><i> </i></li>
														<li><i> </i></li>
														<li><i> </i></li>
														<li><i> </i></li>
														<li><i> </i></li>
													</ul>
													<div class='review'>
														<a href='#'> 3 reviews </a>/
														<a href='#'>  Write a review</a>
													</div>
												<div class='clearfix'> </div>
												</div>
												
													<label  class='add-to'>".$pro_price."</label>
												
												<div class='available'>
													<h6>Available Options :</h6>
													<ul>
														
													<li>Size:<select>
														<option>Large</option>
														<option>Medium</option>
														<option>small</option>
														<option>Large</option>
														<option>small</option>
													</select></li>
													<li>Cost:
															<select>
															<option>U.S.Dollar</option>
															<option>Euro</option>
														</select></li>
												</ul>
											</div>
												
													<a href='cart.php' class='cart '>Add to Cart</a>
												
											</div>
										</div>

	               ";
        }
}


    if (isset($_GET['pro_id'])){

        $product_id = $_GET['pro_id']; 
        
        $get_pro = "select * from products order by RAND() LIMIT 0,3";

        $run_pro = mysqli_query($mysqli, $get_pro);

        while($row_pro=mysqli_fetch_array($run_pro)){

                $pro_id = $row_pro['p_id'];
                $pro_cat = $row_pro['category'];
                $pro_title = $row_pro['pname'];
                $pro_price = $row_pro['pprice'];
                $pro_desc = $row_pro['pdescription'];
                $pro_image = $row_pro['pimage'];
                $pro_sku = $row_pro['pwebid'];
                $pro_stock = $row_pro['pstock'];

                echo "<div class='clearfix'> </div>
				<div class='product-top'>
					<div class='col-md-3 grid-product-in'>	
					<div class=' product-grid'>	
						<a href='single.php?pro_id=$pro_id'><img class='img-responsive ' src='".$pro_image."' alt='".$pro_title."'></a>		
						<div class='shoe-in'>
							<h6><a href='single.php?pro_id=$pro_id'>".$pro_title."</a></h6>
							<label>".$pro_price."</label>
							<a href='single.php?pro_id=$pro_id' class='store'>View More</a>
						</div>
						
						<b class='plus-on'>+</b>
					</div>	
					</div>
					<div class='clearfix'> </div>
				</div>
				";
	}
}
?>
	
				</div>
				<div class='col-md-3'>
					<div class='single-bottom'>
						<h4>Brands</h4>
						<ul>
						<li>
							<input type='checkbox'  id='brand' value=''>
							<label for='brand'><span></span> Contrary belief</label>
						</li>
						<li>
							<input type='checkbox'  id='brand1' value=''>
							<label for='brand1'><span></span> Lorem Ipsum</label>
						</li>
						<li>
							<input type='checkbox'  id='brand2' value=''>
							<label for='brand2'><span></span> Fusce feugiat</label>
						</li>
						<li>
							<input type='checkbox'  id='brand3' value=''>
							<label for='brand3'><span></span> Contrary belief</label>
						</li>
						<li>
							<input type='checkbox'  id='brand4' value=''>
							<label for='brand4'><span></span>Injected humour</label>
						</li>
						</ul>
					</div>
					<div class='single-bottom'>
						<h4>Colors</h4>
						<ul>
						<li>
							<input type='checkbox'  id='color' value=''>
							<label for='color'><span></span> Red</label>
						</li>
						<li>
							<input type='checkbox'  id='color1' value=''>
							<label for='color1'><span></span> Blue</label>
						</li>
						<li>
							<input type='checkbox'  id='color2' value=''>
							<label for='color2'><span></span> Black</label>
						</li>
						<li>
							<input type='checkbox'  id='color3' value=''>
							<label for='color3'><span></span> White</label>
						</li>
						<li>
							<input type='checkbox'  id='color4' value=''>
							<label for='color4'><span></span>Green</label>
						</li>
						</ul>
					</div>
					<div class='single-bottom'>
						<h4>Product Categories</h4>
							<div class='product-go'>
								<img class='img-responsive fashion' src='images/sh.png' alt=''>
							<div class='grid-product'>
								<a href='#' class='elit'>Consectetuer adipiscing elit</a>
								<span class=' price-in'><small>$500.00</small> $400.00</span>
							</div>
							<div class='clearfix'> </div>
							</div>
							<div class='product-go'>
								<img class='img-responsive fashion' src='images/sh1.png' alt=''>
							<div class='grid-product'>
								<a href='#' class='elit'>Consectetuer adipiscing elit</a>
								<span class=' price-in'><small>$500.00</small> $400.00</span>
							</div>
							<div class='clearfix'> </div>
							</div>
							<div class='product-go'>
								<img class='img-responsive fashion' src='images/sh2.png' alt=''>
							<div class='grid-product'>
								<a href='#' class='elit'>Consectetuer adipiscing elit</a>
								<span class=' price-in'><small>$500.00</small> $400.00</span>
							</div>
							<div class='clearfix'> </div>
							</div>
				</div>
				</div>
				<div class='clearfix'> </div>		
		</div>
	</div>
                ";
        }
}

?>	

	<!---->











<!--footer-->
	<div class='footer'>
		<div class='col-md-3 footer-left'>
			<h4>Sports</h4>
			<div class='run-top'>
				<ul class='run-grid'>
					<li><a href='product.php'>RUNNING</a></li>
					<li><a href='product.php'>CYCLING</a></li>
					<li><a href='product.php'>TRIATHLON</a></li>
					<li><a href='product.php'>FITNESS</a></li>
					<li><a href='product.php'>TENNIS</a></li>
					<li><a href='product.php'>MORE SPORTS</a></li>
				</ul>
				<ul class='run-grid'>
					<li><a href='product.php'>STYLE</a></li>
					<li><a href='product.php'>SPECIAL</a></li>
					<li><a href='product.php'>BRAND EVENTS</a></li>
				</ul>
			<div class='clearfix'> </div>
			</div>
		</div>
		<div class='col-md-3 footer-left left-footer'>
			<h4>Latest</h4>
			<div class='run-top top-run'>
				<ul class='run-grid'>
					<li><a href='#'>News & Events</a></li>
					<li><a href='#'>Community</a></li>
					<li><a href='#'>Videos</a></li>
					<li><a href='product.php'>Shopping</a></li>
					<li><a href='#'>Sponsorships</a></li>
					<li><a href='#'>more sports</a></li>
				</ul>
				<ul class='run-grid'>
					<li><a href='#'>Clubs and Training</a></li>
					<li><a href='#'>Event Map</a></li>
					<li><a href='#'>Challange the world</a></li>
				</ul>
			<div class='clearfix'> </div>
			</div>
		</div>
		<div class='col-md-2 footer-left left-footer'>
			<h4>Your Account</h4>
				<ul class='run-grid-in'>
					<li><a href='#openModal' class='button'>Login</a></li>
					<li><a href='#'>My Sports</a></li>
					<li><a href='#'>My Events</a></li>
				</ul>
		</div>
		<div class='col-md-4 footer-left left-footer'>
			<ul class='social-in'>
				<li><a href='#'><i> </i></a></li>
				<li><a href='#'><i class='youtube'> </i></a></li>
				<li><a href='#'><i class='facebook'> </i></a></li>
				<li><a href='#'><i class='twitter'> </i></a></li>
			</ul>
			<div class='letter'>
				<h5>DISCLOSURE</h5>
				<span>Dig4530C</span>
				<h6>Individual ecommerce Assignment </h6>
				<p class='footer-class'> “This site is not official and is an assignment for a UCF Digital Media course” Designed by Declan Clifford &copy; 2015 </p>
			</div>
			
		</div>
		<div class='clearfix'> </div>
	</div>
<?php
mysqli_close($mysqli);
?>
</body>
</html>