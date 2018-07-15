<?php 
include "navbarAdmin.php";
?>



	<div class="container">

	<?php

if(isset($_GET["del"])){
	echo "<div class='alert alert-danger'>
	<strong>Record was successfully deleted</strong>
	</div>";
};
?>
		<h1 style="text-align: center;">Add New Product Items</h1>
		<hr>

		<form class="form-horizontal" action="addProductItems_action.php" method="POST">
			<h3>Product Name:</h3>
			<input type="text" name="product_name" style="width: 100%;" required>
			<br>
			<h3>Price:</h3>
			<input type="text" name="price" style="width: 100%;" required>
			<br>
			<h3>Category ID:</h3>
			<input type="text" name="category_id" style="width: 100%;" required>
			<br>
			<h3>Image:</h3>
			<input type="text" name="image" style="width: 100%;" required>
			<br>
			<h3>Product Description:</h3>
			<input type="text" name="product_description" style="width: 100%;" required>
			<br>
			<h3>Instructions:</h3>
			<input type="text" name="instructions" style="width: 100%;" required>
			<br>
			<h3>Ingredients:</h3>
			<input type="text" name="ingredients" style="width: 100%;" required>
			<br>
			<h3>Availability:</h3>
			<input type="text" name="availability" style="width: 100%;" required>
			<br>
			
			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span>Add New Items</button>
			
		</form>
	</div>