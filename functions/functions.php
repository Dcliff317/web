<?php
//db connect
include 'db_connect.php';


//getting the categories

function getSports (){
	global $mysqli;

	$get_sport = "select * from sports";
	$run_sport = mysqli_query($mysqli, $get_sport);

	while ($row_sport=mysqli_fetch_array($run_sport)){

			$sport_id = $row_sport['sport_id'];
			$sport_title = $row_sport['sport_title'];

			echo "<li><a href='#'>$sport_title</a></li>";

	}
}
function getBrands (){
	global $mysqli;

	$get_brand = "select * from brands";
	$run_brand = mysqli_query($mysqli, $get_brand);

	while ($row_brand=mysqli_fetch_array($run_brand)){

			$brand_id = $row_brand['brand_id'];
			$brand_title = $row_brand['brand_title'];

			echo "<li><a href='#'>$brand_title</a></li>";

	}
}
function getCats (){
	global $mysqli;

	$get_cat = "select * from products LIMIT 0,3 ";
	$run_cat = mysqli_query($mysqli, $get_cat);

	while ($row_cat=mysqli_fetch_array($run_cat)){

			$cat_id = $row_cat['p_id'];
			$cat_title = $row_cat['category'];

			echo "<li><a href='#'>$cat_title</a></li>";

	}
}
function getPro(){
		global $mysqli;

		$get_pro = "select * from products";

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

				echo "<div class='col-md-4 grid-product-in'>	
						<div class='product-grid'>	
							<a href='single.php?pro_id=$pro_id'><img class='img-responsive' src='".$pro_image."' alt='".$pro_title."'></a>		
							<div class='shoe-in'>
								<h6><a href='single.php?pro_id=$pro_id'>".$pro_title."</a></h6>
								<label>".$pro_price."</label>
								<a href='single.php?pro_id=$pro_id' class='store'>Add to Cart</a>
							</div>
							
							<b class='plus-on'>+</b>
						</div>	
						</div>
				";
		}
}
function getProcat(){
		global $mysqli;
		
		$get_pro = "select * from products LIMIT 0,12";

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

				echo "<div class='product-grids'>
						<div class='container'>
						<div class='product-top'>
							<div class='col-md-4 grid-product-in'>	
							<div class='product-grid'>	
								<a href='single.php?pro_id=$pro_id'><img class='img-responsive' src='".$pro_image."'' alt='".$pro_title."'></a>		
								<div class='shoe-in'>
									<h6><a href='single.php?pro_id=$pro_id'>'".$pro_title."' </a></h6>
									<label>Price: ".$pro_price."</label>
									<div class='rw-ui-container'></div>
									<a href='home.php?pro_id=$pro_id' class='store'><button>Add to Cart</button></a>
								</div>
								
								<b class='plus-on'>+</b>
							</div>	
							</div>
				";
		}
}
function getFeat(){
		global $mysqli;

		$get_pro = "select * from products order by RAND() LIMIT 0,8";

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

				echo "<div class='item'>
							<a href='single.php?pro_id=$pro_id' title='image' rel='title1'>
								<img class='img-responsive' src='".$pro_image."'' alt='".$pro_title."'>
							<div class='run'>
								<p>'".$pro_price."'</p>
								<p>'".$pro_title."'</p>
							</div>
							</a>
						</div>
				";
		}
}
function getCart(){
		global $mysqli;

		$get_pro = "select * from products order by RAND() LIMIT 0,4";

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

				print "<tr>";
                                    print "<td><img src = '".$pro_image."' alt = '".$pro_title."' width='25px'; height='25px';/></td>";
                                    print "<td>1</td>";
                                    print "<td>".$pro_title."</td>"; 
                                    print "<td>".$pro_price."</td>";
                                    
                                    print "</tr>";
		}
}

?>
