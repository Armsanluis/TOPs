<?php include "navbarAdmin.php";?>



	<div class="container">

	<?php

if(isset($_GET["del"])){
	echo "<div class='alert alert-danger'>
	<strong>Record was successfully deleted</strong>
	</div>";
};
?>
		<h1 style="text-align: center;">Product Items</h1>
		<hr>
		<?php
		//connect to the database
		include 'db_config.php';

		$sql = "SELECT * FROM items";
		$result = mysqli_query($conn, $sql);
		echo "<table class='table table-bordered'>
				<thead>
					<tr>
						<th>ID</th>
						<th>Product Name</th>
						<th>Price</th>
						<th>Category ID</th>
						<th>Image</th>
						<th>Product Description</th>
						<th>Instructions</th>
						<th>Ingredients</th>
						<th>Availability</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>";
		if(mysqli_num_rows($result) > 0 ){  //mysqli_num_rows ---- is used to check if row is empty or not
			$counter = 0;
			while ($row = mysqli_fetch_assoc($result)) {  //mysqli_fetch_assoc - returns all 
				$counter = $counter+1;
				echo "<tr>";
					echo "<td>".$counter."</td>";
					echo "<td>" . $row["product_name"] . "</td>";
					echo "<td>" . $row["price"] . "</td>";
					echo "<td>" . $row["category_id"] . "</td>";
					echo "<td>" . $row["image"] . "</td>";
					echo "<td>" . $row["product_description"] . "</td>";
					echo "<td>" . $row["instructions"] . "</td>";
					echo "<td>" . $row["ingredients"] . "</td>";
					echo "<td>" . $row["availability"] . "</td>";
					echo "<td><a href='delProductItems.php?id=$row[id]' class='btn btn-danger btn-md' role='button'><i class='glyphicon glyphicon-trash'></i>&nbsp;del</a> &nbsp;&nbsp;<a href='updateProductItems.php?id=$row[id]' class='btn btn-primary btn-md' role='button'><i class='glyphicon glyphicon-edit'></i>&nbsp;upd</a> &nbsp;&nbsp;<a href='viewCategory2.php?id=$row[id]&name=$row[product_name]' class='btn btn-success btn-md' role='button'><i class='glyphicon glyphicon-eye-open'></i>&nbsp;view</a></td>";

				echo "</tr>";
			}
			
		} else {
			echo "No Records Found";
		}
			echo "</tbody></table>";

		mysqli_close($conn);
		?>

		<button class="btn btn-primary"><a href="addProductItems.php" style="text-decoration: none; color: white;">Add New Product Items</a></button>

	</div>




<?php 
include "footer.php" 
?>
	


