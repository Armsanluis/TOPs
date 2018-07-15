<?php
//updateBuildings.php
include "navbar.php";

$id = $_GET["id"];


include "db_config.php";
$sql = "SELECT * FROM items where id = '$id'";

$result = mysqli_query($conn, $sql);

if($result){
	while ($row = mysqli_fetch_assoc($result)) {
		$product_name = $row["product_name"];
		$price = $row["price"];
		$category_id = $row["category_id"];
		$image = $row["image"];
		$product_description = $row["product_description"];
		$instructions = $row["instructions"];
		$ingredients = $row["ingredients"];
		$availability = $row["availability"];
		
		
	}
}



?>


	<div class="container" id="proditems">
		<h1 style="text-align: center;">Update Product Items</h1>
		<hr>
		<form class="form-horizontal" action="updateProductItems_action.php" method="POST">
			<h3>ID:</h3>
			<input type="text" name="id" hidden value="<?php echo $id;?>">
			<br>
			<h3>Product Name:</h3>
			<input type="text" name="product_name" value = "<?php echo $product_name;?>" style="width: 100%;" required>
			<br>
			<h3>Price:</h3>
			<input type="text" name="price" value = "<?php echo $price;?>" style="width: 100%;" required>
			<br>
			<h3>Category ID:</h3>
			<input type="text" name="category_id" hidden value = "<?php echo $category_id;?>" style="width: 100%;" required>
			<br>
			<h3>Image:</h3>
			<input type="text" name="image" value = "<?php echo $image;?>" style="width: 100%;" required>
			<br>
			<h3>Product Description:</h3>
			<input type="text" name="product_description" value = "<?php echo $product_description;?>" style="width: 100%;" required>
			<br>
			<h3>Instructions:</h3>
			<input type="text" name="instructions" value = "<?php echo $instructions;?>" style="width: 100%;" required>
			<br>
			<h3>Ingredients:</h3>
			<input type="text" name="ingredients" value = "<?php echo $ingredients;?>" style="width: 100%;" required>
			<br>
			<h3>Availability:</h3>
			<input type="text" name="availability" value = "<?php echo $availability;?>" style="width: 100%;" required>
			<br>
						
			<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Update Product Items</button>
			
		</form>
	</div>




<?php 
include "footer.php" 
?>
