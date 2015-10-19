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
  
  <div class="container text-left">
    <h1><a>checkout</a></h1>
    <form id="form_1059324" class="appnitro"  method="post" action="">
          <div class="form_description">
      <h2>Checkout</h2>
      <p>Shopping cart checkout.</p>
    </div>            
      <ul >
      
          <li id="li_1" >
    <label class="description" for="element_1">Name </label>
    <span>
      <input id="element_1_1" name= "element_1_1" class="element text" maxlength="255" size="8" value=""/>
      <label>First</label>
    </span>
    <span>
      <input id="element_1_2" name= "element_1_2" class="element text" maxlength="255" size="14" value=""/>
      <label>Last</label>
    </span> 
    </li>   <li id="li_2" >
    <label class="description" for="element_2">Address </label>
    
    <div>
      <input id="element_2_1" name="element_2_1" class="element text large" value="" type="text">
      <label for="element_2_1">Street Address</label>
    </div>
  
    <div>
      <input id="element_2_2" name="element_2_2" class="element text large" value="" type="text">
      <label for="element_2_2">Address Line 2</label>
    </div>
  
    <div class="left">
      <input id="element_2_3" name="element_2_3" class="element text medium" value="" type="text">
      <label for="element_2_3">City</label>
    </div>
  
    <div class="right">
      <input id="element_2_4" name="element_2_4" class="element text medium" value="" type="text">
      <label for="element_2_4">State / Province / Region</label>
    </div>
  
    <div class="left">
      <input id="element_2_5" name="element_2_5" class="element text medium" maxlength="15" value="" type="text">
      <label for="element_2_5">Postal / Zip Code</label>
    </div>
  
    <div class="right">
      <select class="element select medium" id="element_2_6" name="element_2_6"> 
      <option value="" selected="selected"></option>
<option value="Afghanistan" >Afghanistan</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="Andorra" >Andorra</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Australia" >Australia</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="Brazil" >Brazil</option>
<option value="Brunei" >Brunei</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Canada" >Canada</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Congo" >Congo</option>
<option value="Cook Islands and Niue" >Cook Islands and Niue</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="France" >France</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="India" >India</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="New Zealand" >New Zealand</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="United States" >United States</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option>
  
      </select>
    <label for="element_2_6">Country</label>
  </div> 
    </li>   <li id="li_3" >
    <label class="description" for="element_3">Phone </label>
    <span>
      <input id="element_3_1" name="element_3_1" class="element text" size="3" maxlength="3" value="" type="text"> -
      <label for="element_3_1">(###)</label>
    </span>
    <span>
      <input id="element_3_2" name="element_3_2" class="element text" size="3" maxlength="3" value="" type="text"> -
      <label for="element_3_2">###</label>
    </span>
    <span>
      <input id="element_3_3" name="element_3_3" class="element text" size="4" maxlength="4" value="" type="text">
      <label for="element_3_3">####</label>
    </span>
     
    </li>   <li id="li_4" >
    <label class="description" for="element_4">Credit Card Number </label>
    <div>
      <input id="element_4" name="element_4" class="element text medium" type="text" maxlength="255" value=""/> 
    </div> 
    </li>   <li id="li_5" >
    <label class="description" for="element_5">Security Code </label>
    <div>
      <input id="element_5" name="element_5" class="element text medium" type="text" maxlength="255" value=""/> 
    </div> 
    </li>
      
          <li class="buttons">
          <input type="hidden" name="form_id" value="1059324" />
          
        <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
    </li>
      </ul>
    </form> 



  </div>
  </body>
</html>
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
   <form>
    
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