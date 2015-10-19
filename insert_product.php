<!DOCTYPE>
<?include ('db_connect.php'); 
?>
<html> 
	<head>
		<title>Cliffs Sporting Goods Insert Product // Declan Clifford</title>
	</head>

	<body>
			<form action="insert_product.php" method="post" enctype="multipart/form-data">

				<table align= "center"width ="100%" border ="2px">



					<tr align = "center">
						<td colspan='8'><h2> Insert New Post Here</h2></td>
					</tr>
					<tr>
						<td>Product Name</td>
						<td><input type="text" name = "product_name" required></td>
					</tr>
					<tr>
						<td>Product description</td>
						<td><textarea name = "product_desc" cols="20" rows="10"></textarea></td>
					</tr>
					<tr>
						<td>Product category</td>
						<td><input type="text" name = "product_category"></td>
					</tr>
					<tr>
						<td>Product sport</td>
						<td>
						<select name="product_sport" required>
							<option>Select a sport<option>
							<?php
							$get_sport = "select * from sports";
								$run_sport = mysqli_query($mysqli, $get_sport);

								while ($row_sport=mysqli_fetch_array($run_sport)){

										$sport_id = $row_sport['sport_id'];
										$sport_title = $row_sport['sport_title'];

										echo "<option value='$sport_id'>$sport_title</option>";

								}

							?></td>
					</tr>
					<tr>
						<td>Product web id</td>
						<td><input type="text" name = "product_id" required></td>
					</tr>
					<tr>
						<td>Product stock</td>
						<td><input type="text" name = "product_stock" required></td>
					</tr>
					<tr>
						<td>Product price</td>
						<td><input type="text" name = "product_price" required></td>
					</tr>
					<tr>
						<td>Product image</td>
						<td><input type="file" name = "product_image" required></td>
					</tr>
					<tr align="center">
						
						<td colspan='8'><input type="submit" name = "insert_post" value="insert product now"</td>
					</tr>




	</body>
</html>
<?php
	if(isset($_POST['insert_post'])){
			$product_name = $_POST['product_name'];
			$product_desc = $_POST['product_desc'];
			$product_cat = $_POST['product_cat'];
			$product_id = $_POST['product_id'];
			$product_stock = $_POST['product_stock'];
			$product_price = $_POST['product_price'];
			
			$product_image = $_FILES['product_image']['name'];
			$product_image_tmp = $_FILES['product_image']['tmp_name'];

			echo $insert_product = "insert into products (pname, pdescription, category, pwebid, pstock, pprice, pimage) 
			values ('$product_name','product_desc','product_cat','product_id','product_stock','product_price','product_image')";

	}











?>