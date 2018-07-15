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
		<h1 style="text-align: center;">Add New Product Category</h1>
		<hr>

		<form class="form-horizontal" action="addCategory_action.php" method="POST">
			<h3>Description:</h3>
			<input type="text" name="description" style="width: 100%;" required>
			<br>
			
			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span>Add New Category</button>
			
		</form>
	</div>